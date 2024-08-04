<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\CustomerDetailsController; 
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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [HomeController::class, 'show']);
Route::get('/customer_details', [HomeController::class, 'formDetails'])->name('formDetails');
Route::get('/update/{booking}', [HomeController::class, 'update'])->name('update');
Route::resource('/books', BookController::class);
Route::resource('/booking',  CustomerDetailsController::class);
