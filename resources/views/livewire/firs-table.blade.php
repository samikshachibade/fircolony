<div class="overflow-x-auto relative shadow-md sm:rounded-lg w-full">
    <table class="w-full text-sm text-left text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200  ">
            <tr>
                <th scope="col" class="py-3 px-6">@lang('fir_table.complainant_name')</th>
                <th scope="col" class="py-3 px-6">@lang('fir_table.identity_proof')</th>
                <th scope="col" class="py-3 px-6">@lang('fir_table.contact_number')</th>
                <th scope="col" class="py-3 px-6">@lang('fir_table.incident_date')</th>
                <th scope="col" class="py-3 px-6">@lang('fir_table.accused_name')</th>
                <th scope="col" class="py-3 px-6">@lang('fir_table.incident_location')</th>
                <th scope="col" class="py-3 px-6">@lang('fir_table.incident_description')</th>
                <th scope="col" class="py-3 px-6">@lang('fir_table.amount')</th>
                <th scope="col" class="py-3 px-6">@lang('fir_table.receipt')</th>
                <th scope="col" class="py-3 px-6">@lang('fir_table.status')</th>
                <th scope="col" class="py-3 px-6">@lang('fir_table.action')</th>
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
                                @lang('fir_table.informing')</option>
                            <option value="registered" {{ $fir->current_status == 'registered' ? 'selected' : '' }}>
                                @lang('fir_table.registered')</option>
                            <option value="failed" {{ $fir->current_status == 'failed' ? 'selected' : '' }}>
                                @lang('fir_table.failed')
                            </option>
                            <option value="attended" {{ $fir->current_status == 'attended' ? 'selected' : '' }}>
                                @lang('fir_table.attended')</option>
                        </select>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
