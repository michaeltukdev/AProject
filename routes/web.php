<?php

use Illuminate\Support\Facades\Route;

// List all projects

Route::view('/', 'home')->name('home');
Route::get('/project/{project}', [ProjectController::class, 'show'])->name('project');

//  Auth routes

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');