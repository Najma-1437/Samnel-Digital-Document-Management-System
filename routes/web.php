<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClaimController;
use Illuminate\Support\Facades\Route;

// Landing Page
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Use Laravel's built-in authentication routes
require __DIR__.'/auth.php';

// Authenticated User Dashboard
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    // Claims Management Routes
    Route::resource('claims', ClaimController::class);
    
    // Documents Route
    Route::get('/documents', function () {
        return view('documents.index');
    })->name('documents.index');
    
    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});