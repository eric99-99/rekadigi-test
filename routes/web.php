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

Route::get('/', function () {
    return view('mainpage');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/feature', function () {
    return view('feature');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/carrier', function () {
    return view('carrier');
});
