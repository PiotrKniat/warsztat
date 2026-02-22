<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            O naszym warsztacie
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-2xl font-bold mb-4 text-indigo-600">Witamy w naszym serwisie!</h3>
                <p class="text-gray-700 text-lg">
                    Jesteśmy profesjonalnym warsztatem samochodowym z wieloletnim doświadczeniem. 
                    Naprawiamy auta wszystkich marek, dbając o najwyższą jakość usług.
                </p>
                
                <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-gray-50 p-4 rounded-lg border">
                        <h4 class="font-bold text-gray-800 mb-2">Dane kontaktowe</h4>
                        <p>Telefon: <strong>123 456 789</strong></p>
                        <p>Email: <strong>kontakt@warsztat.test</strong></p>
                        <p>Adres: ul. Mechaniczna 1, Poznań</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg border">
                        <h4 class="font-bold text-gray-800 mb-2">Godziny otwarcia</h4>
                        <p>Poniedziałek - Piątek: <strong>08:00 - 18:00</strong></p>
                        <p>Sobota: <strong>09:00 - 14:00</strong></p>
                        <p>Niedziela: <strong>Zamknięte</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>