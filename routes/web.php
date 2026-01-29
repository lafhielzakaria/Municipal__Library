<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', [bookController::class ,'index'])->name('index');
Route::get('/createBook', [bookController::class ,'createBook'])->name('CreateBook');
Route::get('/getedit/{id}', [bookController::class ,'geteditBookPage'])->name('book.getedit');
Route::get('/editBook/{id}', [bookController::class ,'editBook'])->name('book.edit'); 
Route::post('/index', [bookController::class ,'store'])->name('store.book');
Route::post('/destroy/{id}', [bookController::class ,'destroy'])->name('book.destroy');