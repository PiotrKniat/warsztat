<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ auth()->user()->role === 'mechanic' ? 'Zarządzanie wizytami' : 'Moje wizyty' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                @if($appointments->isEmpty())
                    <p class="text-gray-500">Brak wizyt do wyświetlenia.</p>
                @else
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b-2 bg-gray-50">
                                <th class="p-3">Data wizyty</th>
                                <th class="p-3">Usługa</th>
                                @if(auth()->user()->role === 'mechanic')
                                    <th class="p-3">Klient</th>
                                @endif
                                <th class="p-3">Uwagi</th>
                                <th class="p-3">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($appointments as $appointment)
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="p-3 font-semibold">{{ \Carbon\Carbon::parse($appointment->appointment_date)->format('d.m.Y H:i') }}</td>
                                    <td class="p-3">{{ $appointment->service->name }}</td>
                                    
                                    @if(auth()->user()->role === 'mechanic')
                                        <td class="p-3">{{ $appointment->user->name }} ({{ $appointment->user->email }})</td>
                                    @endif
                                    
                                    <td class="p-3 text-sm text-gray-600">{{ $appointment->notes ?? '-' }}</td>
                                    <td class="p-3">
                                        @if(auth()->user()->role === 'mechanic')
                                            <form method="POST" action="{{ route('appointments.update', $appointment->id) }}" class="flex items-center space-x-2">
                                                @csrf
                                                @method('PATCH')
                                                <select name="status" class="border-gray-300 rounded-md shadow-sm text-sm">
                                                    <option value="Oczekująca" {{ $appointment->status === 'Oczekująca' ? 'selected' : '' }}>Oczekująca</option>
                                                    <option value="Zaakceptowana" {{ $appointment->status === 'Zaakceptowana' ? 'selected' : '' }}>Zaakceptowana</option>
                                                    <option value="Zakończona" {{ $appointment->status === 'Zakończona' ? 'selected' : '' }}>Zakończona</option>
                                                    <option value="Anulowana" {{ $appointment->status === 'Anulowana' ? 'selected' : '' }}>Anulowana</option>
                                                </select>
                                                <x-primary-button class="ml-2 text-xs py-1 px-2">Zapisz</x-primary-button>
                                            </form>
                                        @else
                                            <span class="px-2 py-1 bg-gray-200 rounded text-sm font-bold">{{ $appointment->status }}</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>