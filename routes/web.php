<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LibraryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LibraryController::class, 'index']);
Route::get('/search', [AuthorController::class, 'search'])->name('search');

Route::prefix('/')->group(function () {
    Route::resource('authors', AuthorController::class);
});

Route::prefix('/')->group(function () {
    Route::resource('books', BookController::class);
});


