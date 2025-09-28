<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    // CRUD MAHASISWA
    Route::get('/mahasiswa', [MahasiswaController::class, 'index']); // Menampilkan view
    Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']); // Menampilkan view create
    Route::post('/mahasiswa/store', [MahasiswaController::class, 'store']); // Proses tambah data mahasiswa
    Route::get('/mahasiswa/{mahasiswa}/edit', [MahasiswaController::class, 'edit']); // menampilkan view edit
    Route::put('/mahasiswa/{mahasiswa}/update', [MahasiswaController::class, 'update']); // proses update data mahasiswa
    Route::delete('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'destroy']); //proses hapus data mahasiswa

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
