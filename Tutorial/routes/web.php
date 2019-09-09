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
Route::view('/','welcome');
Route::view('contact','contact');
Route::view('about','about');

Route::get('customers', function(){

    $customers = [
        'Harry Potter',
        'Ron Weasley',
        'Hermoine Granger'
    ];

    return view('Internal.customers',['customers' => $customers]);
});