<?php

use App\Http\Controllers\IndividualController;
use App\Http\Controllers\ModellingController;
use App\Http\Controllers\PartnerController;
use Illuminate\Support\Facades\Route;

// Main dashboard
Route::get('/', function () {
    return view('dashboard');
});

// Individual
Route::get('/individuals/create', [IndividualController::class, 'create'])->name('individuals.create');
Route::post('/individuals', [IndividualController::class, 'store'])->name('individuals.store');

// Partner
Route::get('/partners/create/{individual}', [PartnerController::class, 'create'])->name('partners.create');
Route::post('/partners/{individual}', [PartnerController::class, 'store'])->name('partners.store');

// Test get both data
Route::get('/testquery', [ModellingController::class, 'index']);