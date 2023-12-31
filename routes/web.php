<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\HomeController;

Route::post('/login', [ UsersController::class, 'login'])->name('auth.login');
Route::get('/logout', [UsersController::class, 'logout'])->name('auth.logout');
Route::post('/register', [ UsersController::class, 'register'])->name('auth.register');
Route::get('/products', [ ProductsController::class,'index']);
Route::get('/posts', [ PostsController::class,'index']);
Route::get('/home', [ HomeController::class,'index']);




Route::get('/admin', function () {
    return  view('backend/admin');
});

Route::get('/', function () {
    return  view('frontend/home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
