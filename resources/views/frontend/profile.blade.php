@extends('layouts.frontend') {{-- Use your app's main layout --}}

@section('frontend')
<div class="container mx-auto p-4">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-semibold mb-2">User Profile</h2>
        <div class=" flex flex-wrap gap-6 pb-4">
            <p class="bg-gray-100 rounded-full px-3 py-1 text-gray-700 "><b>Name: </b> <span class="font-medium">{{ $user->name ?? '' }} {{ $user->father_name ?? '' }} {{ $user->mother_name ?? '' }} {{ $user->surname ?? '' }}</span></p>
            <p class="bg-gray-100 rounded-full px-3 py-1 text-gray-700 "><b>Email: </b> <span class="font-medium">{{ $user->email }}</span></p>
            <p class="bg-gray-100 rounded-full px-3 py-1 text-gray-700 "><b>Contact  Number:</b>{{$user->mobile_number?? ''}}</p>
            <p class="bg-gray-100 rounded-full px-3 py-1 text-gray-700 "><b>Address: </b>{{$user->address?? ''}}, {{$user->city?? ''}}, {{$user->state?? ''}} </p>
            <p class="bg-gray-100 rounded-full px-3 py-1 text-gray-700 "><b>Aadhaar  Number: </b>{{$user->aadhaar_number?? ''}}</p>
            <p class="bg-gray-100 rounded-full px-3 py-1 text-gray-700 "><b>Pancard  Number: </b>{{$user->pancard_number?? ''}}</p>
        </div>
        <a class="px-6 py-2 bg-blue-500 text-white font-semibold flex w-fit my-10 rounded-full hover:scale-105" href="/profile-update">Update Profile</a>

        <div class="mt-6">
            <h3 class="text-xl font-semibold mb-4">Your FIRs</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-4 py-2 text-left">Complainant Name</th>
                            <th class="px-4 py-2 text-left">Complainant Id</th>
                            <th class="px-4 py-2 text-left">Contact Number</th>
                            <th class="px-4 py-2 text-left">Incident Date</th>
                            <th class="px-4 py-2 text-left">Accused Name</th>
                            <th class="px-4 py-2 text-left">Status</th>
                            <th class="px-4 py-2 text-left">Current Status</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($firs as $fir)
                        <tr class="border-b">
                            <td class="px-4 py-2">{{ $fir->complainant_name }}</td>
                            <td class="px-4 py-2">{{ $fir->receipt}}</td>
                            <td class="px-4 py-2">{{ $fir->contact_number }}</td>
                            <td class="px-4 py-2">{{ $fir->incident_date }}</td>
                            <td class="px-4 py-2">{{ $fir->accused_name }}</td>
                            <td class="px-4 py-2">{{ $fir->status }}</td>
                            <td class="px-4 py-2 capitalize bg-blue-100">{{ $fir->current_status }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
