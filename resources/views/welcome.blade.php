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
                        <h2 class="font-bold text-lg mb-2 bg-gray-200 p-4">News & Press Releases</h2>
                        <ul class="space-y-1 text-xs md:text-sm flex flex-col gap-2">
                            <!-- List items -->
                            <li class="text-grey-600 hover:text-blue-700 transition duration-300 ease-in-out">
                                <a href="#">Railway Protection Force is set to host the 67th All India...</a>
                            </li>
                            <li class="text-grey-600 hover:text-blue-700 transition duration-300 ease-in-out">
                                <a href="#">DPIIT holds consultation with representatives of Indian Cement...</a>
                            </li>
                            <li class="text-grey-600 hover:text-blue-700 transition duration-300 ease-in-out">
                                <a href="#">Capacity Building Maldivian Civil Servants: The NCGG achieves...</a>
                            </li>
                            <li class="text-grey-600 hover:text-blue-700 transition duration-300 ease-in-out">
                                <a href="#">Text of PM’s address at ET Now Global Business Summit 2024</a>
                            </li>
                            <li class="text-grey-600 hover:text-blue-700 transition duration-300 ease-in-out">
                                <a href="#">PM addresses ET Now Global Business Summit 2024</a>
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
                        <h2 class="font-bold text-lg mb-2 bg-gray-200 p-4">Information</h2>
                        <ul class="space-y-1 text-xs md:text-sm flex flex-col gap-2">
                            <!-- List items -->
                            <li class="text-grey-600 hover:text-blue-700 transition duration-300 ease-in-out">
                                <a href="#">Railway Protection Force is set to host the 67th All India...</a>
                            </li>
                            <li class="text-grey-600 hover:text-blue-700 transition duration-300 ease-in-out">
                                <a href="#">DPIIT holds consultation with representatives of Indian Cement...</a>
                            </li>
                            <li class="text-grey-600 hover:text-blue-700 transition duration-300 ease-in-out">
                                <a href="#">Capacity Building Maldivian Civil Servants: The NCGG achieves...</a>
                            </li>
                            <li class="text-grey-600 hover:text-blue-700 transition duration-300 ease-in-out">
                                <a href="#">Text of PM’s address at ET Now Global Business Summit 2024</a>
                            </li>
                            <li class="text-grey-600 hover:text-blue-700 transition duration-300 ease-in-out">
                                <a href="#">PM addresses ET Now Global Business Summit 2024</a>
                            </li>

                        </ul>
                        <a href="#"
                            class="text-blue-600 hover:text-blue-700 transition duration-300 ease-in-out mt-4">more
                            news..</a>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 px-2">
                    <div class="flex flex-col items-center justify-center gap-3 text-sm">
                        <div class="w-20 md:w-32 h-20 md:h-32 rounded-full flex items-center justify-center overflow-clip">
                            <img src="{{ asset('assets/dgp_rashmi_shukla.jpg') }}" alt="dgp"
                                class="w-full object-center">
                        </div>
                        <p class="text-center">" We will serve and protect all, particularly the downtrodden, the weak, women, children,
                            minorities, senior citizen’s, slums dwellers, the poor & other marginalized sections of society.
                            We will give prompt & compassionate response to every call of citizen in distress."
                            <br><b>dgp_rashmi_shukla</b></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
