<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    //
    function index()
    {
        $record = ContactUs::get();
        // dd(123);
        return view('admin.contactUs.index' , compact('record'));
    }

    function create()
    {
        // dd(123);
        return view('admin.contactUs.create');
    }

    function store(Request $request)
    {
        ContactUs::create($request->all());

        return redirect('/admin/contactus')->with('message','新增成功');
    }

    function edit($id)
    {
        $record = ContactUs::get()->find($id);
        // dd($record->all());
        return view('admin.contactUs.edit', compact('record'));

    }
    function update($id)
    {
        return redirect('/admin/contactus');
    }
    function delete($id)
    {
        ContactUs::get()->find($id)->delete();
        return redirect('/admin/contactus')->with('message','刪除成功');
    }
}
