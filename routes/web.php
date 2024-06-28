<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PostController;

// Route::get('/product/{id}', function () {
//     return view('welcome');
// });

Route::get('/note', [NoteController::class, 'index'])->name('index');
Route::get('/note/create', [NoteController::class, 'create'])->name('create');
Route::post('note/store', [NoteController::class, 'store'])->name('store');
Route::get('note/edit/{note}', [NoteController::class, 'edit'])->name('edit');
Route::put('note/update/{note}', [NoteController::class, 'update'])->name('update');
Route::get('/show/{note}', [NoteController::class, 'show'])->name('show');
Route::delete('note/destroy/{note}', [NoteController::class, 'destroy'])->name('destroy');

Route::resource('/post', PostController::class);