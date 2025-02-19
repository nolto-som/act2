<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route; 

// For View
Route::get('/', [StudentsController::class, 'myWelcomeView'])->name('std.myWelcomeView');

// Create
Route::post('/create', [StudentsController::class, 'createNewStd'])->name('std.createNew');