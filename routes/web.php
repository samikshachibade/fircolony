<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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
Route::get('/profile-update', function () {
    return view('frontend.profile-update');
});

Route::fallback(function () {
    return redirect('/');
});

Route::get('/dashboard', function() {
    // Retrieve the currently authenticated user
    $user = Auth::user();

    // Check if the user is authenticated and an admin
    if ($user && $user->admin == true) {
        return view('backend.dashboard');
    } else {
        return redirect('/');
    }
});
