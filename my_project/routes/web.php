<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\MapController; // Ensure this is imported

Route::get('/', function () {
    return view('welcome');
});

// Define the map route correctly
Route::get('/map', function () {
    return view('locations.map');
})->name('map');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/organizations', [OrganizationController::class, 'index'])->name('organizations.index');
    Route::get('/organizations/create', [OrganizationController::class, 'create'])->name('organizations.create');
    Route::get('/organizations/{organization}', [OrganizationController::class, 'show'])->name('organizations.show');
    Route::post('/organizations', [OrganizationController::class, 'store'])->name('organizations.store');

    Route::get('/organizations/{organization}/edit', [OrganizationController::class, 'edit'])->name('organizations.edit');
Route::put('/organizations/{organization}', [OrganizationController::class, 'update'])->name('organizations.update');
Route::delete('/organizations/{organization}', [OrganizationController::class, 'destroy'])->name('organizations.destroy');


    // Fix: Ensure location routes are defined properly
    Route::get('/locations', [LocationController::class, 'index'])->name('locations.index');
    Route::get('/locations/{location}', [LocationController::class, 'show'])->name('locations.show');
});

require __DIR__.'/auth.php';
