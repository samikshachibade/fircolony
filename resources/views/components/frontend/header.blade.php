<div class="container mx-auto flex flex-col items-center">
    @if (isset($image))
        <div class="h-48 w-full flex items-center justify-center overflow-hidden">
            <img src="{{ asset($image) }}" alt="Header Image" class="w-full object-center object-cover">
        </div>
    @endif
    <h1 class="text-3xl md:text-5xl mt-6 font-bold text-blue-500 px-4">{{ $title }}</h1>
    @if (isset($subtitle))
        <p class="text-xs text-center md:text-base mt-1 text-gray-600 pb-6 px-4">{{ $subtitle }}</p>
    @endif
</div>
