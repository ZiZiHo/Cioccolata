<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Illuminate\Http\Request;

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

    function product()
    {
        return view('front.product.index');
    }
}
