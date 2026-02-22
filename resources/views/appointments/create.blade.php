<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Rezerwacja: {{ $service->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <div class="mb-6 bg-indigo-50 p-4 rounded-lg border border-indigo-100 flex justify-between items-center">
                    <div>
                        <p class="text-sm text-gray-500 uppercase tracking-widest font-bold mb-1">Wybrana usługa</p>
                        <p class="text-xl font-bold text-indigo-900">{{ $service->name }}</p>
                    </div>
                    <div class="text-right">
                        <p class="font-black text-2xl text-gray-900">{{ number_format($service->price, 2) }} zł</p>
                        <p class="text-sm text-indigo-600 font-bold">⏱ Czas: {{ $service->duration_minutes }} min</p>
                    </div>
                </div>

                <form method="POST" action="{{ route('appointments.store', $service->id) }}">
                    @csrf

                    <div class="mb-6">
                        <x-input-label for="appointment_date" value="Wybierz datę i godzinę wizyty (Pn-Pt, 08:00 - 16:00)" />
                        <x-text-input id="appointment_date" class="block mt-1 w-full" type="datetime-local" name="appointment_date" :value="old('appointment_date')" required autofocus />
                        <x-input-error :messages="$errors->get('appointment_date')" class="mt-2" />
                    </div>

                    <div class="mb-6">
                        <x-input-label for="notes" value="Dodatkowe uwagi dla mechanika (opcjonalnie)" />
                        <textarea id="notes" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full h-32" name="notes">{{ old('notes') }}</textarea>
                        <x-input-error :messages="$errors->get('notes')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end border-t pt-4 mt-6">
                        <a href="{{ url('/') }}" class="text-gray-500 hover:text-gray-700 font-bold mr-4">Anuluj</a>
                        <x-primary-button class="bg-indigo-600 hover:bg-indigo-700">
                            Potwierdź rezerwację
                        </x-primary-button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>