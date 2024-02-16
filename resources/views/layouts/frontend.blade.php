<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="dark font-sans antialiased min-h-screen bg-gray-100 ">
<div id="popupMessage" style="display: none">
    <div  class="absolute w-full flex z-50 h-full items-center justify-center">
        <div class="bg-white rounded-lg shadow-md flex flex-col items-center justify-center w-1/6">
            <img src="{{ asset('assets/success.gif') }}" alt="success-gif" class="w-full">
        </div>
    </div>
</div>



    <x-frontend.navbar />

    <div class="container mx-auto my-10 bg-gray-100">
        <main>
            @yield('frontend')
        </main>
    </div>
    <x-frontend.footer />

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    @stack('modals')
    @livewireScripts
</body>

</html>
