<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/signup', [UserController::class, 'createUser']);
Route::get('/login', [UserController::class, 'login']);
Route::get('/home', [UserController::class, 'showProfile'])->name('profilePage');