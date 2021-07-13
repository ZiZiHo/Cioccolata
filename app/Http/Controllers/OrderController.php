<?php

namespace App\Http\Controllers;

use App\Order;
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

    public function delete($id)
    {
        $record = Order::get()->find($id);
        $record->delete();
        // return view('admin.news.index' , compact('record'));
        return redirect('/admin/order')->with('message','刪除成功');
    }
}
