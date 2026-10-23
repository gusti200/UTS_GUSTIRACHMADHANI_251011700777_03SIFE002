<?php

use App\Http\Controllers\DishController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DishController::class, 'index'])->name('dishes.index');
Route::get('/kuliner/{dish}', [DishController::class, 'show'])->name('dishes.show');
