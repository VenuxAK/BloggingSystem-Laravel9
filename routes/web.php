<?php

use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


Route::get('/', [BlogController::class, "index"]);
Route::get('/blogs', function () {
    return view('blogs');
});
Route::get('/blogs/{blog:slug}', [BlogController::class, "show"]);
Route::post('/blogs/{blog:slug}/comment', [BlogController::class, "storeComment"])->middleware('auth');

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', "login")->middleware('guest')->name('login');
    Route::post('/login', "postLogin")->middleware('guest');
    Route::get('/register', "register")->middleware('guest')->name('register');
    Route::post('/register', "store")->middleware('guest');
    Route::post('/logout', "logout")->middleware('auth');
});

Route::get('/admin', function () {
    return redirect('/admin/dashboard');
});
Route::middleware('can:admin')->prefix('admin')->group(function () {
    Route::get('dashboard', [AdminBlogController::class, "dashboard"]);

    Route::get('blogs', [AdminBlogController::class, "blogs"]);
    Route::get('blogs/create', [AdminBlogController::class, "createBlog"]);
    Route::post('blogs/store', [AdminBlogController::class, "storeBlog"]);
    Route::get('blogs/{blog:slug}', [AdminBlogController::class, "showBlog"]);
    Route::get('blogs/{blog:slug}/edit', [AdminBlogController::class, "editBlog"]);
    Route::put('blogs/{blog:slug}/update', [AdminBlogController::class, "updateBlog"]);
    Route::delete('blogs/{blog:slug}/delete', [AdminBlogController::class, "deleteBlog"]);

    Route::get('users', [AdminUserController::class, "users"]);
    Route::middleware('can:superAdmin')->group(function () {
        Route::get('users/create', [AdminUserController::class, "create"]);
        Route::post('users/store', [AdminUserController::class, "store"]);
        Route::get('users/{user:username}/edit', [AdminUserController::class, "edit"]);
        Route::patch('users/{user:username}/update', [AdminUserController::class, "update"]);
        Route::delete('users/{user:username}/delete', [AdminUserController::class, "destroy"]);
    });
});
