<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\RadiograferController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

// Halaman utama (tanpa login)
Route::get('/', function () {
    return view('welcome');
});

// Semua route di bawah ini butuh login
Route::middleware(['auth'])->group(function () {

    /** DASHBOARD UTAMA (semua user) */
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    /** 🔹 USER MANAGEMENT (Hanya superadmin dan adminstaff) */
    Route::middleware(['role:superadmin,adminstaff'])->group(function () {
        Route::get('/users', [UserController::class, 'index'])->name('users.index');
        Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/users', [UserController::class, 'store'])->name('users.store');
        Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
        Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    });

    /** 🔹 ADMIN & SUPERADMIN DASHBOARD */
    Route::middleware(['role:adminstaff,superadmin'])->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    });

    /** 🔹 DOCTOR DASHBOARD */
    Route::middleware(['role:doctor,superadmin'])->group(function () {
        Route::get('/doctor', [DoctorController::class, 'index'])->name('doctor.dashboard');
    });

    /** 🔹 RADIOGRAFER DASHBOARD */
    Route::middleware(['role:radiografer,superadmin'])->group(function () {
        Route::get('/radiografer', [RadiograferController::class, 'index'])->name('radiografer.dashboard');
    });

    /** 🔹 PROFIL USER (Semua user login bisa akses) */
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::post('/profile/update-password', [UserController::class, 'updatePassword'])->name('profile.updatePassword');
});

require __DIR__ . '/auth.php';
