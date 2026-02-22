<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Rezerwacja: {{ $service->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <div class="mb-6 bg-gray-50 p-4 rounded border">
                    <p><strong>Cena:</strong> {{ number_format($service->price, 2) }} zł</p>
                    <p><strong>Czas trwania:</strong> {{ $service->duration_minutes }} minut</p>
                </div>

                <form method="POST" action="{{ route('appointments.store', $service->id) }}">
                    @csrf

                    <div class="mb-4">
                        <x-input-label for="appointment_date" value="Wybierz datę i godzinę wizyty" />
                        <x-text-input id="appointment_date" class="block mt-1 w-full" type="datetime-local" name="appointment_date" required autofocus />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="notes" value="Dodatkowe uwagi dla mechanika (opcjonalnie)" />
                        <textarea id="notes" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" name="notes"></textarea>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button>
                            Potwierdź rezerwację
                        </x-primary-button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>