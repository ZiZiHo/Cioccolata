<?php

namespace App\Http\Controllers;

use App\News;
use App\NewsType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\FileController;

class NewsController extends Controller
{
    function index()
    {
        $record = News::get();

        return view('admin.news.index' , compact('record'));
    }

    function create()
    {
        $newsType = NewsType::get();

        return view('admin.news.create', compact('newsType'));
    }

    function store(Request $request)
    {
        $path = '';

        $requestData = $request->all();

        $newsTypeName = NewsType::find($requestData['news_type_id'])->type_name;

        if($request->hasfile('media'))
        {
            $requestData['media'] = FileController::imageUpload($request->file('media') , $newsTypeName);
        }


        News::create($requestData);

        return redirect('/admin/news')->with('message','新增成功');
    }

    function edit($id)
    {
        $record = News::get()->find($id);
        $newsType = NewsType::get();

        return view('admin.news.edit', compact('record', 'newsType'));
    }

    function update(Request $request , $id)
    {
        $requestData = $request->all();

        $newsTypeName = NewsType::find($requestData['news_type_id'])->type_name;

        if($request->hasfile('media'))
        {
            File::delete(public_path().$request->photo);

            $requestData['media'] = FileController::imageUpload($request->file('media') , $newsTypeName);

        }

        News::where('id' , $id)
            ->update([
                'media' => $requestData['media'],
                'title' => $request->title,
                'summary' => $request->summary,
                'news_type_id' => $request->news_type_id,
                'date' => $request->date,
                'readmore' => $request->readmore,
            ]);

        return redirect('/admin/news')->with('message','編輯成功');
    }

    function delete($id)
    {
        $request = News::get()->find($id);

        File::delete(public_path().$request->photo);

        $request->delete();

        return redirect('/admin/news')->with('message','刪除成功');
    }
}
