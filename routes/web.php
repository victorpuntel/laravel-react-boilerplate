<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

// SANCTUM ROUTE: GET /sanctum/csrf-cookie
Route::post('/login', [SessionController::class, 'store'])->name('login');
Route::view('/{path?}', 'app');
