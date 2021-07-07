<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function index()
    {
        $record = User::get();

        // dd($record);
        return view('admin.user.index' , compact('record'));
    }

    function create()
    {

        return view('admin.user.create');
    }

    function store(Request $request)
    {

        $requestData = $request->all();
        unset($requestData['_token']);
        $requestData["address"] = $requestData['county'].$requestData['district'].$requestData['zipcode'].$requestData['zone'];

        unset($requestData['county']);
        unset($requestData['district']);
        unset($requestData['zipcode']);
        unset($requestData['zone']);
        dd($requestData);
    }
}
