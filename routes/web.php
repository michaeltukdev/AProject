<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// List all projects

Route::view('/', 'home')->name('home');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('project');

// User routes

Route::middleware('auth')->group(function() {
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('create');
    Route::get('/projects/edit', [ProjectController::class, 'edit'])->name('edit');
});

//  Auth routes

Route::middleware('guest')->group(function() {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
});

Route::get('/logout', function(Request $request) {

    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
})->name('logout');