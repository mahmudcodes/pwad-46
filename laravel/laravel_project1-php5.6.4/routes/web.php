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

Route::get('/test', function(){
	return view('layouts.master');
});
Route::get('/', 'homeController@home');
Route::get('/about', 'aboutController@about');
Route::get('/contact', 'homeController@contact');
Route::get('/service', 'homeController@service');
Route::get('/create', 'StudentsController@create');
Route::post('/create/store', 'StudentsController@store');
Route::get('/students', 'StudentsController@index');
Route::get('/students/edit/{id}', 'StudentsController@edit');
Route::post('/students/update/{id}', 'StudentsController@update');
Route::get('/students/delete/{id}', 'StudentsController@destroy');

Route::resource('/products', 'ProductsController');
