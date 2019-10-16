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

Route::get('shop/products', 'ProductsController@index')->name('products.index');

Route::get('shop/products/create', 'ProductsController@create')->name('products.create');

Route::post('shop/products', 'ProductsController@store')->name('products.store');

Route::get('shop/products/{product}', 'ProductsController@show')->name('products.show');
