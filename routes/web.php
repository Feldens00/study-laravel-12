<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Users
Route::get('admin/users', [UserController::class, 'index']);
Route::get('admin/users/{id}', [UserController::class, 'show']);