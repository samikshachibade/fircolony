@extends('layouts.frontend')
@section('frontend')
<div class="my-10 p-10 w-full flex flex-col items-center justify-center container mx-auto bg-white  ">
    <div class="p-4 text-center">
        <h2 class="text-5xl font-bold text-blue-500">Registration form</h2>
        <p class="text-lg mt-2 text-gray-400">Regiter yourself before proceed to any fir</p>
    </div>
    @livewire('auth.register')
</div>

@endsection
