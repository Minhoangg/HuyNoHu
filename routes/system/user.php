<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\system\userController;

Route::prefix('/user')->group(function(){
    Route::get('/', [userController::class, 'getall'])->name('user-getall');
});
