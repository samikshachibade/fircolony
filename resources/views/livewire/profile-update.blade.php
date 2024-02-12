
<form wire:submit.prevent="updateProfile" class="w-full grid grid-cols-4 items-center justify-center gap-5 mt-6">
    <div class="w-full">
        <label for="name" class="block text-sm font-medium text-gray-700">Your Name</label>
        <input type="text" wire:model="name" id="name" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" placeholder="Your Full Name">
        <p class="text-xs text-red-500">@error('name') {{ $message }} @enderror</p>
    </div>
    <div class="w-full">
        <label for="mother_name" class="block text-sm font-medium text-gray-700">Mother's Name</label>
        <input type="text" wire:model="mother_name" id="mother_name" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" placeholder="Mother's Name">
        <p class="text-xs text-red-500">@error('mother_name') {{ $message }} @enderror</p>
    </div>
    <div class="w-full">
        <label for="father_name" class="block text-sm font-medium text-gray-700">Father's Name</label>
        <input type="text" wire:model="father_name" id="father_name" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" placeholder="Father's Name">
        <p class="text-xs text-red-500">@error('father_name') {{ $message }} @enderror</p>
    </div>
    <div class="w-full">
        <label for="surname" class="block text-sm font-medium text-gray-700">Surname</label>
        <input type="text" wire:model="surname" id="surname" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" placeholder="Surname">
        <p class="text-xs text-red-500">@error('surname') {{ $message }} @enderror</p>
    </div>
    <div class="w-full">
        <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
        <input type="text" wire:model="address" id="address" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" placeholder="Address">
        <p class="text-xs text-red-500">@error('address') {{ $message }} @enderror</p>
    </div>
    <div class="w-full">
        <label for="aadhaar_number" class="block text-sm font-medium text-gray-700">Aadhaar Number</label>
        <input type="text" wire:model="aadhaar_number" id="aadhaar_number" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" placeholder="Aadhaar Number">
        <p class="text-xs text-red-500">@error('aadhaar_number') {{ $message }} @enderror</p>
    </div>
    <div class="w-full">
        <label for="pancard_number" class="block text-sm font-medium text-gray-700">PAN Card Number</label>
        <input type="text" wire:model="pancard_number" id="pancard_number" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" placeholder="PAN Card Number">
        <p class="text-xs text-red-500">@error('pancard_number') {{ $message }} @enderror</p>
    </div>
    <div class="w-full">
        <label for="state" class="block text-sm font-medium text-gray-700">State</label>
        <input type="text" wire:model="state" id="state" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" placeholder="State">
        <p class="text-xs text-red-500">@error('state') {{ $message }} @enderror</p>
    </div>
    <div class="w-full">
        <label for="city" class="block text-sm font-medium text-gray-700">City</label>
        <input type="text" wire:model="city" id="city" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" placeholder="City">
        <p class="text-xs text-red-500">@error('city') {{ $message }} @enderror</p>
    </div>
    <div class="w-full">
        <label for="mobile_number" class="block text-sm font-medium text-gray-700">Mobile Number</label>
        <input type="text" wire:model="mobile_number" id="mobile_number" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" placeholder="Mobile Number">
        <p class="text-xs text-red-500">@error('mobile_number') {{ $message }} @enderror</p>
    </div>
    <div class="w-full">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" wire:model="email" id="email" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" placeholder="Email">
        <p class="text-xs text-red-500">@error('email') {{ $message }} @enderror</p>
    </div>


    <x-button type="submit" class="px-6 py-2 w-fit text-white bg-green-500 font-semibold text-lg"
        wire:loading.attr="disabled">
        {{ __('Update Profile') }}
    </x-button>
    <span wire:loading wire:target="updateProfile">
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
