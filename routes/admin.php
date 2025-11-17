<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    DashboardController,
    BeritaAdminController,
    PengumumanAdminController,
    ProgramAdminController,
    GaleriAdminController,
    ProfilAdminController,
    AuthController
};

Route::get('/login', [AuthController::class, 'login'])->name('admin.login');
Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::prefix('berita')->group(function () {
    Route::get('/', [BeritaAdminController::class, 'index']);
    Route::get('/create', [BeritaAdminController::class, 'create']);
    Route::get('/edit/{id}', [BeritaAdminController::class, 'edit']);
});
