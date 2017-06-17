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

Route::resource('products', 'ProductController');
Route::name('products.per_page')->post('products', 'ProductController@index');
Route::name('products.rating')->post('products/{product}', 'ProductController@show');

Route::as('carts.')->prefix('cart')->group(function()
{
    Route::name('index')->get('/', 'CartController@index');
    Route::name('store')->post('/{product}', 'CartController@store');
    Route::name('destroy')->delete('/', 'CartController@destroy');
    Route::name('delete')->delete('/{rowId}', 'CartController@removeProduct');
});
