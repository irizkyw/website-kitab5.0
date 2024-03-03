<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/scripture', function () {
    return view('scripture');
});
Route::get('/record', function () {
    return view('record');
});
Route::get('/aboutUs', function () {
    return view('aboutUs');
});
Route::get('/dashboard', function () {
    return view('/dashboard/dashboard');
});
