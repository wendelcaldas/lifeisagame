<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FinancasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('financas.index');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/financas', [FinancasController::class, 'index'])->name('financeiro.home');

require __DIR__.'/auth.php';
