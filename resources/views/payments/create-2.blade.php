<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Bayar SPP") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('payments.store-2',$payments->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        {{ $payments->total }}
                        <div class="mb-2">
                            <x-label for="bukti" :value="__('Bukti')" />
                            <x-input type="file" id="bukti" name="bukti"/>

                            <input type="text" name="status" id="status" value="Pending" hidden>
                        </div>

                        <x-button>Submit</x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>