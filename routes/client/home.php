<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\WellcomeController;

Route::prefix('/')->group(function () {
    Route::get('/', [WellcomeController::class, 'index'])->name('home');
    Route::get('/lobby', [WellcomeController::class, 'home'])->name('home-lobby');
    Route::get('/list-game/{id}', [WellcomeController::class, 'details'])->name('list-game');
    Route::get('get-score/{id}', [WellcomeController::class, 'getScore']);
});
