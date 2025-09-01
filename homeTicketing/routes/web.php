<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accountCreation/', [UserController::class, 'showAccountCreation'])->name('show_account_creation');
Route::post('/accountCreation/signup', [UserController::class, 'createUser'])->name('create_account');
Route::get('/loginPage/', [UserController::class, 'showLogin'])->name('show_login');
Route::get('/loginPage/login', [UserController::class, 'login'])->name('login');
Route::get('/home', [UserController::class, 'showProfile'])->name('profilePage');