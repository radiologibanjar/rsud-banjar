<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\RadiograferController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');

    // Hanya admin dan superadmin
    Route::middleware('role:admin,superadmin')->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    });

    // Hanya staff dan superadmin
    Route::middleware('role:staff,superadmin')->group(function () {
        Route::get('/staff', [StaffController::class, 'index'])->name('staff.dashboard');
    });

    // Hanya dokter dan superadmin
    Route::middleware('role:dokter,superadmin')->group(function () {
        Route::get('/dokter', [DokterController::class, 'index'])->name('dokter.dashboard');
    });

    // Hanya radiografer dan superadmin
    Route::middleware('role:radiografer,superadmin')->group(function () {
        Route::get('/radiografer', [RadiograferController::class, 'index'])->name('radiografer.dashboard');
    });

    // Hanya user biasa
    Route::middleware('role:user')->group(function () {
        Route::get('/user', [UserController::class, 'index'])->name('user.dashboard');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

require __DIR__.'/auth.php';
