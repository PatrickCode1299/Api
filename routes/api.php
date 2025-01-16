<?php

use Illuminate\Support\Facades\Route;

Route::post('/registerUser', [App\Http\Controllers\RegisterUserController::class,'registerUser']);
Route::post('/login', [App\Http\Controllers\LoginController::class,'loginUser']);
Route::get('/createUserPost', [App\Http\Controllers\CreateUserPostController::class,'createPost']);