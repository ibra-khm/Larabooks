<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BooksController;


Route::get('/', [BooksController::class, 'index']);
Route::get('books', [BooksController::class, 'index']);

Route::get('show/{id}', [BooksController::class, 'show']);

Route::get('/add', [BooksController::class, 'create']);

Route::get('edit/{id}', [BooksController::class, 'edit']);
Route::post('/createbook', [BooksController::class, "store"]);
Route::post('/edit/{id}', [BooksController::class, "update"]);
Route::get('/del/{id}', [BooksController::class, "destroy"]);



// Show Registration Form
// Route::get('/register', [UserController::class, 'create']);

// Show Login Form
Route::get('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'create']);


Route::get('/author/{id}', [BooksController::class, 'authorsBooks']);
