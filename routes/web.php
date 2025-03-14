<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\StudentsController;
use App\Http\Middleware\AuthCheck;
use Illuminate\Support\Facades\Route;

    // Redirect root URL to login page
    Route::get('/', function () {
        return redirect()->route('auth.index');
    });

    // Auth Login
    Route::get('/login', [AuthController::class, 'index'])->name('auth.index');
    Route::post('/user-login', [AuthController::class, 'login'])->name('auth.login');

    // Auth Register
    Route::get('/register', [AuthController::class, 'indexRegister'])->name('auth.register');
    Route::post('/user-register', [AuthController::class, 'userRegister'])->name('auth.userRegister');

    // Protected Routes (Require Authentication)
    Route::middleware([AuthCheck::class])->group(function () {
    Route::get('/students-list', [StudentsController::class, 'myWelcomeView'])->name('std.myWelcomeView');

    // Create
    Route::post('/create', [StudentsController::class, 'createNewStd'])->name('std.createNew');

    // Update
    Route::put('/update/{id}', [StudentsController::class, 'updateStudent'])->name('std.update');

    // Delete
    Route::delete('/delete/{id}', [StudentsController::class, 'deleteStudent'])->name('std.delete');

    // Logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});
