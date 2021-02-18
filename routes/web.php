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

//--praktikum 3--\\
use App\Http\Controllers\BlogController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/blog', function () {
    return view('home');
});
Route::get('/blog/tentang', function () {
    return view('tentang');
});
Route::get('/blog/kontak', function () {
    return view('kontak');
});
//Route::get('/blog', 'BlogController@home');
//Route::get('/blog/tentang', 'BlogController@tentang');
//Route::get('/blog/kontak', 'BlogController@kontak');

//Route::get('/hello', function () {
    echo "Selamat Datang";
//});

//Route::get('/about', function () {
    return "<h1> A. Kholifatul Ardli <h1> \n NIM 2041723003 <h1> \n Kelas TI2A";
//});

//Route::get('/article/{id}', function ($id) {
    echo ("Ini merupakan halaman Id ");
//});

//--Praktikum2--\\
//use App\Http\Controllers\halamanutamaController;
//Route::get('/',[halamanutamaController::class, 'index']);
//Route::get('/about',[halamanutamaController::class, 'about']);
//Route::get('/article',[halamanutamaController::class, 'article']);