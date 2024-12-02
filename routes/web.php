<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CountryController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Landing/Home', [

    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    // Resource creates routes for standard CRUD operations
    Route::resource('tasks', TaskController::class);
});

Route::middleware('auth')->group(function () {
    // Route to view all countries (e.g., for a dropdown)
    Route::get('/countries', [CountryController::class, 'index'])->name('countries.index');

    // Route to view a single country (e.g., for statistics or details)
    Route::get('/countries/{country}', [CountryController::class, 'show'])->name('countries.show');
});

require __DIR__.'/auth.php';
