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
Route::get('/landingPage', function () {
    return view('landingPage');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/signUp', function () {
    return view('signUp');
});
Route::get('/changePass', function () {
    return view('changePass');
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
// Route::get('/dashboard', function () {
//     return view('/dashboard/dashboard');
// });
