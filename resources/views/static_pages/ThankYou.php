<?php

use App\Http\Controllers\StaticPages\ThankYouController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('thank-you', [ThankYouController::class, 'index'])
    ->name('static.thank-you');
