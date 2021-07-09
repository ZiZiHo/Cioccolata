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
}
