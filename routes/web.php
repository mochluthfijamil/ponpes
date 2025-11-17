<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\{
    HomeController,
    ProfilController,
    BeritaController,
    PengumumanController,
    ProgramController,
    GaleriController,
    KontakController,
    BrosurController
};

// Frontend
Route::get('/', [HomeController::class, 'index']);
Route::get('/profil', [ProfilController::class, 'index']);
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{slug}', [BeritaController::class, 'detail']);
Route::get('/pengumuman', [PengumumanController::class, 'index']);
Route::get('/program', [ProgramController::class, 'index']);
Route::get('/galeri', [GaleriController::class, 'index']);
Route::get('/kontak', [KontakController::class, 'index']);
Route::get('/brosur', [BrosurController::class, 'index']); // frontend brosur

// Admin (prefix 'admin', group routes)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/brosur', [BrosurController::class, 'adminIndex'])->name('brosur.index');
    Route::get('/brosur/create', [BrosurController::class, 'create'])->name('brosur.create');
    Route::post('/brosur', [BrosurController::class, 'store'])->name('brosur.store');
    Route::delete('/brosur/{id}', [BrosurController::class, 'destroy'])->name('brosur.destroy');
});
