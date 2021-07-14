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

Route::get('/testindex', function () {
    return view('welcome');
});

Route::get('/', 'FrontController@index');
Route::get('/about', 'FrontController@about');
Route::get('/knowledge', 'FrontController@knowledge');
Route::get('/diy', 'FrontController@diy');
Route::get('/news', 'FrontController@news');
Route::post('/contactus/store', 'FrontController@storeContactUs');

Route::get('/member', 'FrontController@member');
Route::get('/member/order', 'FrontController@memberOrder');
Route::post('/member/editData', 'FrontController@memberEdit');

Route::get('/product', 'FrontController@product');
Route::post('/product/add', 'FrontController@add');

Route::prefix('/shopping-car')->group(function () {
    Route::get('/1', 'FrontController@shoppingCarFirst');

    Route::middleware(['shopping'])->group(function () {
        Route::get('/2', 'FrontController@shoppingCarSecond');
        Route::post('/2/check', 'FrontController@orderCheck');
        Route::get('/3', 'FrontController@shoppingCarThird');
        Route::get('/3/check', 'FrontController@createOrder');
        Route::get('/4', 'FrontController@shoppingCarFourth');

        Route::post('/add', 'FrontController@add');
        Route::get('/content', 'FrontController@content');
        Route::get('/clear', 'FrontController@clear');
        Route::post('/update', 'FrontController@update');
        Route::get('/finish', 'FrontController@finish');
        Route::post('/delete', 'FrontController@delete');
    });
});


Route::prefix('/admin')->group(function () {
    Route::get('/', 'AdminController@index');

    Route::prefix('/contactus')->group(function () {
        Route::get('/', 'ContactUsController@index');
        Route::get('/create', 'ContactUsController@create');
        Route::post('/store', 'ContactUsController@store');
        Route::get('/edit/{id}', 'ContactUsController@edit');
        Route::post('/update/{id}', 'ContactUsController@update');
        Route::delete('/delete/{id}', 'ContactUsController@delete');
    });

    Route::prefix('/news')->group(function () {
        Route::get('/', 'NewsController@index');
        Route::get('/create', 'NewsController@create');
        Route::post('/store', 'NewsController@store');
        Route::get('/edit/{id}', 'NewsController@edit');
        Route::post('/update/{id}', 'NewsController@update');
        Route::delete('/delete/{id}', 'NewsController@delete');
    });

    Route::prefix('/product')->group(function () {
        Route::get('/', 'ProductController@index');
        Route::get('/create', 'ProductController@create');
        Route::post('/store', 'ProductController@store');
        Route::get('/edit/{id}', 'ProductController@edit');
        Route::post('/update/{id}', 'ProductController@update');
        Route::delete('/delete/{id}', 'ProductController@delete');
    });

    Route::prefix('/user')->group(function () {
        Route::get('/', 'UserController@index');
        Route::get('/create', 'UserController@create');
        Route::post('/store', 'UserController@store');
        Route::get('/edit/{id}', 'UserController@edit');
        Route::post('/update/{id}', 'UserController@update');
        Route::delete('/delete/{id}', 'UserController@delete');
    });

    Route::prefix('/order')->group(function () {
        Route::get('/', 'OrderController@index');
        Route::get('/create', 'OrderController@create');
        Route::post('/store', 'OrderController@store');
        Route::get('/edit/{id}', 'OrderController@edit');
        Route::post('/update/{id}', 'OrderController@update');
        Route::delete('/delete/{id}', 'OrderController@delete');
    });
});
Route::get('/index', 'FrontController@index');

Auth::routes();


// // Authentication Routes...
// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('login', 'Auth\LoginController@login');
// Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// // Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// // Password Reset Routes...
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset');



Route::get('/home', 'HomeController@index')->name('home');
