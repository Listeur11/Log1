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

Route::get('/test', function () {
    return view('test.test');
});

Route::get('/indexTest', function () {
    return view('test.index');
});

Route::get('/login', function () {
    return view('login.login');
});
Route::get('/create', function () {
    return view('login.create ');
});
