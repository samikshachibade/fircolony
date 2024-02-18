<div>
    <form wire:submit.prevent="submitFir" method="POST">
        <div class="grid grid-cols-3 gap-6">
            <div class="w-full">
                <label for="complainant_name" class="text-sm font-bold text-gray-600 block">@lang('fir.complainants_name')</label>
                <input type="text" id="complainant_name" name="complainant_name" wire:model="complainant_name"
                    class="w-full p-2 border border-gray-300 rounded mt-1" />
                <p class="text-red-500 text-xs">
                    @error('complainant_name')
                        {{ $message }}
                    @enderror
                </p>
            </div>

            <div class="w-full">
                <label for="identity_proofs" class="block text-sm font-medium text-gray-700">Identity Proof</label>
                <input type="file" id="identity_proofs" wire:model="identity_proofs"
                    class="w-full p-2 border border-gray-300 rounded mt-1" />

                <!-- Conditional UI for file selection and preparation state -->
                @if ($identity_proofs)
                    <div wire:loading.remove wire:target="uploadIdentityProof">
                        <button type="button" wire:click="uploadIdentityProof" wire:loading.attr="disabled"
                            class="mt-2 inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring focus:ring-blue-300 disabled:opacity-25 transition">
                            Upload
                        </button>
                    </div>
                @endif

                <!-- Preparing file for upload state -->
                <div wire:loading wire:target="identity_proofs" class="flex  items-center mt-2">
                    <div>
                        <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-gray-900" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                            </path>
                        </svg>
                    </div>
                    <p class="text-gray-600">Preparing file for upload...</p>
                </div>

                <!-- Uploading file state -->
                <div wire:loading wire:target="uploadIdentityProof" class="flex items-center mt-2">
                    <div>
                        <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-blue-600" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                            </path>
                        </svg>
                    </div>
                    <p class="text-blue-600">Uploading...</p>
                </div>

                @error('identity_proofs')
                <span x-data="{ show: true }" x-init="setTimeout(() => show = false, 2000)" x-show="show" class="text-red-500 text-sm">{{ $message }}. Try another proof</span>
            @enderror



            </div>


            <div class="w-full">
                <label for="contact_number" class="text-sm font-bold text-gray-600 block">@lang('fir.contact_number')</label>
                <input type="number" id="contact_number" name="contact_number" wire:model="contact_number"
                    class="w-full p-2 border border-gray-300 rounded mt-1" />
                <p class="text-red-500 text-xs">
                    @error('contact_number')
                        {{ $message }}
                    @enderror
                </p>
            </div>

            <div class="w-full">
                <label for="incident_date" class="text-sm font-bold text-gray-600 block">@lang('fir.date_of_incident')</label>
                <input type="date" id="incident_date" name="incident_date" wire:model="incident_date"
                    class="w-full p-2 border border-gray-300 rounded mt-1" />
                <p class="text-red-500 text-xs">
                    @error('incident_date')
                        {{ $message }}
                    @enderror
                </p>
            </div>



            <div class="w-full">
                <label for="accused_name" class="text-sm font-bold text-gray-600 block">@lang('fir.accused_persons_name')</label>
                <input type="text" id="accused_name" name="accused_name" wire:model="accused_name"
                    class="w-full p-2 border border-gray-300 rounded mt-1" />
                <p class="text-red-500 text-xs">
                    @error('accused_name')
                        {{ $message }}
                    @enderror
                </p>
            </div>

            <div class="w-full">
                <label for="incident_location" class="text-sm font-bold text-gray-600 block">@lang('fir.location_of_incident')</label>
                <input type="text" id="incident_location" name="incident_location" wire:model="incident_location"
                    class="w-full p-2 border border-gray-300 rounded mt-1" />
                <p class="text-red-500 text-xs">
                    @error('incident_location')
                        {{ $message }}
                    @enderror
                </p>
            </div>
        </div>
        <div class="w-full mt-6">
            <label for="incident_description" class="text-sm font-bold text-gray-600 block">@lang('fir.description_of_incident')</label>
            <textarea id="incident_description" name="incident_description" wire:model="incident_description"
                class="w-full p-2 border border-gray-300 rounded mt-1" rows="4"></textarea>
            <p class="text-red-500 text-xs">
                @error('incident_description')
                    {{ $message }}
                @enderror
            </p>
        </div>
        <div class="w-full">
            <p class="text-xs text-gray-600">
                @lang('fir.disclaimer')
            </p>
            <label for="terms" class="flex items-center my-2">
                <x-input id="terms" type="checkbox" wire:model="terms" class="mr-2" />
                <span class="text-sm text-gray-600">@lang('fir.acknowledgement')</span>
            </label>
            <p class="text-xs text-red-500">
                @error('terms')
                    {{ $message }}
                @enderror
            </p>
        </div>
        @if ($uploadedFiles)
            <div class="mt-4 border mb-4">
                <p class="text-lg font-medium mb-2 bg-gray-100 px-4 py-2">Files uploaded are</p>
                <div class="flex flex-col gap-1">
                    @foreach ($uploadedFiles as $file)
                        <p class="text-sm text-gray-600 py-3 px-4 odd:bg-white  even:bg-gray-100">{{ basename($file) }}</p>
                    @endforeach
                </div>
            </div>
        @endif


        <div class="flex items-center justify-between">
            <button type="submit"
                class="w-full py-2 px-4 bg-blue-600 hover:bg-blue-700 rounded-md text-white text-sm">@lang('fir.submit_fir')</button>
        </div>
        <span wire:loading wire:target="submitFir">
            <div class="fixed top-0 left-0 w-full min-h-screen bg-gray-400/25 flex items-center justify-center">
                <svg class="svgcontainer" viewBox="0 0 40 40" height="40" width="40">
                    <circle class="track" cx="20" cy="20" r="17.5" pathlength="100"
                        stroke-width="5px" fill="none" />
                    <circle class="car" cx="20" cy="20" r="17.5" pathlength="100"
                        stroke-width="5px" fill="none" />
                </svg>
            </div>

        </span>
    </form>
</div>
