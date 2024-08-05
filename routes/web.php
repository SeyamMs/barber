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


Route::get('/', App\Livewire\Index::class)->name('index');

Route::get('bookings/create/{service}', App\Livewire\Booking\Create::class)->name('bookings.create');
Route::get('bookings/details', App\Livewire\Booking\Details::class)->name('bookings.details');
Route::get('bookings/edit/{Booking}', App\Livewire\Booking\Edit::class)->name('bookings.edit');

Route::get('customer_details', [App\Http\Controllers\HomeController::class, 'formDetails'])->name('formDetails');
Route::get('update/{booking}', [App\Http\Controllers\HomeController::class, 'update'])->name('update');

Route::resource('books', App\Http\Controllers\BookController::class);
Route::resource('booking',  App\Http\Controllers\CustomerDetailsController::class);
