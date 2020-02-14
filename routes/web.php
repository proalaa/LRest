<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web Routes for your application. These
| Routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use \Illuminate\Support\Facades\Route;

Route::get('/main' , 'TemplateController@index');
Route::get('menu' , 'TemplateController@menu')->name('menu');
Route::get('about' , 'TemplateController@about');
Route::get('specialties' , 'TemplateController@specialties');
Route::get('services' , 'TemplateController@services');
Route::get('blog' , 'TemplateController@blog');
Route::get('contact' , 'TemplateController@contact');
Route::get('reservation' , 'TemplateController@reservation')->name('reserve');
Route::redirect('/' , '/main');
Route::get('admin' , 'AdminController@index')->name('dashboard');
Route::get('admin/tables' , 'AdminController@tables');
Route::get('admin/create' , 'AdminController@create');
Route::post('admin/store-dish' , 'AdminController@storeDish');
Route::get('dish/{dish}/edit' , 'AdminController@editDish');
Route::patch('dish/{dish}','AdminController@updateDish');
Route::delete('dish/{dish}' , 'AdminController@destroyDish');
Route::post('reservation' , 'ReservationController@store');
Route::get('gg' , 'DishController@index');
Route::view('test' , 'welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
