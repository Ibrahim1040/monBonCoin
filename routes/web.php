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

// route Auth
Route::get('/',function() {return view('welcome');})->name('welcome');
Auth::routes();
// route home
Route::get('/home', 'HomeController@index')->name('home');
// route annonce
Route::get('/annonce','AdController@create')->name('ad.create');
Route::get('/annonces','AdController@index')->name('ad.index');
Route::post('/annonce/create','AdController@store')->name('ad.store');
Route::post('/search','AdController@search')->name('ad.search');
// route message
Route::get('/message/{seller_id}/{ad_id}','messageController@create')->name('message.create');
Route::post('/message','MessageController@store')->name('message.store');