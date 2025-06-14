<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Models\Book;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books/store', [BookController::class, 'store']);
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('edit');
Route::put('/books/{id}/update', [BookController::class, 'update']);
Route::get('/books/{id}/destroy', [BookController::class, 'destroy']);
Route::get('/books', function () {

    return view('books.index', ['books' => Book::all()]);

});