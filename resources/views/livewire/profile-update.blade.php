<form wire:submit.prevent="updateProfile" class="w-full grid grid-cols-4 items-center justify-center gap-5 mt-6">
    <div class="w-full">
        <label for="name" class="block text-sm font-medium text-gray-700">@lang('registration.your_name')</label>
        <input type="text" wire:model.lazy="name" id="name" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" placeholder="Your Full Name">
        <p class="text-xs text-red-500">@error('name') {{ $message }} @enderror</p>
    </div>
    <div class="w-full">
        <label for="mother_name" class="block text-sm font-medium text-gray-700">@lang('registration.mothers_name')</label>
        <input type="text" wire:model.lazy="mother_name" id="mother_name" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" placeholder="Mother's Name">
        <p class="text-xs text-red-500">@error('mother_name') {{ $message }} @enderror</p>
    </div>
    <div class="w-full">
        <label for="father_name" class="block text-sm font-medium text-gray-700">@lang('registration.fathers_name')</label>
        <input type="text" wire:model.lazy="father_name" id="father_name" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" placeholder="Father's Name">
        <p class="text-xs text-red-500">@error('father_name') {{ $message }} @enderror</p>
    </div>
    <div class="w-full">
        <label for="surname" class="block text-sm font-medium text-gray-700">@lang('registration.surname')</label>
        <input type="text" wire:model.lazy="surname" id="surname" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" placeholder="Surname">
        <p class="text-xs text-red-500">@error('surname') {{ $message }} @enderror</p>
    </div>
    <div class="w-full">
        <label for="address" class="block text-sm font-medium text-gray-700">@lang('registration.address')</label>
        <input type="text" wire:model.lazy="address" id="address" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" placeholder="Address">
        <p class="text-xs text-red-500">@error('address') {{ $message }} @enderror</p>
    </div>
    <div class="w-full">
        <label for="aadhaar_number" class="block text-sm font-medium text-gray-700">@lang('registration.aadhaar_number')</label>
        <input type="text" wire:model.lazy="aadhaar_number" id="aadhaar_number" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" placeholder="Aadhaar Number">
        <p class="text-xs text-red-500">@error('aadhaar_number') {{ $message }} @enderror</p>
    </div>
    <div class="w-full">
        <label for="pancard_number" class="block text-sm font-medium text-gray-700">@lang('registration.pancard_number')</label>
        <input type="text" wire:model.lazy="pancard_number" id="pancard_number" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" placeholder="PAN Card Number">
        <p class="text-xs text-red-500">@error('pancard_number') {{ $message }} @enderror</p>
    </div>
    <div class="w-full">
        <label for="state" class="block text-sm font-medium text-gray-700">@lang('registration.state')</label>
        <input type="text" wire:model.lazy="state" id="state" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" placeholder="State">
        <p class="text-xs text-red-500">@error('state') {{ $message }} @enderror</p>
    </div>
    <div class="w-full">
        <label for="city" class="block text-sm font-medium text-gray-700">@lang('registration.city')</label>
        <input type="text" wire:model.lazy="city" id="city" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" placeholder="City">
        <p class="text-xs text-red-500">@error('city') {{ $message }} @enderror</p>
    </div>
    <div class="w-full">
        <label for="mobile_number" class="block text-sm font-medium text-gray-700">@lang('registration.mobile_number')</label>
        <input type="text" wire:model.lazy="mobile_number" id="mobile_number" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" placeholder="Mobile Number">
        <p class="text-xs text-red-500">@error('mobile_number') {{ $message }} @enderror</p>
    </div>
    <div class="w-full">
        <label for="email" class="block text-sm font-medium text-gray-700">@lang('registration.email')</label>
        <input type="email" wire:model.lazy="email" id="email" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" placeholder="Email">
        <p class="text-xs text-red-500">@error('email') {{ $message }} @enderror</p>
    </div>
    <div class="w-full">
        <label for="terms" class="flex items-center">
            <x-input id="terms" type="checkbox" wire:model="terms" class="mr-2" />
            <span class="text-sm text-gray-600">@lang('registration.terms_conditions')</span>
        </label>
        <p class="text-xs text-red-500">@error('terms') {{ $message }} @enderror</p>
    </div>
    <x-button type="submit" class="px-6 py-2 w-fit text-white bg-green-500 font-semibold text-lg"
        wire:loading.attr="disabled">
       @lang('registration.update_profile')
    </x-button>
    <span wire:loading wire:target="register">
        <div class="fixed top-0 left-0 w-full min-h-screen bg-gray-100/25 flex items-center justify-center">
            <svg class="svgcontainer" viewBox="0 0 40 40" height="40" width="40">
                <circle class="track" cx="20" cy="20" r="17.5" pathlength="100" stroke-width="5px"
                    fill="none" />
                <circle class="car" cx="20" cy="20" r="17.5" pathlength="100" stroke-width="5px"
                    fill="none" />
            </svg>




        </div>

    </span>
</form>
