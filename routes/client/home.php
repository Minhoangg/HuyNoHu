<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\WellcomeController;

Route::get('/', [WellcomeController::class, 'index']);
Route::get('/home', [WellcomeController::class, 'home']);
Route::get('/list-game/{id}', [WellcomeController::class, 'details']);
Route::get('get-score/{id}', [WellcomeController::class, 'getScore']);
