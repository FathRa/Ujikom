<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Payment') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="w-full table-auto text-center p-20">
                        <thead class="py-3 bg-gray-400 p-2">
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="px-4 py-2">#</th>
                                <th class="md:hidded">Admin</th>
                                <th>User</th>
                                <th>SPP</th>
                                <th>Bulan</th>
                                <th>Total</th>
                                <th>Bukti</th>
                                <th>Status</th>
                                <th>Waktu</th>
                                @if (auth()->user()->isAdmin() || auth()->user()->isPetugas())
                                <th>Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody class="text-sm font-light text-gray-600">
                            @forelse ($payments as $key => $item)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="px-4 py-2">{{ $payments->firstItem() + $key }}</td>
                                <td>@if ($item->admin_id)
                                    {{ $item->admin->name }}
                                    @endif</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ number_format($item->spp->nominal) }}</td>
                                <td>{{ $item->months()->get()->implode('name', ', ') }}</td>
                                <td>{{ number_format($item->total) }}</td>
                                <td class="flex justify-center">
                                    @if ($item->bukti)
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-700" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>

                                    @else
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-700" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                    @endif</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->created_at->format('d M Y, H:m') }}</td>
                                <td>

                                    <div class="flex items-center justify-center">
                                        @if (auth()->user()->isAdmin() || auth()->user()->isPetugas())
                                        <div class="w-5 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <a href="{{ route('payments.show',$item->id) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </a>
                                        </div>
                                        @endif

                                        @if (auth()->user()->isAdmin())
                                        <form action="{{ route('payments.destroy',$item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">
                                                <svg class="w-5 mr-2 transform hover:text-purple-500 hover:scale-110"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <div class="p-2 bg-red-500 text-white rounded-sm mb-2">
                                Tidak ada Data
                            </div>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="mt-2">
                        {{ $payments->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>