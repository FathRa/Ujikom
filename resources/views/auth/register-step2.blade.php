<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register-step2') }}">
            @csrf

            <!-- Address -->
            <div>
                <x-label for="address" :value="__('Address')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required
                    autofocus />
            </div>

            <!-- Phone -->
            <div class="mt-4">
                <x-label for="phone" :value="__('Phone')" />

                <x-input id="phone" class="block mt-1 w-full" type="number" name="phone" :value="old('phone')"
                    required />
            </div>

            <!-- Kelas -->
            <div class="mt-4">
                <x-label for="kelas_id" :value="__('Class')" />

                <select name="kelas_id" id="kelas_id"
                    class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <option value="#">Select Class</option>
                    @foreach ($kelas as $item)
                    <option value="{{ $item->id }}">{{ $item->tingkat }} &middot; {{ $item->jurusan }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-2 flex flex-row-reverse justify-between">
                <x-button class="flex justify-between ml-4 ">
                    {{ __('Finish') }}
                </x-button>

        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-button :href="route('logout')" onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log out') }}
            </x-button>
        </form>
        </div>
    </x-auth-card>
</x-guest-layout>