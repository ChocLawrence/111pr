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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('', 'HomeController@index')->name('home');
Route::get('about', 'AboutController@index')->name('about');
Route::get('about', 'AboutController@index')->name('about');
Route::get('services', 'ServicesController@index')->name('services');
Route::get('brands', 'BrandsController@index')->name('brands');
Route::get('press', 'PressController@index')->name('press');
Route::get('bookings','BookingsController@index')->name('bookings');