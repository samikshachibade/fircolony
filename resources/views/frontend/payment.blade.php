@extends('layouts.frontend')
@section('frontend')

<div>
    <x-frontend.header :title="__('payment.payment_processing_form_title')" :subtitle="__('payment.payment_processing_subtitle')" />
    <div class="w-1/2 mx-auto grid grid-cols-3 text-md font-medium gap-4 mt-4">
        <p class="bg-gray-50 text-center px-3 py-1 text-gray-600">@lang('payment.complainant_name') : {{$firData->complainant_name}}</p>
        <p class="bg-gray-50 text-center px-3 py-1 text-gray-600">@lang('payment.contact_number') : {{$firData->contact_number}}</p>
        <p class="bg-gray-50 text-center px-3 py-1 text-gray-600">@lang('payment.incident_date') : {{$firData->incident_date}}</p>
        <p class="bg-gray-50 text-center px-3 py-1 text-gray-600">@lang('payment.accused_name') : {{$firData->accused_name}}</p>
        <p class="bg-gray-50 text-center px-3 py-1 text-gray-600">@lang('payment.incident_location') : {{$firData->incident_location}}</p>
    </div>
    <p class="w-1/2 mx-auto bg-gray-50 text-center px-3 py-1 text-gray-600 mt-4">@lang('payment.incident_description') :<br> {{$firData->incident_description}}</p>

    <p class="text-3xl text-center font-semibold text-blue-700 my-6">@lang('payment.processing_fee') : 500</p>
    <div class="flex w-full items-center justify-center py-3">
        <livewire:payment-page  />
    </div>
</div>

@endsection
