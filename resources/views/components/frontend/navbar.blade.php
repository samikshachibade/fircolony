<div class="">
    <div class="w-full flex justify-items-end h-10 bg-gray-200 p-1 ">
        <div class="container mx-auto flex items-center justify-end gap-3">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/profile') }}" class="bg-gray-300 text-gray-500 text-sm  px-2 py-1">Profile</a>
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="bg-gray-300 text-gray-500 text-sm  px-2 py-1">Log
                        in</a>

                    <a href="/register" class="bg-gray-300 text-gray-500 text-sm  px-2 py-1">Register</a>
                @endauth
            @endif

            <button class="bg-blue-200 text-gray-600 text-sm  px-2 py-1">change Language</button>
        </div>
    </div>
    <div class="container mx-auto p-4 flex flex-col lg:flex-row items-center gap-4 justify-between">
        <div class="flex gap-6 items-center justify-center">
            <div class="w-16">
                <img src="{{ asset('assets/embled.png') }}" alt="embled" class="w-full">
            </div>
            <div class="">
                <h1 class="text-3xl font-bold text-blue-300">Indian FIR Portal<br> for justice</h1>
            </div>
        </div>
        <div
            class="uppercase grid grid-cols-2 lg:grid-cols-4  text-xs md:text-sm text-gray-500 font-semibold gap-2 lg:gap-10">
            <a href="/" class="bg-gray-200 rounded-full text-center px-4 py-1 hover:scale-105">Find new Law</a>
            <a href="/" class="bg-gray-200 rounded-full text-center px-4 py-1 hover:scale-105">Find existing
                Law</a>
            <a href="/" class="bg-gray-200 rounded-full text-center px-4 py-1 hover:scale-105">My goverment</a>
            <a href="/" class="bg-gray-200 rounded-full text-center px-4 py-1 hover:scale-105">India at glance</a>
        </div>
    </div>

    <nav class="w-full bg-blue-500">
        <div class="container mx-auto flex flex-col lg:flex-row lg:items-center justify-around lg:gap-20">
            <div class="flex items-center">
                <a href=".">
                    <img src="{{ asset('assets/logo.png') }}" alt="logo" class="w-20">
                </a>
                <p class="font-bold text-white">College Project<br> Portal</p>
            </div>

            <form class="w-full p-4 lg:w-1/2">
                <label for="default-search" class="mb-2 text-sm font-medium  sr-only ">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500  dark"
                        placeholder="Search law query..." required>
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Search</button>
                </div>
            </form>

            <div class="w-full lg:w-1/2 flex items-center justify-around pb-2 lg:justify-center lg:gap-20">
                <a href="/fir"
                    class="font-semibold text-gray-600 dark:text-gray-100 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">File
                    FIR</a>
                <a href="/police"
                    class="font-semibold text-gray-600 dark:text-gray-100 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Police</a>
                <a href="/court"
                    class="font-semibold text-gray-600 dark:text-gray-100 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Court</a>
            </div>

        </div>
    </nav>
</div>
