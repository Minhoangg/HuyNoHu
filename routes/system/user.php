<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\system\userController;

Route::prefix('/user')->group(function(){
    Route::get('/', [userController::class, 'getall'])->name('user-getall');
    Route::get('/add', [userController::class, 'create'])->name('user-create');
    Route::post('/add', [userController::class, 'createHandle'])->name('user-add');
});
