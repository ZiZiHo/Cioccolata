<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    function index()
    {
        $test = ContactUs::get()->find('1');

        return view('admin.contactUs.index');
    }
}
