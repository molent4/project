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

Route::get('/', 'ProjectController@index');
Route::get('/contact-us', 'ContactUsController@index');
Route::post('/contact-us/sendmessage', 'ContactUsController@sendMessage');

Route::get('/page/{id}', 'ProjectController@page');
