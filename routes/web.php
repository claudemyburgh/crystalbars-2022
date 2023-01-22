<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/gallery', \App\Http\Controllers\GalleryController::class)->name('gallery');
Route::get('/faq', \App\Http\Controllers\FaqController::class)->name('faq');
Route::get('/quote', \App\Http\Controllers\QuoteController::class)->name('quote');
Route::get('/trellis-gates', \App\Http\Controllers\TrellisController::class)->name('trellis');

Route::post('/quote-send', \App\Http\Controllers\SendQuoteController::class)->name('quote.send');
