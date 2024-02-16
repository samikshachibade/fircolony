@extends('layouts.frontend')
@section('frontend')
    <div class="flex flex-col items-center justify-center w-full my-6 px-6" x-data="{ showUsers: true, showFirs: false }">
        <div class="container mx-auto flex flex-col">
            <h2 class="text-2xl font-semibold mb-2">@lang('backend_profile.user_profile')</h2>
            <div class=" grid grid-cols-4 gap-2 pb-4 mt-4">
                <p class=" text-gray-700 "><b>@lang('backend_profile.name'): </b> <span class="font-medium">{{ $user->name ?? '' }}
                        {{ $user->father_name ?? '' }} {{ $user->mother_name ?? '' }} {{ $user->surname ?? '' }}</span></p>
                <p class=" text-gray-700 "><b>@lang('backend_profile.email'): </b> <span class="font-medium">{{ $user->email }}</span></p>
                <p class=" text-gray-700 "><b>@lang('backend_profile.contact_number'): </b>{{ $user->mobile_number ?? '' }}</p>
                <p class=" text-gray-700 "><b>@lang('backend_profile.aadhaar_number'): </b>{{ $user->aadhaar_number ?? '' }}</p>
                <p class=" text-gray-700 "><b>@lang('backend_profile.pancard_number'): </b>{{ $user->pancard_number ?? '' }}</p>
                <p class=" text-gray-700 "><b>@lang('backend_profile.address'): </b>{{ $user->address ?? '' }}, {{ $user->city ?? '' }},
                    {{ $user->state ?? '' }} </p>
            </div>
            <div class="my-10 flex w-full items-center justify-center gap-6">
                <button @click="showUsers = true; showFirs = false;"
                    class="bg-black px-4 py-1 text-white font-semibold rounded-full">@lang('backend_profile.users_data_button')</button>
                <button @click="showUsers = false; showFirs = true;"
                    class="bg-black px-4 py-1 text-white font-semibold rounded-full">@lang('backend_profile.firs_data_button')</button>
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
