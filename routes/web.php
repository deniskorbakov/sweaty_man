<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\RegisterController;


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

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', [ContactController::class,'submit'])->name('contact-submit');

Route::get('/reviews', function () {
    return view('reviews');
})->name('reviews');

Route::post('/reviews/submit', [ReviewsController::class,'submit'])->name('reviews-submit');
Route::get('/reviews/all', [ReviewsController::class,'allData'])->name('reviews-data');
Route::get('/reviews/all/{id}', [ReviewsController::class,'showData'])->name('reviews-show');

Route::get('/authorization', function () {
    return view('authorization');
})->name('authorization');

Route::post('/register', [RegisterController::class,'store'])->name('register-store');

Route::view('/userAccount','userAccount')->middleware('auth')->name('userAccount');






