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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/my-account', function () {
    return view('my-account');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/shop-detail', function () {
    return view('shop-detail');
});
Route::get('/wishlist', function () {
    return view('wishlist');    
});
Route::get('/location', function () {
    return view('location');    
});