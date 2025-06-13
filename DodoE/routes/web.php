<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/logout', [LogoutController::class, 'destroy'])->middleware('auth')->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/ver', function () {
        return view('ver');
    })->name('ver');
    Route::get('/eventos', [EventosController::class, 'indexEventos'])->name('indexEventos');
    Route::get('/crear', [EventosController::class, 'crear'])->name('crear');
    Route::post('/crear', [EventosController::class, 'guardar'])->name('guardar');
    Route::get('/editar/{id}', [EventosController::class, 'editar'])->name('editar');
    Route::put('/editar/{id}', [EventosController::class, 'actualizar'])->name('actualizar');
    Route::delete('/borrar/{id}', [EventosController::class, 'borrar'])->name('borrar');
    Route::get('/index', [EventosController::class, 'index'])->name('index');
});

