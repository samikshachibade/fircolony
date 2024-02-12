<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Fir;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        $firs = $user->firs;
        $firData = Fir::class;
        if ($user && $user->admin == true) {
            return view('backend.dashboard', compact('user', 'firs'));
        } else {
            return view('frontend.profile', compact('user', 'firs'));
        };
    }
}
