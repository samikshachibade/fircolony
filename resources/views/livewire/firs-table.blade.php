<div class="overflow-x-auto relative shadow-md sm:rounded-lg w-full">
    <table class="w-full text-sm text-left text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200  ">
            <tr>
                <th scope="col" class="py-3 px-6">Complainant Name</th>
                <th scope="col" class="py-3 px-6">Identity Proof</th>
                <th scope="col" class="py-3 px-6">Contact Number</th>
                <th scope="col" class="py-3 px-6">Incident Date</th>
                <th scope="col" class="py-3 px-6">Accused Name</th>
                <th scope="col" class="py-3 px-6">Incident Location</th>
                <th scope="col" class="py-3 px-6">Incident Description</th>
                <th scope="col" class="py-3 px-6">Amount</th>
                <th scope="col" class="py-3 px-6">Receipt</th>
                <th scope="col" class="py-3 px-6">Status</th>
                <th scope="col" class="py-3 px-6">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($firs as $fir)
                <tr class="bg-gray-100  border-b  border-gray-700 hover:bg-gray-50 ">
                    <td class="py-4 px-6">{{ $fir->complainant_name }}</td>
                    <td class="py-4 px-6">
                        <a href="{{ Storage::url($fir->identity_proof) }}" target="_blank"
                            class="text-blue-500 hover:underline">View Document</a>
                    </td>
                    <td class="py-4 px-6">{{ $fir->contact_number }}</td>
                    <td class="py-4 px-6">{{ $fir->incident_date }}</td>
                    <td class="py-4 px-6 text-red-500 font-semibold">{{ $fir->accused_name }}</td>
                    <td class="py-4 px-6">{{ $fir->incident_location }}</td>
                    <td class="py-4 px-6">{{ $fir->incident_description }}</td>
                    <td class="py-4 px-6">{{ $fir->amount }}</td>
                    <td class="py-4 px-6">{{ $fir->receipt }}</td>
                    <td class="py-4 px-6 text-green-400 font-semibold">{{ $fir->status }}</td>
                    <td class="py-4 px-6">
                        <select wire:change="updateFirStatus({{ $fir->id }}, $event.target.value)"
                            class="block w-full text-sm text-gray-900 bg-blue-100 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 ">
                            <option value="informing" {{ $fir->current_status == 'informing' ? 'selected' : '' }}>
                                Informing</option>
                            <option value="registered" {{ $fir->current_status == 'registered' ? 'selected' : '' }}>FIR
                                Registered</option>
                            <option value="failed" {{ $fir->current_status == 'failed' ? 'selected' : '' }}>Failed
                            </option>
                            <option value="attended" {{ $fir->current_status == 'attended' ? 'selected' : '' }}>
                                Attended Police Station</option>
                        </select>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
