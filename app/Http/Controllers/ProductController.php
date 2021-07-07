<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        $record = Product::get();

        // dd($record);
        return view('admin.product.index' , compact('record'));
    }

    function create()
    {
        // dd(123);
        // $newsType = NewsType::get();
        return view('admin.product.create');
    }

    function store(Request $request)
    {
        $path = '';

        $requestData = $request->all();

        // $newsTypeName = NewsType::find($requestData['news_type_id'])->type_name;

        // dd($newsTypeName);

        if($request->hasfile('photo'))
        {
            $requestData['photo'] = FileController::imageUpload($request->file('photo') , '巧克力薄片');
        }

        // dd($requestData['media']);
        // dd($requestData);

        Product::create($requestData);

        return redirect('/admin/product')->with('message','新增成功');
    }
}
