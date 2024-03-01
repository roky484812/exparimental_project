<?php

use App\Http\Controllers\BookController as Book;
use App\Http\Controllers\Farhan\Test;
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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(Test::class)->group(function(){
    Route::post('store', 'store')->name('data_pathau');
    Route::get('test/v1', 'index');
});
Route::controller(Book::class)->group(function(){
    Route::get('book/store', 'store_book_page');
    Route::post('book/store', 'store_book')->name('store_book');
    Route::get('book/update/{id}', 'update_book_page')->name('update_book_page');
    Route::post('book/update', 'update_book')->name('update_book');
    Route::get('book/delete/{id}', 'delete_book')->name('delete_book');
});