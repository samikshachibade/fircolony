<footer class="bg-black text-white mt-20">
    <div class="max-w-screen-xl mx-auto py-8 px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">

        <!-- First Column -->
        <div>
            <h5 class="text-yellow-400 uppercase mb-6">@lang('footer.information-related-to')</h5>
            <ul class="space-y-2">
                <li><a href="#" class="hover:text-gray-300">@lang('footer.agriculture')</a></li>
                <!-- ... other list items ... -->
                <li><a href="#" class="hover:text-gray-300">@lang('footer.travel-and-tourism')</a></li>
            </ul>
        </div>

        <!-- Second Column -->
        <div>
            <h5 class="text-yellow-400 uppercase mb-6">@lang('footer.about-the-government')</h5>
            <ul class="space-y-2">
                <li><a href="#" class="hover:text-gray-300">@lang('footer.constitution-of-india')</a></li>
                <!-- ... other list items ... -->
                <li><a href="#" class="hover:text-gray-300">@lang('footer.members-of-parliament')</a></li>
            </ul>
        </div>

        <!-- Third Column (Logos and Mission Statement) -->
        <div class="md:col-span-2 flex flex-col justify-between">
            <div>
                <p class="text-gray-400 text-sm">
                    @lang('footer.mission-statement')
                </p>
                <p class="text-gray-500 text-xs mt-4">
                    @lang('footer.last-reviewed')
                </p>
            </div>
        </div>
    </div>
    <!-- Bottom Bar -->
    <div class="border-t border-gray-700 text-center py-4">
        <p class="text-gray-400 text-sm">
            @lang('footer.copyright')
        </p>
    </div>
</footer>
