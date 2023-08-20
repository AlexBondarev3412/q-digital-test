<?php

use App\Http\Controllers\Api\v1\BookController;
use App\Http\Controllers\Api\v1\UserAuthenticationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::prefix('v1')->group(function () {
    Route::post('login', [UserAuthenticationController::class, 'login']);
    Route::post('register', [UserAuthenticationController::class, 'register']);
});
Route::prefix('v1')->middleware('auth:sanctum')->group(function () {
    Route::post('logout', [UserAuthenticationController::class, 'logout']);
    Route::get('/books/search', [BookController::class, 'create'])->name('search');
    Route::post('/books/{book_id}/favourite_toggle', [BookController::class, 'favourite_toggle']);
    Route::apiResource('books', BookController::class);

});
