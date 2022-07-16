<?php

use App\Http\Controllers\ContactController;
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
Route::post('/contact-us', [ContactController::class, 'send'])->name('front.contact.send');

// Get a Quote View
Route::view('/get-a-quote', 'front.get-a-quote')->name('front.get-a-quote');
