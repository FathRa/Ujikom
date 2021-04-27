<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bayar SPP') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="w-1/3">
                        <form action="{{ route('payments.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-2">
                                <x-label for="spp_id" :value="__('SPP')" />
                                <select name="spp_id" id="spp_id"
                                    class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    @foreach ($spps as $item)
                                    <option value="{{ $item->id }}">{{ $item->tahun }} &middot;
                                        {{ number_format($item->nominal) }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-2">
                                <x-label for="months" :value="__('Bulan')" />
                                <select name="months[]" id="months" multiple class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                   @foreach ($months as $month)
                                        <option value="{{ $month->id }}">{{ $month->name }}</option>
                                   @endforeach
                                </select>
                            </div>

                            <x-input name="status" id="status" value="Pending" hidden />
                            <x-button>Next</x-button>
                        </form>

                        <script>
                            $(document).ready(function() {
                                $('#months').select2();
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>