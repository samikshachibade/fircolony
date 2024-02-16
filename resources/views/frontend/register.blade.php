@extends('layouts.frontend')
@section('frontend')
<div class="my-10 p-10 w-full flex flex-col items-center justify-center container mx-auto bg-white  ">
    <x-frontend.header :title="__('registration.registration_form')" :subtitle="__('registration.register_before_proceeding')" />
    @livewire('auth.register')
</div>

@endsection
