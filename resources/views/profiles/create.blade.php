<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('profiles.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                            <div class="grid grid-colss-3 w-full items-center grid-flow-col my-3 mx-3">
                                <div class="rounded-full self-center">
                                    @if (auth()->user()->profile)
                                    <img class="object-cover h-48 w-48 rounded-full"
                                        src="{{ asset('storage/'.auth()->user()->profile) }}" alt="">
        
                                    @else
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-40 w-40 text-gray-600" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    @endif
                                    <x-label for="profile" :value="__('Profile')" />
                                    <input type="file" name="profile" id="profile">
                                </div>
        
                                <div class="mx-3">
                                    <div class="mb-2">
                                        <x-label for="name" :value="__('Name')" />
                                        <x-input type="text" name="name" id="name" value="{{ auth()->user()->name }}" />
                                    </div>
        
                                    <div class="mb-2">
                                        <x-label for="nis" :value="__('NIS')" />
                                        <x-input type="text" name="nis" id="nis" value="{{ auth()->user()->nis }}" />
                                    </div>
                                </div>
        
                                <div class="mx-3">
                                    <div class="mb-2">
                                        <x-label for="phone" :value="__('Phone')" />
                                        <x-input type="text" name="phone" id="phone" value="{{ auth()->user()->phone }}" />
                                    </div>
                                    
                                    <div class="mb-2">
                                        <x-label for="kela" :value="__('Kelas')" />
                                        <x-input type="text" name="kela" id="kela" disabled value="{{ auth()->user()->kela->tingkat }} {{ auth()->user()->kela->jurusan }}" />
                                    </div>
                                </div>
        
                                <div class="mb-2">
                                    <x-label for="address" :value="__('Address')" />
                                    <textarea name="address" id="address" cols="25" rows="5"
                                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ auth()->user()->address }}</textarea>
                                </div>
                            </div>
                            
                            <x-button class="mb-5 float-right border-none">Save</x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>