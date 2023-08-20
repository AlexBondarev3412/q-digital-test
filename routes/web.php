<?php

use App\Http\Controllers\BookController;
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
Route::get('/', [BookController::class, 'create'])->name('search')->middleware(['auth']);
Route::post('/books/{book}/favourite_toggle', [BookController::class, 'favourite_toggle'])->name('books.favourite_toggle')->middleware(['auth']);
Route::resource('/books', BookController::class)->except([
    'create'
])->names('books')->middleware(['auth']);

require __DIR__ . '/auth.php';
