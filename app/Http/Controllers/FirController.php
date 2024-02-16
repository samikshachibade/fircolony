<?php

namespace App\Http\Controllers;
use App\Models\Fir;
use Illuminate\Http\Request;

class FirController extends Controller
{

    public function searchByReceipt(Request $request)
    {
        $receipt = $request->query('receipt');
        $fir = Fir::where('receipt', $receipt)->first();

        // Redirect to a specific view with the FIR data
        return view('frontend.fir-search', compact('fir'));
    }

}
