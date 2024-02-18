<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FirController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LawsController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\PoliceStationController;
use App\Http\Middleware\Localization;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;


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

    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->middleware(['auth'])->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();

        return redirect('/profile'); // Redirect to the desired location after verification
    })->middleware(['auth', 'signed'])->name('verification.verify');

    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Verification link sent!');
    })->middleware(['auth', 'throttle:6,1'])->name('verification.send');

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
    Route::get('/find-existing-laws',function(){
        return view('frontend.find-existing-law');
    })->name('find.existing.laws');
    Route::get('/firs/{id}', [FirController::class, 'show'])->name('fir.show');
    Route::get('/search', [FirController::class, 'searchByReceipt'])->name('search.receipt');

    Route::get('/find-police-station', [PoliceStationController::class, 'index'])->name('find-police-station');


});
