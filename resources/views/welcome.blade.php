<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Poznaj nasz profesjonalny serwis
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 mb-10">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h1 class="text-4xl font-extrabold text-gray-900 mb-6 tracking-tight leading-tight">
                            Pasja, precyzja i lata doświadczenia w każdym detalu
                        </h1>
                        <p class="text-lg text-gray-600 mb-4 text-justify">
                            Nasz warsztat to nie tylko miejsce napraw, to przestrzeń stworzona z miłości do motoryzacji. Od ponad dekady dbamy o to, aby każdy pojazd opuszczający nasze bramy był w perfekcyjnym stanie technicznym. Rozumiemy, że Twój samochód to nie tylko środek transportu, ale często kluczowy element codziennego życia i bezpieczeństwa Twojej rodziny.
                        </p>
                        <p class="text-lg text-gray-600 text-justify">
                            Stawiamy na transparentność i nowoczesne technologie. Jako jeden z niewielu serwisów w regionie, oferujemy w pełni cyfrowy system rezerwacji, dzięki któremu masz pełną kontrolę nad terminami i historią napraw swojego auta.
                        </p>
                    </div>
                    <div class="bg-indigo-50 p-8 rounded-2xl border border-indigo-100">
                        <h3 class="text-2xl font-bold text-indigo-700 mb-4">Dlaczego my?</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <span class="text-indigo-600 mr-2">✔</span>
                                <span class="text-gray-700"><strong>Certyfikowani specjaliści</strong> – nasz zespół regularnie przechodzi szkolenia u czołowych producentów części.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-indigo-600 mr-2">✔</span>
                                <span class="text-gray-700"><strong>Nowoczesna diagnostyka</strong> – korzystamy z najnowszych komputerów diagnostycznych, co skraca czas szukania usterki.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-indigo-600 mr-2">✔</span>
                                <span class="text-gray-700"><strong>Gwarancja jakości</strong> – na każdą wykonaną usługę i zamontowaną część udzielamy pisemnej gwarancji.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16 text-center">
                <div class="p-6">
                    <div class="text-indigo-600 text-3xl mb-4 font-bold">1. Rezerwacja</div>
                    <p class="text-gray-600">Wybierasz usługę z naszej dynamicznej listy i rezerwujesz termin jednym kliknięciem.</p>
                </div>
                <div class="p-6">
                    <div class="text-indigo-600 text-3xl mb-4 font-bold">2. Diagnostyka</div>
                    <p class="text-gray-600">Przyjeżdżasz do nas, a my wykonujemy darmowy przegląd wstępny przed naprawą.</p>
                </div>
                <div class="p-6">
                    <div class="text-indigo-600 text-3xl mb-4 font-bold">3. Naprawa</div>
                    <p class="text-gray-600">Twój samochód trafia w ręce ekspertów, a Ty otrzymujesz powiadomienie o statusie.</p>
                </div>
            </div>

            <div class="border-t border-gray-200 pt-12">
                <h2 class="text-3xl font-bold mb-10 text-center text-gray-800">Aktualny cennik i rezerwacja online</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($services as $service)
                        <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 p-8 border border-gray-100 flex flex-col h-full">
                            <div class="flex-grow">
                                <h4 class="font-bold text-2xl text-indigo-600 mb-3">{{ $service->name }}</h4>
                                <p class="text-gray-600 leading-relaxed mb-6">{{ $service->description ?? 'Profesjonalna usługa wykonywana przy użyciu atestowanych części i narzędzi najwyższej klasy.' }}</p>
                            </div>
                            <div class="mt-6 pt-6 border-t border-gray-50 flex justify-between items-center">
                                <div class="flex flex-col">
                                    <span class="font-black text-2xl text-gray-900">{{ number_format($service->price, 2) }} zł</span>
                                    <span class="text-xs text-gray-500 font-medium italic">Czas: {{ $service->duration_minutes }} min</span>
                                </div>
                                @auth
                                    <a href="{{ route('appointments.create', $service->id) }}" class="bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 font-bold transition">Zarezerwuj</a>
                                @else
                                    <a href="{{ route('login') }}" class="bg-gray-100 text-gray-700 px-6 py-3 rounded-lg hover:bg-gray-200 font-bold transition">Zaloguj się</a>
                                @endauth
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</x-app-layout>