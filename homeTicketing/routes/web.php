<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return inertia('welcome'); //inertia returns the welcome landing component
});

Route::get('/accountCreation/', [UserController::class, 'showAccountCreation']);
Route::post('/accountCreation/signup', [UserController::class, 'createUser']);  
Route::get('/loginPage/', [UserController::class, 'showLogin']);
Route::get('/loginPage/login', [UserController::class, 'login']);
Route::get('/home', [UserController::class, 'showProfile']);

