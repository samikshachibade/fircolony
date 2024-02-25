
    <div class="max-w-7xl mx-auto">
        @foreach($faqs as $faq)
                <div class="p-4 bg-white rounded-lg shadow mt-6">
                    <div class="flex justify-between items-center cursor-pointer" wire:click="toggleFaq({{ $faq['id'] }})">
                        <h4 class="text-lg font-medium">{{ $faq['question'] }}</h4>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $expandedFaq === $faq['id'] ? 'M19 9l-7 7-7-7' : 'M9 5l7 7-7 7'}}" />
                        </svg>
                    </div>
                    @if($expandedFaq === $faq['id'])
                        <div class="mt-2 text-gray-600">
                            {{ $faq['answer'] }}
                        </div>
                    @endif
                </div>
            @endforeach
    </div>

