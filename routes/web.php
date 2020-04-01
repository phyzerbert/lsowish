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

Route::get('/', 'IndexController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/cart', 'IndexController@cart')->name('cart');
Route::post('/add_to_cart', 'IndexController@add_to_cart')->name('add_to_cart');

Route::get('/get_cart', 'IndexController@get_cart')->name('get_cart');
Route::post('/save_cart', 'IndexController@save_cart')->name('save_cart');


Route::get('/input_customer', 'IndexController@input_customer')->name('input_customer');
Route::post('/save_customer', 'IndexController@save_customer')->name('save_customer');

Route::get('/checkout', 'IndexController@checkout')->name('checkout');

Route::post('/place_order', 'IndexController@place_order')->name('place_order');
