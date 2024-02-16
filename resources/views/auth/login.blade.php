@extends('layouts.frontend')

@section('frontend')
    <div class="">
        <x-frontend.header :title="__('login.login_form')" :subtitle="__('login.login_to_continue')" />


        <x-authentication-card>
            <x-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="bg-white rounded-lg p-4 w-full flex flex-col md:items-center justify-center">
                @csrf

                <div class="w-full md:w-3/4">
                    <x-label for="email" :value="__('login.email')" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>

                <div class="mt-4 w-full md:w-3/4">
                    <x-label for="password" :value="__('login.password')" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ms-2 text-sm text-gray-600">@lang('login.remember_me')</span>
                    </label>
                </div>

                <div class="flex flex-col items-center justify-center mt-4">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white w-full md:w-fit px-4 py-2 rounded-lg text-center">
                        @lang('login.log_in')
                    </button>

                    @if (Route::has('password.request'))
                        <a class="underline text-xs mt-4 text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            @lang('login.forgot_your_password')
                        </a>
                    @endif
                </div>
            </form>
        </x-authentication-card>
    @endsection
