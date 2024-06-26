<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

// Route::get('/product/{id}', function () {
//     return view('welcome');
// });

Route::get('product/{id?}', [NoteController::class, 'funtion'])->name('example.function');