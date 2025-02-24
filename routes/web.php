<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route; 

// For View
Route::get('/', [StudentsController::class, 'myWelcomeView'])->name('std.myWelcomeView');

// Create
Route::post('/create', [StudentsController::class, 'createNewStd'])->name('std.createNew');

// Update
Route::put('/update/{id}', [StudentsController::class, 'updateStudent'])->name('std.update');

// Delete
Route::delete('/delete/{id}', [StudentsController::class, 'deleteStudent'])->name('std.delete');