<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FirController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LawsController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\PoliceStationController;
use Illuminate\Support\Facades\App;
use App\Http\Middleware\Localization;


Route::get('/localization/{locale}',LocalizationController::class)->name('localization');

Route::middleware(Localization::class)->group(function(){

    require base_path('vendor/laravel/jetstream/routes/livewire.php');
    require base_path('vendor/laravel/fortify/routes/routes.php');
    Route::view('/','welcome');

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

    Route::get('/dashboard', function () {
        $user = Auth::user();
        if ($user && $user->admin == true) {
            return view('backend.dashboard');
        } else {
            return redirect('/');
        }
    });

    Route::get('/find-new-laws', [LawsController::class, 'index'])->name('find.new.laws');

    Route::get('/search', [FirController::class, 'searchByReceipt'])->name('search.receipt');

    Route::get('/find-police-station', [PoliceStationController::class, 'index'])->name('find-police-station');


});
