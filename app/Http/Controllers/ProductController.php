<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        $ProductType = ProductType::get();

        return view('admin.product.create',compact('ProductType'));
    }

    function store(Request $request)
    {
        $path = '';

        $requestData = $request->all();

        if($request->hasfile('photo'))
        {
            $requestData['photo'] = FileController::imageUpload($request->file('photo') , '巧克力薄片');
        }

        Product::create($requestData);

        return redirect('/admin/product')->with('message','新增成功');
    }

    function edit($id)
    {
        // dd(123);
        $productType = ProductType::get();
        $record = Product::get()->find($id);
        // dd($record);
        return view('admin.product.edit',compact('productType', 'record'));
    }

    function update(Request $request , $id)
    {
        $requestData = $request->all();

        $productTypeName = ProductType::find($requestData['product_type_id'])->product_type_name;

        if($request->hasfile('photo'))
        {
            File::delete(public_path().$request->photo);
            
            $requestData['photo'] = FileController::imageUpload($request->file('photo') , $productTypeName);
        }
        unset($requestData['_token']);
        // dd($requestData);
        Product::where('id' , $id)
            ->update(
                $requestData
            );

        return redirect('/admin/product')->with('message','編輯成功');

    }

    function delete($id)
    {
        $request = Product::get()->find($id);

        File::delete(public_path().$request->photo);

        $request->delete();

        return redirect('/admin/product')->with('message','刪除成功');
    }
}
