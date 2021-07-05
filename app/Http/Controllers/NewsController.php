<?php

namespace App\Http\Controllers;

use App\News;
use App\NewsType;
use Illuminate\Http\Request;
use App\Http\Controllers\FileController;

class NewsController extends Controller
{
    function index()
    {
        $record = News::get();
        
        // dd(123);
        return view('admin.news.index' , compact('record'));
    }

    function create()
    {
        // dd(123);
        $newsType = NewsType::get();
        return view('admin.news.create', compact('newsType'));
    }

    function store(Request $request)
    {
        $path = '';

        $requestData = $request->all();

        $newsTypeName = NewsType::find($requestData['news_type_id'])->type_name;

        // dd($newsTypeName);

        if($request->hasfile('media'))
        {
            $requestData['media'] = FileController::imageUpload($request->file('media') , $newsTypeName);
        }


        News::create($request->all());

        return redirect('/admin/news')->with('message','新增成功');
    }
}
