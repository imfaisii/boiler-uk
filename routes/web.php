<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\QuoteController;
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

// Home View
Route::view('/', 'front.home')->name('front.home');

// Contact
Route::get('/contact-us', [ContactController::class, 'index'])->name('front.contact');
Route::post('/contact-us', [ContactController::class, 'submit'])->name('front.contact.submit');

// Get a Quote View
Route::get('/get-a-quote', [QuoteController::class, 'index'])->name('front.get-a-quote');
Route::post('/get-a-quote', [QuoteController::class, 'submit'])->name('front.get-a-quote.submit');
