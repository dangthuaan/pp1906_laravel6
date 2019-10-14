<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/shop', function () {
    return view('shop_home');
});

Route::get('shop/store', 'StoreController@index')->name('products.product_store');

Route::get('shop/store/product/{product}', 'ProductController@show')
    ->name('products.product_details');

Route::get('shop/store/create-product', 'ProductController@create');

Route::post('shop/store/store-product', 'ProductController@store');