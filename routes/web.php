<?php

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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/create-store', function () {
    return view('create-store');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/product-details', function () {
    return view('product-details');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/user-profile', function () {
    return view('user-profile');
});
