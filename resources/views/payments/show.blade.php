<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Show Payment ID: $payment->id") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="w-5/6 flex justify-between">
                        
                        <div class="h-48 mr-2">
                            <img class="mr-5 object-fit w-full" src="{{ asset('storage/'. $payment->bukti) }}" alt="bukti">
                        </div>

                        
                        <form action="{{ route('payments.update',$payment->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="grid-cols-auto">
                                <div class="mb-2">
                                    <x-label for="user_id" :value="__('Name')"/>
                                    <x-input class="w-full" type="text" id="user_id" value="{{ old('user_id') ?? $payment->user->name}}" />
                                </div>
        
                                <div>
                                    <x-label for="spp_id" :value="__('SPP')"/>
                                    <x-input type="text" id="spp_id" value="{{ old('spp_id') ?? $payment->spp->nominal }}"/>
                                </div>
    
                                <div>
                                    <x-label for="total">Total</x-label>
                                    <x-input type="text" id="total" value="{{ old('total') ?? $payment->total}}"/>
                                </div>
    
                                <x-label for="status" :value="__('Status')"/>
                                <select name="status" id="status" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    <option value="Approve">Approve</option>
                                    <option value="Decline">Decline</option>
                                    <option value="Pending">Pending</option>
                                </select>
                            </div>

                            <div class="mt-2">
                                <x-button>
                                    {{ __('Update') }}
                                </x-button>
                            </div>
                        </form>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>