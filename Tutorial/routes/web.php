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



/* First is name, second is view */
Route::view('/','home');
Route::view('contact','contact');
Route::view('about','about')->middleware('test');

Route::get('customers', 'CustomersController@list')->middleware('auth');
Route::post('customers', 'CustomersController@store')->middleware('auth');

Route::get('contact', 'ContactFormController@create');
Route::post('contact', 'ContactFormController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
