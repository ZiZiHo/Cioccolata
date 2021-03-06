<?php

namespace App\Http\Controllers;

use App\News;
use App\User;
use App\Order;
use App\Product;
use App\ContactUs;
use App\ProductType;
use App\Order_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{
    //
    function index()
    {
        $product = Product::orderby('sort', 'desc')->get();
        $news = News::orderby('date', 'desc')->get();
        $count = \Cart::getContent()->count();
        return view('front.index', compact('product', 'news' , 'count'));
    }

    function about()
    {
        return view('front.about.index');
    }

    function knowledge()
    {
        return view('front.knowledge.index');
    }

    function diy()
    {
        return view('front.diy.index');
    }

    function news()
    {
        $news = News::orderby('date', 'desc')->get();
        $interview = News::where('news_type_id', '2')->orderby('date', 'desc')->get();
        $event = News::where('news_type_id', '3')->orderby('date', 'desc')->get();
        return view('front.news.index', compact('news', 'interview', 'event'));
    }

    function product(Request $request)
    {
        $type_id = $request->type_id;
        $count = \Cart::getContent()->count();
        if ($type_id && $type_id < 4) {
            $record = Product::where('product_type_id', $type_id)->orderby('sort', 'desc')->get();
        } else {
            $record = Product::orderby('sort', 'desc')->get();
            $type_id = 4;
        }

        // desc 大->小 預設小->大 = asc
        $productType = ProductType::get();
        // dd($record[0]);
        return view('front.product.index', compact('record', 'productType', 'type_id' , 'count'));
    }

    public function shoppingCarFirst()
    {
        $cartCollection = \Cart::getContent()->sortKeys();
        // dd($cartCollection);
        return view('front.shopping-cart.cart-1', compact('cartCollection'));
    }

    public function shoppingCarSecond()
    {

        return view('front.shopping-cart.cart-2');
    }

    public function shoppingCarThird()
    {
        $cartProducts = \Cart::getContent();
        return view('front.shopping-cart.cart-3', compact('cartProducts'));
    }

    public function shoppingCarFourth()
    {
        $cartProducts = \Cart::getContent();
        return view('front.shopping-cart.cart-4', compact('cartProducts'));
    }

    function member()
    {
        $data = User::where('id' , Auth::id())->get()->first();

        return view('auth.edit' , compact('data'));
    }

    function memberOrder()
    {
        $userID = Auth::id();
        $userEmail = User::where('id' , $userID)->get()->first()->email;

        $record = Order::where('email',$userEmail )->get();

        return view('auth.member-order-list' , compact('record'));
    }

    function memberEdit(Request $request)
    {
        // dd($request);
        if($request->password == $request->password_confirmation)
        {
            User::where('email' , $request->email)
            ->update([
                'password' => Hash::make($request->password),
                'name' => $request->name,
                'gender' => $request->gender,
                'birthday' => $request->birthday,
                'phone' => $request->phone,
                'address' => $request->address,
            ]);
        }

        $data = User::where('id' , Auth::id())->get()->first();

        return view('auth.edit' , compact('data'));
    }

    public function add(Request $request)
    {
        $product = Product::find($request->productId);

        \Cart::add(array(
            'id' => $product->id, // inique row ID
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->qty,
        ));

        return 'success';
    }

    public function update(Request $request)
    {
        \Cart::update($request->productId, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->newQty
            ),
        ));
    }

    public function delete(Request $request)
    {


        if ($request->productId) {
            \Cart::remove($request->productId);
            return 'success';
        } else {
            return 'fail';
        }
    }

    public function orderCheck(Request $request)
    {
        $requestData = $request;
        // todo 會員資料代入
        if ($requestData->different == 'on') {
            $member_id = Auth::id();
            $requestData = User::where('id', $member_id)->get()->first();
        }

        $orederNumber = 'COCOA' . time() . rand(1, 999);
        $address = $requestData->zipcode . $requestData->county . $requestData->district . $requestData->address;

        $order['order_no'] = $orederNumber;
        $order['name'] = $requestData->name;
        $order['phone'] = $requestData->phone;
        $order['gender'] = $requestData->gender;
        $order['email'] = $requestData->email;
        $order['address'] = $address;
        // $order['price'] = 99999999;
        // 以下是會員資料無關內容
        $order['pay_type'] = $request->payment;
        $order['invoice'] = $request->invoice;
        $order['shipping'] = $request->shipment;
        // $order['shipping_fee'] = 99999999;
        $order['shipping_status_id'] = 0;
        $order['order_status_id'] = 0;
        $order['remark'] = $request->remark;

        Session::put('order', $order);
        return redirect('/shopping-car/3');
    }

    public function createOrder(Request $request)
    {
        $orderSession = Session::get('order');
        $cartProducts = \Cart::getContent();

        $orderDB  = Order::create([
            'order_no' => $orderSession['order_no'],
            'name' => $orderSession['name'],
            'phone' => $orderSession['phone'],
            'email' => $orderSession['email'],
            'address' => $orderSession['address'],
            'price' => 99999999,
            'pay_type' => $orderSession['pay_type'],
            'shipping' => $orderSession['shipping'],
            'invoice' => $orderSession['invoice'],
            'shipping_fee' => 99999999,
            'shipping_status_id' => 0,
            'order_status_id' => 0,
        ]);

        $totalPrice = 0;

        foreach ($cartProducts as $cartProduct) {
            $product = Product::find($cartProduct->id);
            $totalPrice += $product->price * $cartProduct->quantity;

            Order_detail::create([
                'order_id' => $orderDB->id,
                'product_id' => $product->id,
                'qty' => $cartProduct->quantity,
                'old' => json_encode($product)
            ]);
        }

        $orderDB->update([
            'price' => $totalPrice,
            'shipping_fee' => $totalPrice > 1000 ? 0 : 60,
        ]);

        return redirect('/shopping-car/4');
    }

    public static function clear()
    {
        \Cart::clear();
    }

    public function finish(Request $request)
    {
        Session::flush();
        \Cart::clear();
        return redirect('/');
    }

    function storeContactUs(Request $request)
    {
        ContactUs::create($request->all());

        return redirect('/')->with('message', '成功聯繫我們');
    }
}
