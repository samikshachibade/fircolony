<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function showPaymentPage(Request $request)
    {
        // Retrieve FIR data from the session
        $firData = (object)$request->session()->get('firData', []);

        // Check if FIR data exists in the session, redirect if not
        if ($firData==null) {
            return redirect('/')->with('error', 'No FIR data found. Please submit your FIR again.');
        }
        // Pass the FIR data to the payment page view
        return view('frontend.payment', compact('firData'));
    }
}
