<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
create - show from to create new Book
store - store new Book
edit - update Book
destroy - delete Book
*/

//show all Books
Route::get('/', 
    [BookController::class, 'index']);

//show create form
Route::get('/books/create', 
    [BookController::class, 'create']);

//store Book data
Route::post('/books', 
    [BookController::class, 'store']);

//edit form
Route::get('/books/{book}/edit', 
    [BookController::class, 'edit']);

//update Book
Route::put('/books/{book}', 
    [BookController::class, 'update']);

//delete Book
Route::delete('/books/{book}', 
    [BookController::class, 'delete']);

//manage Books
Route::get('/books/manage',
    [BookController::class, 'manage']);

//show single Book
Route::get('/books/{book}', 
    [BookController::class, 'show']);