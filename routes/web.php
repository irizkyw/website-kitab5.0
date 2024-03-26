<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\AyatController;

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
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('token-name')->plainTextToken;
            session(['access_token' => $token]);
            session(['user' => $user]);
            return redirect()->route('landingPage');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid email or password.']);
    })->name('authentication');

    Route::post('/register', function (Request $request) {
        if (session()->has('access_token')) {
            return redirect('/landingPage')->with('success', 'Anda sudah login!');
        }
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
        $token = session('access_token');
        return view('landingPage');
    })->name('landingPage');
    
    Route::get('/loginPage', function () {
        if (session()->has('access_token')) {
            return redirect('/landingPage')->with('success', 'Anda sudah login!');
        }
        return view('loginPage');
    })->name('login');
    
});

Route::get('/logout', function (Request $request) {
    session()->forget('access_token');
    session()->forget('user');

    return redirect()->route('login')->with('success', 'Logout berhasil!');
})->name('logout');

Route::get('/ayats',AyatController::class .'@index')->name('Ayats/ayats');
Route::post('/ayats/posts', AyatController::class .'@store')->name('ayats.store');
Route::get('/ayats/posts/create', AyatController::class .'@create')->name('ayats.create');
Route::get('/ayats/posts/{post}', AyatController::class .'@show')->name('ayats.show');
Route::get('/ayats/posts/{post}/edit', AyatController::class .'@edit')->name('ayats.edit');
Route::put('/ayats/posts/{post}', AyatController::class .'@update')->name('ayats.update');
Route::delete('/ayats/posts/{post}', AyatController::class .'@destroy')->name('ayats.destroy');
