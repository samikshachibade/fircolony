<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    public function changeLanguage($locale)
    {
        App::setLocale($locale);
        return redirect()->back();
    }
}
