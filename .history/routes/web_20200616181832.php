<?php

use Illuminate\Support\Facades\Route;

use Spatie\Honeypot\ProtectAgainstSpam;

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

Route::get('', 'HomeController@index')->name('home')->middleware(ProtectAgainstSpam::class);
Route::get('about', 'AboutController@index')->name('about');
Route::get('about', 'AboutController@index')->name('about');
Route::get('services', 'ServicesController@index')->name('services');
Route::get('brands', 'BrandsController@index')->name('brands');
Route::get('press', 'PressController@index')->name('press');
Route::get('bookings','BookingsController@index')->name('bookings');
Route::get('contact','ContactController@index')->name('contact');
Route::post('contact','ContactController@store')->name('contactus')->middleware(ProtectAgainstSpam::class);
