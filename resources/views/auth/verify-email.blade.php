@extends('layouts.frontend')
@section('frontend')
<div>
    <x-frontend.header :title="__('login.email_verification')" :subtitle="__('login.email_verify_first')" />
<div  class="bg-white p-4 mx-auto lg:w-1/2 text-center">
        <div class="mb-4 text-sm text-gray-600 container mx-auto">
            {{ __('login.verify_email_message') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('login.verification_link_sent') }}
            </div>
        @endif

        <div class="mt-4 flex flex-col gap-4  items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button type="submit">
                        {{ __('login.resend_verification_email') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
