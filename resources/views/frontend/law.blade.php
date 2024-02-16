@extends('layouts.frontend') {{-- Ensure this path matches your layout file --}}

@section('frontend')
    <div>
        <x-frontend.header title='Find New Laws'
            subtitle='Below list are for the bills raised by the govement and their status between 2020-till now '
            image='https://www.hindustantimes.com/ht-img/img/2024/01/11/550x309/A-bench-of-Justice-Jasmeet-Singh-gave-him-the-libe_1704884070310_1704980261604.jpg' />

        @foreach ($laws as $status => $lawList)
            <div class="mb-8 px-4">
                <h2 class="text-xl font-semibold mb-4">{{ $status }}</h2>
                <div class="bg-white shadow-md rounded-lg">
                    <ul class="divide-y divide-gray-200">
                        @foreach ($lawList as $law)
                            <li class="px-4 py-4">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <p class="text-gray-900 text-sm md:text-md">{{ $law['name'] }}</p>

                                    </div>
                                    <p class="text-gray-900 text-center bg-gray-50 px-4 py-2 text-sm md:text-md">Year: {{ $law['year'] }}</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
@endsection
