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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('custom/home');
});

Route::get('custom/login', function () {
    return view('custom/login');
});

Route::get('custom/register', 'CustomAuthController@showRegisterForm')->name('custom.register');
Route::post('custom/register', 'CustomAuthController@register');

Route::get('custom/login', 'CustomAuthController@showLoginForm')->name('custom.login');
Route::post('custom/login', 'CustomAuthController@login');

Route::get('logout', 'CustomAuthController@destroy');
