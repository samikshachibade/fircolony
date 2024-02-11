<div>
    <form wire:submit.prevent="submitFir" method="POST">
        <div class="grid grid-cols-3 gap-6">
            <div class="w-full">
                <label for="complainant_name" class="text-sm font-bold text-gray-600 block">Complainant's
                    Name</label>
                <input type="text" id="complainant_name" name="complainant_name" wire:model="complainant_name"
                    class="w-full p-2 border border-gray-300 rounded mt-1" />
                <p class="text-red-500 text-xs">
                    @error('complainant_name')
                        {{ $message }}
                    @enderror
                </p>
            </div>

            <div class="w-full">
                <label for="identity_proof" class="text-sm font-bold text-gray-600 block">Identity
                    Proof</label>
                <input type="file" id="identity_proof" name="identity_proof" wire:model.lazy="identity_proof"
                    class="w-full p-2 border border-gray-300 rounded mt-1" />
                <p class="text-red-500 text-xs">
                    @error('identity_proof')
                        {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="w-full">
                <label for="contact_number" class="text-sm font-bold text-gray-600 block">Contact
                    Number</label>
                <input type="number" id="contact_number" name="contact_number" wire:model="contact_number"
                    class="w-full p-2 border border-gray-300 rounded mt-1" />
                <p class="text-red-500 text-xs">
                    @error('contact_number')
                        {{ $message }}
                    @enderror
                </p>
            </div>

            <div class="w-full">
                <label for="incident_date" class="text-sm font-bold text-gray-600 block">Date of
                    Incident</label>
                <input type="date" id="incident_date" name="incident_date" wire:model="incident_date"
                    class="w-full p-2 border border-gray-300 rounded mt-1" />
                <p class="text-red-500 text-xs">
                    @error('incident_date')
                        {{ $message }}
                    @enderror
                </p>
            </div>



            <div class="w-full">
                <label for="accused_name" class="text-sm font-bold text-gray-600 block">Accused Person's
                    Name (if known)</label>
                <input type="text" id="accused_name" name="accused_name" wire:model="accused_name"
                    class="w-full p-2 border border-gray-300 rounded mt-1" />
                <p class="text-red-500 text-xs">
                    @error('accused_name')
                        {{ $message }}
                    @enderror
                </p>
            </div>

            <div class="w-full">
                <label for="incident_location" class="text-sm font-bold text-gray-600 block">Location of
                    Incident</label>
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
            <label for="incident_description" class="text-sm font-bold text-gray-600 block">Description of
                Incident</label>
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
                By submitting this form for the registration of a First Information Report (FIR), you affirm that all
                information provided is accurate and truthful to the best of your knowledge. Please be advised that
                submitting false information, making misleading statements, or any deliberate attempt to misinform
                within this FIR registration can lead to severe legal consequences.
                <br><br>
                In accordance with [applicable laws/regulations], individuals found to have provided false information
                intentionally may be subject to imprisonment for a term of up to 5 years and/or a fine of up to Rs
                10,000.
                <br><br>
                It is imperative that you review all provided information carefully before submission to ensure its
                accuracy and completeness. Your cooperation in maintaining the integrity of the FIR registration process
                is greatly appreciated.
            </p>
            <label for="terms" class="flex items-center my-2">
                <x-input id="terms" type="checkbox" wire:model="terms" class="mr-2" />
                <span class="text-sm text-gray-600">I acknowledge that I have read and understood the above disclaimer
                    and agree to its terms.</span>
            </label>
            <p class="text-xs text-red-500">
                @error('terms')
                    {{ $message }}
                @enderror
            </p>
        </div>

        <div class="flex items-center justify-between">
            <button type="submit"
                class="w-full py-2 px-4 bg-blue-600 hover:bg-blue-700 rounded-md text-white text-sm">Submit
                FIR</button>
        </div>
        <span wire:loading wire:target="submitFir">
            <div class="fixed top-0 left-0 w-full min-h-screen bg-gray-400/25 flex items-center justify-center">
                <svg class="svgcontainer" viewBox="0 0 40 40" height="40" width="40">
                    <circle class="track" cx="20" cy="20" r="17.5" pathlength="100" stroke-width="5px"
                        fill="none" />
                    <circle class="car" cx="20" cy="20" r="17.5" pathlength="100" stroke-width="5px"
                        fill="none" />
                </svg>
            </div>

        </span>
    </form>
</div>
