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
    return view('welcome');
});


Route::get('/hello', function () {
    echo "Selamat Datang";
});


Route::get('/about', function () {
    return "<h1> A. Kholifatul Ardli <h1> \n NIM 2041723003";
});

Route::get('/article/{id}', function ($id) {
    echo ("Ini merupakan halaman Id ");
});

