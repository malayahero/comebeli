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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/shop/{product}','UserController@show');
Route::prefix('admin')->group(function (){
	Route::get('product/addproduct','ProductController@addproductpage');
	Route::post('product','ProductController@addproduct')->name('addproductPage');
	Route::get('admin','ProductController@index')->name('');
	Route::get('product/{product}/updateproduct','ProductController@edit')->name('');
	Route::patch('product/{product}','ProductController@updateproduct')->name('');
	Route::get('product/{product}','ProductController@show')->name('');
});

Route::prefix('/')->group(function(){
	Route::get('/','ProductController@product')->name('');
	Route::get('/register','RegistrationController@create')->name('');
	Route::post('/register','RegistrationController@store')->name('');
	Route::get('/login','SessionController@create')->name('');
	Route::post('/login','SessionController@store')->name('');
	Route::get('/logout','SessionController@destroy')->name('');
});









