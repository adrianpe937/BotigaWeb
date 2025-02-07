<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\AuthController;





Route::get('/', [AuthController::class, 'showLoginForm']);
// Ruta para procesar el inicio de sesión
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Ruta para cerrar sesión
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Ruta para procesar el registro
Route::post('/register', [AuthController::class, 'register'])->name('register');

/*
Route::resource('categoria', CategoriaController::class);
*/
