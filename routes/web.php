<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

use App\Http\Middleware\GoogleRecaptcha;
use App\Http\Middleware\EnsureTokenlsValid;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
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

Route::get('/', [IndexController::class, 'index'])->name('home');

// Вывод статей из DB на странице
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');


Route::middleware("auth:web")->group(function(){
    
    // Вывод logout на странице
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    
});

Route::middleware("guest:web")->group(function(){
    
    // Вывод login на странице
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    
    Route::post('/login_process', [AuthController::class, 'login'])->name('login_process');
    
    // Вывод registerForm на странице
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    
    // Вывод Post meth на странице
    Route::post('/register_process', [AuthController::class, 'register'])->name('register_process');
});