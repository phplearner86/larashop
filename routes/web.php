<?php


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

Route::resource('orders', 'OrderController');

Route::resource('profiles', 'ProfileController');

