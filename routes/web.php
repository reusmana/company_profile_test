<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage'])->name('home');
Route::get('/show/{id}', [PageController::class, 'show'])->name('show');
Route::get('/pages/{id}', [PageController::class, 'pages'])->name('pages');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.home');
    })->name('dashboard');
    Route::get('/add', function () {
        return view('admin.add');
    })->name('add');
    Route::get('/visitor', [PageController::class, 'index'])->name('visitor');
    Route::post('/store', [PageController::class, 'store'])->name('store');
});

Route::get('/about', function () {
    return view('about');
})->name('about');
