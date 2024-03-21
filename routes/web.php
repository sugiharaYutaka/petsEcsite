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

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/shop','App\Http\Controllers\ShopController@showShop')->name('shop');
Route::get('/shop/product','App\Http\Controllers\ShopController@showProduct')->name('product');
Route::get('/shop/cart','App\Http\Controllers\ShopController@showCart')->name('cart');


Route::get('/intro', function () {
    return 'stab';
})->name('intro');

Route::get('/kodawari', function () {
    return 'stab';
})->name('kodawari');

Route::get('/service', function () {
    return 'stab';
})->name('service');

Route::get('/contact', function () {
    return 'stab';
})->name('contact');
