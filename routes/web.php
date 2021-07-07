<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/admin')->group(function(){
    Route::get('/','AdminController@index');

    Route::prefix('/contactus')->group(function(){
        Route::get('/','ContactUsController@index');
        Route::get('/create','ContactUsController@create');
        Route::post('/store','ContactUsController@store');
        Route::get('/edit/{id}','ContactUsController@edit');
        Route::post('/update/{id}','ContactUsController@update');
        Route::delete('/delete/{id}','ContactUsController@delete');
    });

    Route::prefix('/news')->group(function(){
        Route::get('/','NewsController@index');
        Route::get('/create','NewsController@create');
        Route::post('/store','NewsController@store');
        Route::get('/edit/{id}','NewsController@edit');
        Route::post('/update/{id}','NewsController@update');
        Route::delete('/delete/{id}','NewsController@delete');
    });

    Route::prefix('/product')->group(function(){
        Route::get('/','ProductController@index');
        Route::get('/create','ProductController@create');
        Route::post('/store','ProductController@store');
        Route::get('/edit/{id}','ProductController@edit');
        Route::post('/update/{id}','ProductController@update');
        Route::delete('/delete/{id}','ProductController@delete');
    });
});
Route::get('/index', 'FrontController@index');
