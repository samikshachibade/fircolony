@extends('layouts.frontend')
@section('frontend')
    <div class="flex flex-col items-center justify-center w-full my-6 px-6" x-data="{ showUsers: true, showFirs: false }">
        <div class="container mx-auto flex flex-col">
            <h2 class="text-2xl font-semibold mb-2">User Profile</h2>
            <div class=" grid grid-cols-4 gap-2 pb-4 mt-4">
                <p class=" text-gray-700 "><b>Name: </b> <span class="font-medium">{{ $user->name ?? '' }}
                        {{ $user->father_name ?? '' }} {{ $user->mother_name ?? '' }} {{ $user->surname ?? '' }}</span></p>
                <p class=" text-gray-700 "><b>Email: </b> <span class="font-medium">{{ $user->email }}</span></p>
                <p class=" text-gray-700 "><b>Contact Number:</b>{{ $user->mobile_number ?? '' }}</p>
                <p class=" text-gray-700 "><b>Aadhaar Number: </b>{{ $user->aadhaar_number ?? '' }}</p>
                <p class=" text-gray-700 "><b>Pancard Number: </b>{{ $user->pancard_number ?? '' }}</p>
                <p class=" text-gray-700 "><b>Address: </b>{{ $user->address ?? '' }}, {{ $user->city ?? '' }},
                    {{ $user->state ?? '' }} </p>
            </div>
            <div class="my-10 flex w-full items-center justify-center gap-6">
                <button @click="showUsers = true; showFirs = false;"
                    class="bg-black px-4 py-1 text-white font-semibold rounded-full">Users data</button>
                <button @click="showUsers = false; showFirs = true;"
                    class="bg-black px-4 py-1 text-white font-semibold rounded-full">FIRs data</button>
            </div>
        </div>
        <div class="flex w-full items-center justify-center">
            <div x-show="showUsers">
                @livewire('users-table')
            </div>
            <div x-show="showFirs">
                @livewire('firs-table')
            </div>
        </div>
    </div>
@endsection
