@extends('layouts.frontend')
@section('frontend')
<div>
    @foreach ($laws as $division => $acts)
    <h3 class="mt-8 text-2xl font-semibold mb-3">{{ str_replace('_', ' ', $division) }}</h3>
    <div>
        <table class="min-w-full leading-normal border shadow-md">
            <thead>
                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-700 text-left text-xs font-semibold text-white uppercase w-24">SR-No</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-700 text-left text-xs font-semibold text-white uppercase w-3/4">Title</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-700 text-left text-xs font-semibold text-white uppercase ">Download/Link</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($acts as $act)
                    <tr class="odd:bg-white even:bg-gray-50">
                        <td class="px-5 py-5 border-b border-gray-200 text-sm">{{ $act['srNo'] }}</td>
                        <td class="px-5 py-5 border-b border-gray-200 text-sm">{{ $act['title'] }}</td>
                        <td class="text-white text-center w-60 px-5 py-5 border-b border-gray-200 text-sm">
                            <span class="bg-blue-500 px-5 py-3 w-60">
                                <a target="_blank" href="{{ $act['link'] }}">Download</a>
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endforeach

</div>

@endsection
