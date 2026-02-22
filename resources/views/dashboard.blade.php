<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Panel Główny - Oferta Warsztatu
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if(auth()->user()->role === 'mechanic')
                <div class="mb-6">
                    <a href="{{ route('services.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                        + Dodaj nową usługę
                    </a>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-bold mb-6">Dostępne usługi:</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse ($services as $service)
                        <div class="border rounded-lg p-5 shadow-sm bg-gray-50 flex flex-col h-full">
                            <div class="flex-grow">
                                <h4 class="font-bold text-lg text-indigo-600 mb-2">{{ $service->name }}</h4>
                                <p class="text-sm text-gray-600">{{ $service->description ?? 'Brak opisu' }}</p>
                            </div>
                            
                            <div class="mt-4 pt-4 border-t border-gray-200">
                                <div class="flex justify-between items-center mb-4">
                                    <span class="font-bold text-gray-900">{{ number_format($service->price, 2) }} zł</span>
                                    <span class="text-xs font-medium text-gray-500 bg-gray-200 px-2 py-1 rounded">
                                        {{ $service->duration_minutes }} min
                                    </span>
                                </div>

                                @if(auth()->user()->role !== 'mechanic')
                                    <a href="{{ route('appointments.create', $service->id) }}" class="block w-full text-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 transition">
                                        Zarezerwuj wizytę
                                    </a>
                                @endif
                            </div>
                        </div>
                    @empty
                        <p class="text-gray-500 italic">Obecnie brak zdefiniowanych usług.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>