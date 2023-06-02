<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BlogController;
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

Route::get('/', [BlogController::class, "index"]);
Route::get('/blogs', function () {
    return view('blogs');
});
Route::get('/blogs/{blog:slug}', [BlogController::class, "show"]);

Route::get('/login', [AuthController::class, "login"])->middleware('guest');
Route::post('/login', [AuthController::class, "postLogin"])->middleware('guest');
Route::get('/register', [AuthController::class, "register"])->middleware('guest');
Route::post('/register', [AuthController::class, "store"])->middleware('guest');
Route::post('/logout', [AuthController::class, "logout"])->middleware('auth');
