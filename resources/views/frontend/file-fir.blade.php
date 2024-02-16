@extends('layouts.frontend')
@section('frontend')
    <div>
        <x-frontend.header :title="__('fir.registration_form_title')"
            :subtitle="__('fir.registration_form_subtitle')" />

        <div class="flex items-center justify-center mt-4 px-4">
            <div class="bg-white rounded-lg shadow-lg p-4">
                @livewire('firData')
            </div>

        </div>
    </div>
@endsection
