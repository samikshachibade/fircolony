@extends('layouts.frontend')
@section('frontend')

<div>
    <div class="p-4 text-center">
        <h2 class="text-5xl font-bold text-blue-500">Payment processing form</h2>
        <p class="text-lg mt-2 text-gray-400">Process your payment to get FIR register to system</p>
    </div>
<div class="w-1/2 mx-auto grid grid-cols-3 text-md font-medium gap-4 mt-4">
    <p class="bg-gray-50 text-center px-3 py-1 text-gray-600">Complainant Name : {{$firData->complainant_name}}</p>
    <p class="bg-gray-50 text-center px-3 py-1 text-gray-600">Contact Number : {{$firData->contact_number}}</p>
    <p class="bg-gray-50 text-center px-3 py-1 text-gray-600">Incident Date : {{$firData->incident_date}}</p>
    <p class="bg-gray-50 text-center px-3 py-1 text-gray-600">Accused Name : {{$firData->accused_name}}</p>
    <p class="bg-gray-50 text-center px-3 py-1 text-gray-600">Incident Location : {{$firData->incident_location}}</p>
</div>
<p class="w-1/2 mx-auto bg-gray-50 text-center px-3 py-1 text-gray-600 mt-4">Incident Description :<br> {{$firData->incident_description}}</p>

<p class="text-3xl text-center font-semibold text-blue-700 my-6">Processing fee : 500</p>
<div class="flex w-full items-center justify-center py-3">
    <livewire:payment-page  />
</div>
</div>

@endsection
