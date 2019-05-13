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

Route::get('/', 'UserController@welcome')->name('welcome');

Auth::routes();

Route::get('logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/shirts', 'ShirtController@shirts')->name('shirts');
Route::get('shirt/{id}', 'ShirtController@detail')->name('shirt-detail');

Route::get('/login/{social}', 'Auth\LoginController@socialLogin')->where('social', 'google|facebook');
Route::get('/login/{social}/callback', 'Auth\LoginController@handleProviderCallback')->where('social', 'google|facebook');

Route::get('/login/{social}', 'KaryawanController@socialLogin')->where('social', 'google|facebook');
Route::get('/login/{social}/callback', 'KaryawanController@handleProviderCallback')->where('social', 'google|facebook');

Route::resource('products', 'ProdukController');
Route::resource('karyawan', 'KaryawanController');
Route::resource('pengguna', 'UserController');

Route::resource('cart', 'CartController');