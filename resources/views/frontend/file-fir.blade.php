@extends('layouts.frontend')
@section('frontend')
    <div>
        <div class=" bg-gray-100 flex items-center justify-center py-6">
            <div class="container mx-auto">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-bold mb-10 text-gray-800 text-center">FIR Registration Form</h2>
                    @livewire('firData')
                </div>
            </div>
        </div>

    </div>
@endsection
