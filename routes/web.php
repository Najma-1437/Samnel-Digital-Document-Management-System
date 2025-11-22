<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Dashboard (protected)
Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Authenticated user routes
Route::middleware(['auth'])->group(function () {
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // 🔥 Documents — MUST be here
    Route::resource('documents', DocumentController::class);

    // Logout (Breeze handles this, but you can keep or remove)
    // Route::post('/logout', ...); ← Breeze already defines this
});

// Public document actions (if needed)
Route::get('documents/{document}/download', [DocumentController::class, 'download'])->name('documents.download');
Route::get('documents/{document}/view', [DocumentController::class, 'view'])->name('documents.view');

// Load Breeze auth routes
require __DIR__.'/auth.php';