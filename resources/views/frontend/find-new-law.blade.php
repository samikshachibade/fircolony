@extends('layouts.frontend') {{-- Ensure this path matches your layout file --}}

@section('frontend')
    <div>
        <x-frontend.header title="{{ __('lang.find_new_laws_title') }}"
        subtitle="{{ __('lang.find_new_laws_subtitle') }}" />

        @foreach ($laws as $status => $lawList)
            <div class="mb-8 px-4">
                <h3 class="mt-8 text-2xl font-semibold mb-3">{{ $status }}</h3>
                <div class="bg-white shadow-md rounded-lg">
                    <ul class="divide-y divide-gray-200">
                        <li class="px-4 py-4 bg-gray-700 ">
                            <div class="flex justify-between">
                                <div class="w-full">
                                    <p class="px-5 py-3 text-left text-xs font-semibold text-white uppercase w-3/4">Title</p>

                                </div>
                                <p class="px-5 py-3 text-left text-xs font-semibold text-white uppercase">Year</p>
                            </div>
                        </li>
                        @foreach ($lawList as $law)
                            <li class="px-4 py-4 odd:bg-white  even:bg-gray-50">
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
