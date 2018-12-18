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

// main page
Route::get('/', 'FormController@index');

// form validation and store in database
Route::get('form', 'FormController@searchProcess');

// order page
Route::get('order', 'OrderController@index');

// order validation and store in database
Route::get('store', 'OrderController@store');


