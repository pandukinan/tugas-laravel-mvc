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

// Route::get('/home', function () {
//     return view('welcome');
// });
//
// Route::get('/test/{tambahan}', function ($tambahan) {
//     return view('test',["tambahan"=> $tambahan]);
// });
//
// Route::get('/test/{nama}', function ($nama) {
//     return "Yuk Belajar Laravel Bersama $nama";
// });
//
// Route::get('/form', 'RegisterController@form');
//
// Route::post('/sapa', 'RegisterController@sapa');

Route::get('/', 'HomeController@home');

Route::get('/register', 'AuthController@register');
Route::post('/welcome', 'AuthController@welcome');
