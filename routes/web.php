<?php

use App\Http\Controllers\LibraryController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LibraryController::class, 'list']);
Route::post('/filter', [LibraryController::class, 'filter']);
Route::get('/filter', [LibraryController::class, 'list']);

Route::get('/detail', [LibraryController::class, 'detail']);
Route::post('/detail', [LibraryController::class, 'detail']);
