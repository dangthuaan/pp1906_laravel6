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

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

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

Route::get('shop/products/{product}/edit', 'ProductsController@edit')->name('products.edit');

Route::put('shop/products/{product}', 'ProductsController@update')->name('products.update');

Route::delete('shop/products/{product}', 'ProductsController@destroy')->name('products.destroy');

