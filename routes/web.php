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
use \Illuminate\Support\Facades\Route;

Route::get('/home' , 'TemplateController@index');
Route::get('menu' , 'TemplateController@menu');
Route::get('about' , 'TemplateController@about');
Route::get('specialties' , 'TemplateController@specialties');
Route::get('services' , 'TemplateController@services');
Route::get('blog' , 'TemplateController@blog');
Route::get('contact' , 'TemplateController@contact');
Route::get('reservation' , 'TemplateController@reservation')->name('reserve');
Route::resource('/reservation' , 'ReservationController');
Route::redirect('/' , '/home');

