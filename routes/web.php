<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index'])->name('main.index');
Route::get('/struktur', [MainController::class, 'struktur'])->name('main.struktur');
Route::get('/registration', [MainController::class, 'registration'])->name('main.registration');
Route::post('/registration/store', [MainController::class, 'registration_store'])->name('main.registration_store');
Route::get('/login', [MainController::class, 'login'])->name('main.login');

