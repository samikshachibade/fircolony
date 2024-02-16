@extends('layouts.frontend')
@section('frontend')
    <div class="w-full relative border h-[10rem] lg:h-[25rem] overflow-hidden flex items-center justify-center">
        <img src="{{ asset('assets/pm-modi.jpg') }}" alt="pm-modi" class="absolute object-center lg:w-full h-full">
    </div>
    <div>
        <div class="container mx-auto px-4 mt-6">
            <div class="flex flex-wrap lg:flex-row -mx-2 gap-6 lg:gap-0">

                <!-- News & Press Releases Column -->
                <div class="w-full lg:w-1/3 px-2">
                    <div class="bg-gray-100 p-4 border">
                        <h2 class="font-bold text-lg mb-2 bg-gray-200 p-4">@lang('homepage.news_press_releases_title')</h2>
                        <ul class="space-y-1 text-xs md:text-sm flex flex-col gap-2">
                            <!-- List items -->
                            <li class="text-grey-600 hover:text-blue-700 transition duration-300 ease-in-out">
                                <a href="#">@lang('homepage.news_item_1')</a>
                            </li>
                            <li class="text-grey-600 hover:text-blue-700 transition duration-300 ease-in-out">
                                <a href="#">@lang('homepage.news_item_2')</a>
                            </li>
                            <li class="text-grey-600 hover:text-blue-700 transition duration-300 ease-in-out">
                                <a href="#">@lang('homepage.news_item_3')</a>
                            </li>
                            <li class="text-grey-600 hover:text-blue-700 transition duration-300 ease-in-out">
                                <a href="#">@lang('homepage.news_item_4')</a>
                            </li>
                            <li class="text-grey-600 hover:text-blue-700 transition duration-300 ease-in-out">
                                <a href="#">@lang('homepage.news_item_5')</a>
                            </li>

                        </ul>
                        <a href="#"
                            class="text-blue-600 hover:text-blue-700 transition duration-300 ease-in-out mt-4">more
                            news..</a>
                    </div>
                </div>

                <!-- Information Column -->
                <div class="w-full lg:w-1/3 px-2">
                    <div class="bg-gray-100 p-4 border">
                        <h2 class="font-bold text-lg mb-2 bg-gray-200 p-4">@lang('homepage.information_title')</h2>
                        <ul class="space-y-1 text-xs md:text-sm flex flex-col gap-2">
                            <!-- List items -->
                            <li class="text-grey-600 hover:text-blue-700 transition duration-300 ease-in-out">
                                <a href="#">@lang('homepage.news_item_1')</a>
                            </li>
                            <li class="text-grey-600 hover:text-blue-700 transition duration-300 ease-in-out">
                                <a href="#">@lang('homepage.news_item_2')</a>
                            </li>
                            <li class="text-grey-600 hover:text-blue-700 transition duration-300 ease-in-out">
                                <a href="#">@lang('homepage.news_item_3')</a>
                            </li>
                            <li class="text-grey-600 hover:text-blue-700 transition duration-300 ease-in-out">
                                <a href="#">@lang('homepage.news_item_4')</a>
                            </li>
                            <li class="text-grey-600 hover:text-blue-700 transition duration-300 ease-in-out">
                                <a href="#">@lang('homepage.news_item_5')</a>
                            </li>

                        </ul>
                        <a href="#"
                            class="text-blue-600 hover:text-blue-700 transition duration-300 ease-in-out mt-4">@lang('homepage.more_news')</a>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 px-2">
                    <div class="flex flex-col items-center justify-center gap-3 text-sm">
                        <div class="w-20 md:w-32 h-20 md:h-32 rounded-full flex items-center justify-center overflow-clip">
                            <img src="{{ asset('assets/dgp_rashmi_shukla.jpg') }}" alt="dgp"
                                class="w-full object-center">
                        </div>
                        <p class="text-center">@lang('homepage.quote_by_dgp')
                            <br><b>@lang('homepage.dgp_name')</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
