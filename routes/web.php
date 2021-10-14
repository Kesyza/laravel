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

Route::get('/about', function () {
    return '<h1>Halo</h1>' 
    .'Selamat datang di web saya<br>'
    .'Laravel, emang keren.';
});

Route::get('/pembuka', function () {
    return view('/key/pembuka');
});

Route::get('/perkenalan', function () {
    return view('/key/perkenalan');
});

Route::get('/riwayat', function () {
    return view('/key/riwayat');
});

Route::get('/prestasi', function () {
    return view('/key/prestasi');
});

Route::get('/penutup', function () {
    return view('/key/penutup');
});