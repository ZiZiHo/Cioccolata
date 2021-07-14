<?php

namespace App\Http\Controllers;

use App\Order;
use App\Order_detail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index()
    {
        $record = Order::get();

        // return view('admin.news.index' , compact('record'));
        return view('admin.order.index' , compact('record'));
    }

    public function edit($id)
    {
        $record = Order_detail::where('order_id',$id)->get();
        // dd(json_decode($record->first()->old));
        // return view('admin.news.index' , compact('record'));
        return view('admin.order.cart-4' , compact('record'));
    }

    public function delete($id)
    {
        $record = Order::get()->find($id);
        $record->delete();
        // return view('admin.news.index' , compact('record'));
        return redirect('/admin/order')->with('message','刪除成功');
    }
}
