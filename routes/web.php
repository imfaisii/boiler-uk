<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\QuoteController;
use App\Mail\QuoteMail;
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

Route::get('render', function () {
    $details = array();
    $details['name'] = 'Test';
    $details['email'] = 'example@gmail.com';
    $details['phone_number'] = 123123123;
    $details['postal_code'] = 'ZK200';
    $details['own_home'] = 'Yes';
    $details['before_2005'] = 'No';
    $details['radiators'] = '2';
    $details['heated_type'] = 'Yes';
    $details['number_of_bedrooms'] = 4;
    $details['property_type'] = 'Flat';
    $details['insulation'] = [
        'insulation 1'
    ];

    return (new QuoteMail($details))->render();
});
