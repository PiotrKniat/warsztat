<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ auth()->user()->role === 'mechanic' ? 'Zarządzanie wizytami' : 'Moje wizyty' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-t-4 border-indigo-500">
                <h3 class="text-xl font-bold mb-4 text-indigo-700">Aktywne wizyty</h3>

                @if($activeAppointments->isEmpty())
                    <p class="text-gray-500 italic">Brak aktywnych wizyt do wyświetlenia.</p>
                @else
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b-2 bg-gray-50">
                                <th class="p-3">Data wizyty</th>
                                <th class="p-3">Usługa</th>
                                @if(auth()->user()->role === 'mechanic') <th class="p-3">Klient</th> @endif
                                <th class="p-3">Uwagi</th>
                                <th class="p-3">Status i Akcje</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($activeAppointments as $appointment)
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="p-3 font-semibold">{{ \Carbon\Carbon::parse($appointment->appointment_date)->format('d.m.Y H:i') }}</td>
                                    <td class="p-3">{{ $appointment->service->name }}</td>
                                    @if(auth()->user()->role === 'mechanic')
                                        <td class="p-3">{{ $appointment->user->name }}<br><span class="text-xs text-gray-500">{{ $appointment->user->email }}</span></td>
                                    @endif
                                    <td class="p-3 text-sm text-gray-600">{{ $appointment->notes ?? '-' }}</td>
                                    <td class="p-3 flex items-center space-x-2">
                                        @if(auth()->user()->role === 'mechanic')
                                            <form method="POST" action="{{ route('appointments.update', $appointment->id) }}" class="flex items-center space-x-2">
                                                @csrf
                                                @method('PATCH')
                                                <select name="status" class="border-gray-300 rounded-md shadow-sm text-sm py-1">
                                                    <option value="Oczekująca" {{ $appointment->status === 'Oczekująca' ? 'selected' : '' }}>Oczekująca</option>
                                                    <option value="Zaakceptowana" {{ $appointment->status === 'Zaakceptowana' ? 'selected' : '' }}>Zaakceptowana</option>
                                                    <option value="Zakończona" {{ $appointment->status === 'Zakończona' ? 'selected' : '' }}>Zakończona</option>
                                                </select>
                                                <button type="submit" class="bg-gray-800 text-white px-3 py-1.5 rounded text-xs font-bold hover:bg-gray-700">Zapisz</button>
                                            </form>
                                            <form method="POST" action="{{ route('appointments.destroy', $appointment->id) }}" onsubmit="return confirm('Czy na pewno chcesz BEZPOWROTNIE usunąć tę wizytę?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-600 text-white px-3 py-1.5 rounded text-xs font-bold hover:bg-red-700">Usuń</button>
                                            </form>
                                        @else
                                            <span class="px-2 py-1 bg-indigo-100 text-indigo-800 rounded text-sm font-bold">{{ $appointment->status }}</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>

            <div class="bg-gray-50 overflow-hidden shadow-sm sm:rounded-lg p-6 border border-gray-200">
                <h3 class="text-xl font-bold mb-4 text-gray-600">Archiwum wizyt (Zakończone)</h3>

                @if($archivedAppointments->isEmpty())
                    <p class="text-gray-500 italic">Brak zakończonych wizyt w archiwum.</p>
                @else
                    <table class="w-full text-left border-collapse opacity-75 hover:opacity-100 transition-opacity">
                        <thead>
                            <tr class="border-b-2 border-gray-200">
                                <th class="p-3">Data wizyty</th>
                                <th class="p-3">Usługa</th>
                                @if(auth()->user()->role === 'mechanic') <th class="p-3">Klient</th> @endif
                                <th class="p-3">Uwagi</th>
                                <th class="p-3">Status i Akcje</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($archivedAppointments as $appointment)
                                <tr class="border-b border-gray-200">
                                    <td class="p-3 font-semibold">{{ \Carbon\Carbon::parse($appointment->appointment_date)->format('d.m.Y H:i') }}</td>
                                    <td class="p-3">{{ $appointment->service->name }}</td>
                                    @if(auth()->user()->role === 'mechanic')
                                        <td class="p-3">{{ $appointment->user->name }}</td>
                                    @endif
                                    <td class="p-3 text-sm text-gray-500">{{ $appointment->notes ?? '-' }}</td>
                                    <td class="p-3 flex items-center space-x-2">
                                        @if(auth()->user()->role === 'mechanic')
                                            <form method="POST" action="{{ route('appointments.update', $appointment->id) }}" class="flex items-center space-x-2" onsubmit="return confirm('Czy na pewno chcesz przywrócić tę wizytę do aktywnych?');">
                                                @csrf
                                                @method('PATCH')
                                                <select name="status" class="border-gray-300 rounded-md shadow-sm text-sm py-1 bg-gray-100" onchange="
                                                    let btn = this.form.querySelector('button[type=submit]');
                                                    if(this.value === 'Zakończona') {
                                                        btn.disabled = true;
                                                        btn.classList.add('opacity-50', 'cursor-not-allowed');
                                                    } else {
                                                        btn.disabled = false;
                                                        btn.classList.remove('opacity-50', 'cursor-not-allowed');
                                                    }
                                                ">
                                                    <option value="Zakończona" selected>Zakończona</option>
                                                    <option value="Zaakceptowana">Przywróć (Zaakceptowana)</option>
                                                </select>
                                                <button type="submit" disabled class="bg-gray-600 text-white px-3 py-1.5 rounded text-xs font-bold hover:bg-gray-800 opacity-50 cursor-not-allowed transition-all">Zmień</button>
                                            </form>
                                            <form method="POST" action="{{ route('appointments.destroy', $appointment->id) }}" onsubmit="return confirm('Czy usunąć ten wpis z archiwum?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:text-red-700 font-bold text-xs underline ml-2">Usuń wpis</button>
                                            </form>
                                        @else
                                            <span class="px-2 py-1 bg-gray-200 text-gray-600 rounded text-sm font-bold">{{ $appointment->status }}</span>
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