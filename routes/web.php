<?php

use App\Http\Controllers\DashboardAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;



Route::get('/', [MainController::class, 'index'])->name('main.index');
Route::get('/struktur', [MainController::class, 'struktur'])->name('main.struktur');
Route::get('/pengumuman', [MainController::class, 'pengumuman'])->name('main.pengumuman');
Route::get('/registration', [MainController::class, 'registration'])->name('main.registration');
Route::post('/registration/store', [MainController::class, 'registration_store'])->name('main.registration_store');
Route::get('/login', [MainController::class, 'login'])->name('main.login');

Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('dashboard.dashboard');
Route::get('/icons', [DashboardAdminController::class, 'icons'])->name('dashboard.icons');
Route::get('/map', [DashboardAdminController::class, 'map'])->name('dashboard.map');
Route::get('/notifications', [DashboardAdminController::class, 'notifications'])->name('dashboard.notifications');
Route::get('/tables', [DashboardAdminController::class, 'tables'])->name('dashboard.tables');
Route::get('/typography', [DashboardAdminController::class, 'typography'])->name('dashboard.typography');
Route::get('/upgrade', [DashboardAdminController::class, 'upgrade'])->name('dashboard.upgrade');
Route::get('/user', [DashboardAdminController::class, 'user'])->name('dashboard.user');

Route::get('/dashboard/pengumuman', [DashboardAdminController::class, 'pengumuman'])->name('pengumuman.index');
Route::get('/dashboard/createpengumuman', [DashboardAdminController::class, 'createPengumuman'])->name('pengumuman.create');
Route::post('/dashboard/storepengumuman', [DashboardAdminController::class, 'storePengumuman'])->name('pengumuman.store');
Route::get('/dashboard/pengumuman/{id}/edit', [DashboardAdminController::class, 'editPengumuman'])->name('pengumuman.edit');




Route::get('/dashboard/pengumuman/{id}', [DashboardAdminController::class, 'showPengumuman'])->name('pengumuman.show');
Route::put('/dashboard/pengumuman/{id}', [DashboardAdminController::class, 'updatePengumuman'])->name('pengumuman.update');
Route::delete('/dashboard/pengumuman/{id}', [DashboardAdminController::class, 'deletePengumuman'])->name('pengumuman.delete');
