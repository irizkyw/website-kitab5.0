<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::group(['middleware' => 'guest'], function () {
    Route::post('/authentication', function (Request $request) {
        $authController = new AuthController();
        $response = $authController->login($request);
        $responseData = json_decode($response->getContent(), true);
        $accessToken = $responseData['access_token'];
        if ($accessToken) {
            session(['access_token' => $accessToken]);
            return redirect()->url('/landingPage')->with('success', 'Login berhasil!');
        } else {
            return $response;
        }
    })->name('authentication');

    Route::post('/register', function (Request $request) {
        $authController = new AuthController();
        $response = $authController->register($request);
        $responseData = json_decode($response->getContent(), true);
        if ($responseData['message'] === 'Pendaftaran berhasil') {
            return redirect('/loginPage')->with('success', 'Registrasi berhasil!');
        } else {
            return $response;
        }
    })->name('register');

    Route::get('/landingPage', function () {
        return view('landingPage');
    })->name('landingPage');
    
    Route::get('/loginPage', function () {
        if (session()->has('access_token')) {
            return redirect('/landingPage')->with('success', 'Anda sudah login!'); // 'You are already logged in!
        }
        return view('loginPage');
    })->name('login');
    
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', function () {
        session()->forget('access_token');
        return redirect()->url('/landingPage')->with('success', 'Logout berhasil!');
    })->name('logout');
});
