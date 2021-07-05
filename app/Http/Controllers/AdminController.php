<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {
        // $test = ContactUs::get()->find('1');

        return view('admin.index');
    }
}
