<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\ContactUs;
use App\ProductType;
use App\Order_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{
    //
    function index()
    {

        return view('front.index');
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

    function product(Request $request)
    {
        $type_id = $request->type_id;

        if ($type_id && $type_id < 4) {
            $record = Product::where('product_type_id', $type_id)->orderby('sort', 'desc')->get();
        } else {
            $record = Product::orderby('sort', 'desc')->get();
            $type_id = 4;
        }

        // desc 大->小 預設小->大 = asc
        $productType = ProductType::get();
        // dd($record[0]);
        return view('front.product.index', compact('record', 'productType', 'type_id'));
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
        return view('front.shopping-cart.cart-4' , compact('cartProducts'));
    }
    public function add(Request $request)
    {
        $product = Product::find($request->productId);
        // dd($product);
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
        // dd(123);
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

        // todo 會員資料代入
        $orederNumber = 'COCOA' . time() . rand(1, 999);
        $address = $request->zipcode . $request->county . $request->district . $request->address;



        $order['order_no'] = $orederNumber;
        $order['name'] = $request->name;
        $order['phone'] = $request->phone;
        $order['gender'] = $request->gender;
        $order['email'] = $request->email;
        $order['address'] = $address;
        // $order['price'] = 99999999;
        $order['pay_type'] = $request->payment;
        $order['invoice'] = $request->invoice;
        $order['shipping'] = $request->shipment;
        // $order['shipping_fee'] = 99999999;
        $order['shipping_status_id'] = 0;
        $order['order_status_id'] = 0;
        $order['remark'] = $request->remark;




        // dd($cartProducts);
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
}
