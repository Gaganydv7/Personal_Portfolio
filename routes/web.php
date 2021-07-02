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

use App\Http\Controllers\Controller;



Route::get('/','ContactController@index')->name('gagan');
Route::post('/','ContactController@store')->name('contact');

// Route::get('/pd','imageController@index')->name('pd');
Route::get('/pd/{pd_id}','imageController@show');

// Route::post('/message','ContactController@store');
// Route::get('/pd', function () {
//     return view('pd');
// });