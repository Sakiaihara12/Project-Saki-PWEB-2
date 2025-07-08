<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/login", [AuthController::class, "login"])->name('login');
Route::post("/login", [AuthController::class, "loginPost"])->name('loginPost');
Route::get("/register", [AuthController::class, "register"])->name('register');
Route::post("/register", [AuthController::class, "registerPost"])->name('registerPost');
Route::get("/logout", [AuthController::class, "logout"])->name('logout');