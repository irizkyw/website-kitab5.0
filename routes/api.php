<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\FavoriteController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('/login', [AuthController::class , 'login'])->name('login');
    Route::post('/register', [AuthController::class , 'register']);
    Route::get('/logout', [AuthController::class , 'logout']);
    Route::get('/refresh', [AuthController::class , 'refresh']);
    Route::get('/me', [AuthController::class , 'me']);


    
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'v1'

], function ($router) {
    Route::get('/scripture', [BooksController::class, 'index']);
    Route::get('/scripture/{kitab}', [BooksController::class, 'detail_scripture'])->name('scripture.detail');

    #route for favorite
    Route::get('/favorite/create', FavoriteController::class.'@create')-> name('favorite.create');
    Route::post('/favorite/post', FavoriteController::class.'@store')-> name('favorite.store');
    Route::get('/favorite/show/{user_id}', FavoriteController::class.'@showByUser')-> name('favorite.showByUser');
    Route::get('/favorite/{favorite_id}/details', FavoriteController::class.'@show')->name('favorite.show');
    Route::delete('/favorite/delete/{id}', FavoriteController::class.'@destroy')-> name('favorite.destroy');
});

