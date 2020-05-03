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
Route::get('/','ProductController@index');
Route::get('/shop/{product}','UserController@show');
Route::get('/admin/product/addproduct','ProductController@addproductpage');
Route::post('/admin/product','ProductController@addproduct');
Route::get('/admin/','ProductController@index');
Route::get('/admin/product/{product}/updateproduct','ProductController@edit');
Route::patch('/admin/product/{product}','ProductController@updateproduct');
Route::get('/admin/product/{product}','ProductController@show');

Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');
Route::get('/login','SessionController@create');
Route::post('/login','SessionController@store');
Route::get('/logout','SessionController@destroy');








