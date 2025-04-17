<?php

use App\Http\Controllers\GeneratorController;
use App\Http\Controllers\PasswordsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('passwords', PasswordsController::class);

Route::get('/generate', [GeneratorController::class, 'index'])->middleware(['auth', 'verified'])->name('generate');
Route::post('/generate', [GeneratorController::class, 'create'])->middleware(['auth', 'verified'])->name('createnew');
Route::get('/edit/{id}', [GeneratorController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit');
Route::put('/edit/{id}', [GeneratorController::class, 'update'])->middleware(['auth', 'verified'])->name('update');
Route::delete('/{id}', [PasswordsController::class, 'destroy'])->middleware(['auth', 'verified'])->name('delete');
Route::get('/', [PasswordsController::class, 'index'])->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
