<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\SurahController;
use App\Http\Controllers\JumlahUserController;
use App\Http\Controllers\SurahAyatController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin-dashboard', [JumlahUserController::class, 'jumlah'])->middleware(['auth', 'verified','admin'])->name('admin.dashboard');

Route::get('/manager-dashboard', [App\Http\Controllers\ManagerDashboardController::class, 'index'])
    ->middleware(['auth', 'verified', 'manager'])
    ->name('manager.dashboard');

Route::get('/user-dashboard', function () {
    return view('user/dashboard');
})->middleware(['auth', 'verified','user'])->name('user.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/surah', 'App\Http\Controllers\SurahController@index')
    ->middleware(['auth', 'admin'])
    ->name('surah');

Route::get('/surah/ayah',[SurahAyatController::class, 'show'])
    ->middleware('auth', 'admin')
    ->name('ayah');



require __DIR__.'/auth.php';


Route::middleware(['auth', 'admin'])->group(function () {
    //manampilkan akun user
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users');
    //menjadikan user menjadi manager
    Route::post('/admin/users/{id}/promote', [UserController::class, 'promoteToManager'])->name('admin.users.promote');
    //mendelet akun user
    Route::delete('/admin/users/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');
  
    // Menampilkan daftar manager
Route::get('/admin-managers', [ManagerController::class, 'index'])->name('admin.managers');

// Mempromosikan user biasa menjadi manager
Route::post('/admin/managers/promote/{id}', [ManagerController::class, 'promoteToManager'])->name('admin.managers.promote');

// Membatalkan promosi manager menjadi user biasa
Route::post('/admin/managers/cancel/{id}', [ManagerController::class, 'cancelPromotion'])->name('admin.managers.cancel');


// Menghapus akun manager
Route::delete('/admin/managers/{id}', [ManagerController::class, 'destroy'])->name('admin.managers.destroy');





});



