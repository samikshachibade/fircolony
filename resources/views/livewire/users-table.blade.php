<div class="overflow-x-auto relative shadow-md sm:rounded-lg w-full">
    <table class="w-full text-sm text-left text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200">
            <tr>
                <th scope="col" class="py-3 px-6 cursor-pointer" wire:click="sortBy('name')">Name
                    <x-icon-sort sortField="{{ $sortField }}" field="name" sortAsc="{{ $sortAsc }}" />
                </th>
                <th scope="col" class="py-3 px-6">Email</th>
                <!-- Other fields as necessary -->
                <th scope="col" class="py-3 px-6">Mobile Number</th>
                <th scope="col" class="py-3 px-6">AadhaarCard Number</th>
                <th scope="col" class="py-3 px-6">Pancard Number</th>
                <th scope="col" class="py-3 px-6 cursor-pointer" wire:click="sortBy('state')">State
                    <x-icon-sort sortField="{{ $sortField }}" field="state" sortAsc="{{ $sortAsc }}" />
                </th>
                <th scope="col" class="py-3 px-6 cursor-pointer" wire:click="sortBy('city')">City
                    <x-icon-sort sortField="{{ $sortField }}" field="city" sortAsc="{{ $sortAsc }}" />
                </th>
                <th scope="col" class="py-3 px-6 cursor-pointer" wire:click="sortBy('created_at')">Registered Date
                    <x-icon-sort sortField="{{ $sortField }}" field="created_at" sortAsc="{{ $sortAsc }}" />
                </th>
                <!-- Add more columns as needed -->
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr class="bg-gray-100 border-b border-gray-700 hover:bg-gray-50">
                    <td class="py-4 px-6">{{ $user->name ?? '' }} {{ $user->father_name ?? '' }}
                        {{ $user->mother_name ?? '' }} {{ $user->surname ?? '' }}</td>
                    <td class="py-4 px-6">{{ $user->email }}</td>
                    <!-- Other fields -->
                    <td class="py-4 px-6">{{ $user->mobile_number }}</td>
                    <td class="py-4 px-6">{{ $user->aadhaar_number }}</td>
                    <td class="py-4 px-6">{{ $user->pancard_number }}</td>
                    <td class="py-4 px-6">{{ $user->state }}</td>
                    <td class="py-4 px-6">{{ $user->city }}</td>
                    <td class="py-4 px-6">{{ $user->created_at->format('m/d/Y') }}</td>
                    <!-- More data here -->
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="px-6 py-3">
        {{ $users->links() }}
    </div>
</div>
