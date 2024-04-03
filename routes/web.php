<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;

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
    Route::get('api/google', function () {
        return Socialite::driver('google')->redirect();
    });

    Route::get('api/google/callback', function () {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->first();

            if ($finduser) {
                Auth::login($finduser);
                $token = $finduser->createToken('access_token')->plainTextToken;
                session(['access_token' => $token]);
                session(['user' => $finduser]);
                
                return redirect('/landingPage');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => Hash::make('password')
                ]);

                $newUser->google_id = $user->id;
                $newUser->save();

                $token = $newUser->createToken('access_token')->plainTextToken;
                session(['access_token' => $token]);
                session(['user' => $newUser]);

                Auth::login($newUser);
                return redirect('/landingPage');
            }
        } catch (\Throwable $th) {
            dd($th);
        }
    })->name('googleCallback');

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
Route::get('/kitab', function () {
    return view('kitab');
});
Route::get('/scripture', function () {
    return view('scripture');
});
Route::get('/favorite', function () {
    return view('favorite');
});
Route::get('/contact', function () {
    return view('contact');
});