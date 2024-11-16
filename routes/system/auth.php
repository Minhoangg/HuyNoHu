<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\system\authController;

Route::get('/login', [authController::class, 'login'])->name('login');
