<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ForgotController;
use App\Http\Controllers\ResetController;
use Illuminate\Auth\Notifications\ResetPassword;

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

Route::get('/authorization', [RegisterController::class,'create'])->middleware('guest')->name('authorization');

Route::post('/register', [RegisterController::class,'store'])->middleware('guest')->name('register-store');
Route::post('/login', [LoginController::class,'store'])->middleware('guest')->name('login-store');

Route::view('/userAccount','userAccount')->middleware('auth')->name('userAccount');

Route::view('/forgotPassword','forgotPassword')->middleware('guest')->name('forgotPassword');
Route::post('/forgotPass', [ForgotController::class,'forgot'])->middleware('guest')->name('forgotPass');

Route::get('/reset-password', [ResetPasswordController::class,'create'])->middleware('guest')->name('password.reset');

Route::post('/exit', [LoginController::class,'exit'])->middleware('auth')->name('exit');








