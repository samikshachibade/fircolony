<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/fir', function () {
        return view('frontend.file-fir');
    });
});
Route::get('/register', function () {
    return view('frontend.register');
});

Route::get('/payment', [PaymentController::class, 'showPaymentPage'])->middleware('auth')->name('payment');

Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware('auth');


Route::fallback(function () {
    return redirect('/');
});


