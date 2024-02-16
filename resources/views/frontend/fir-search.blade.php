@extends('layouts.frontend') {{-- Update this layout path as needed --}}

@section('frontend')
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg w-full px-6 flex flex-col  my-6">

        <table class="w-full text-sm text-left text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200  ">
                <tr>
                    <th scope="col" class="py-3 px-6">Complainant Name</th>
                    <th scope="col" class="py-3 px-6">Identity Proof</th>
                    <th scope="col" class="py-3 px-6">Contact Number</th>
                    <th scope="col" class="py-3 px-6">Incident Date</th>
                    <th scope="col" class="py-3 px-6">Accused Name</th>
                    <th scope="col" class="py-3 px-6">Incident Location</th>
                    <th scope="col" class="py-3 px-6">Incident Description</th>
                    <th scope="col" class="py-3 px-6">Amount</th>
                    <th scope="col" class="py-3 px-6">Receipt</th>
                    <th scope="col" class="py-3 px-6">Status</th>
                    <th scope="col" class="py-3 px-6">Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($fir)
                    <tr class="bg-gray-100  border-b  border-gray-200 hover:bg-gray-50 ">
                        <td class="py-4 px-6">{{ $fir->complainant_name }}</td>
                        <td class="py-4 px-6">
                            <a href="{{ Storage::url($fir->identity_proof) }}" target="_blank"
                                class="text-blue-500 hover:underline">View Document</a>
                        </td>
                        <td class="py-4 px-6">{{ $fir->contact_number }}</td>
                        <td class="py-4 px-6">{{ $fir->incident_date }}</td>
                        <td class="py-4 px-6 text-red-500 font-semibold">{{ $fir->accused_name }}</td>
                        <td class="py-4 px-6">{{ $fir->incident_location }}</td>
                        <td class="py-4 px-6">{{ $fir->incident_description }}</td>
                        <td class="py-4 px-6">{{ $fir->amount }}</td>
                        <td class="py-4 px-6">{{ $fir->receipt }}</td>
                        <td class="py-4 px-6 text-green-400 font-semibold">{{ $fir->status }}</td>
                        <td class="py-4 px-6">
                            {{ $fir->current_status }}
                        </td>
                    </tr>
            </tbody>
            @endif
        </table>
        @if (!$fir)
            <div class="w-full text-center py-4 text-lg font-medium">
                <p>No data found for your FIR in our database</p>
            </div>
        @endif
    </div>
@endsection
