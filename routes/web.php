<?php

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

use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/addbook',[BookController::class,'create']);

Route::get('/books',[BookController::class,'index']);

Route::post('/books',[BookController::class, 'store']);
