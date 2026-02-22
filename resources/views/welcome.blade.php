<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Witamy w naszym serwisie
        </h2>
    </x-slot>

    <div class="pt-12 pb-8 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-3xl p-8 lg:p-12 border border-gray-100">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="order-2 lg:order-1">
                        <span class="text-indigo-600 font-bold tracking-wider uppercase text-sm mb-4 block">Twój zaufany mechanik</span>
                        <h1 class="text-4xl lg:text-5xl font-extrabold text-gray-900 mb-6 tracking-tight leading-tight">
                            Kompleksowa mechanika na najwyższym poziomie
                        </h1>
                        <p class="text-lg text-gray-600 mb-6 text-justify leading-relaxed">
                            Dbamy o to, aby samochód pomimo awarii, po naprawie mógł przejechać kolejne dziesiątki tysięcy kilometrów. Oferujemy usługi profesjonalnej mechaniki samochodowej, serwisując pojazdy osobowe wszystkich marek.
                        </p>
                        
                        <div class="bg-gray-50 p-6 rounded-2xl border border-gray-200 inline-block">
                            <div class="flex items-center space-x-4 mb-3">
                                <div class="bg-indigo-100 p-2 rounded-lg">⏰</div>
                                <div>
                                    <p class="text-gray-900 font-bold">Poniedziałek - Piątek</p>
                                    <p class="text-indigo-600 font-black">8:00 - 16:00</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="bg-indigo-100 p-2 rounded-lg">📍</div>
                                <p class="text-gray-900 font-bold">ul. Robocza 1, Poznań</p>
                            </div>
                        </div>
                    </div>
                    <div class="order-1 lg:order-2 relative">
                        <img src="https://images.pexels.com/photos/2244746/pexels-photo-2244746.jpeg?auto=compress&cs=tinysrgb&w=1000" alt="Mechanik przy pracy" class="rounded-3xl shadow-2xl object-cover h-[400px] lg:h-[500px] w-full border-4 border-white">
                        <div class="absolute -bottom-6 -left-6 bg-white p-5 rounded-2xl shadow-xl border border-gray-100 hidden md:block">
                            <div class="flex items-center space-x-4">
                                <div class="bg-yellow-100 p-3 rounded-full text-2xl">⭐</div>
                                <div>
                                    <p class="text-xs text-gray-500 font-bold uppercase tracking-wider">Oceny klientów</p>
                                    <p class="text-2xl font-black text-gray-900">4.9<span class="text-gray-400 text-lg">/5.0</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-16 bg-white border-t border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="text-3xl font-extrabold text-gray-900 mb-4">Warsztat samochodowy z tradycjami</h2>
                <p class="text-lg text-gray-600 text-justify">
                    Nasz warsztat działa na rynku od 2012 roku. Zajmujemy się przede wszystkim mechaniką samochodową pojazdów wszystkich marek. Nasz zakład wyposażony jest w niezbędne, nowoczesne urządzenia, takie jak podnośnik czy tunel, nie brak także regularnie aktualizowanego komputera do diagnostyki. Staramy się sprowadzić części jak najszybciej, by niezwłocznie udostępnić pojazd jego właścicielowi.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center mt-12">
                <div class="p-6 bg-gray-50 rounded-2xl border border-gray-100 hover:shadow-lg transition">
                    <div class="text-4xl mb-4">⚙️</div>
                    <h3 class="font-bold text-xl text-gray-900 mb-2">Naprawa silników</h3>
                    <p class="text-gray-600 text-sm">Serwisujemy pojazdy, w których awarii uległa jednostka napędowa (benzyna, diesel, LPG).</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-2xl border border-gray-100 hover:shadow-lg transition">
                    <div class="text-4xl mb-4">🛑</div>
                    <h3 class="font-bold text-xl text-gray-900 mb-2">Układ hamulcowy</h3>
                    <p class="text-gray-600 text-sm">Dbamy o prawidłową pracę układów hamulcowych, wymianę klocków, tarcz i płynów.</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-2xl border border-gray-100 hover:shadow-lg transition">
                    <div class="text-4xl mb-4">💨</div>
                    <h3 class="font-bold text-xl text-gray-900 mb-2">Układ wydechowy</h3>
                    <p class="text-gray-600 text-sm">Naprawiamy i wymieniamy elementy układu wydechowego, dbając o normy emisji spalin.</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-2xl border border-gray-100 hover:shadow-lg transition">
                    <div class="text-4xl mb-4">🚗</div>
                    <h3 class="font-bold text-xl text-gray-900 mb-2">Układ zawieszenia</h3>
                    <p class="text-gray-600 text-sm">Diagnozujemy usterki zawieszenia zapewniając komfort i bezpieczeństwo na drodze.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1">
                    <h3 class="text-3xl font-extrabold text-indigo-900 mb-4">💻 Diagnostyka komputerowa</h3>
                    <p class="text-lg text-gray-600 text-justify">
                        Diagnostyka komputerowa pozwala nam szybciej i skuteczniej zlokalizować każdą usterkę samochodu. Nieprawidłowości w pojeździe pojawiają się na zewnętrznym laptopie podłączonym do systemu pokładowego. Na przykład, gdy awarii uległa elektronika, po kilku chwilach od podłączenia komputera, na ekranie pojawia się lista błędów, a my od razu wiemy, co wymaga wymiany.
                    </p>
                </div>
                <div class="order-1 lg:order-2">
                    <img src="{{ asset('images/diagnostyka-komputerowa.jpg') }}" alt="Diagnostyka komputerowa" class="rounded-2xl shadow-md w-full h-64 object-cover">
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="https://images.pexels.com/photos/3642618/pexels-photo-3642618.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Naprawy eksploatacyjne" class="rounded-2xl shadow-md w-full h-64 object-cover">
                </div>
                <div>
                    <h3 class="text-3xl font-extrabold text-indigo-900 mb-4">🔧 Naprawy eksploatacyjne</h3>
                    <p class="text-lg text-gray-600 text-justify">
                        Naprawy eksploatacyjne pozwalają regularnie serwisować pojazd w celu jego prawidłowej pracy przez długie lata. Auto w dobrym stanie technicznym, o które się dba, rzadziej ulega awarii. Proponujemy wymianę olejów i filtrów, klocków i tarcz hamulcowych, a nasza oferta obejmuje także między innymi wymianę rozrządu.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1">
                    <h3 class="text-3xl font-extrabold text-indigo-900 mb-4">❄️ Odgrzybianie klimatyzacji</h3>
                    <p class="text-lg text-gray-600 text-justify">
                        Odgrzybianie klimatyzacji to wpuszczenie do obiegu ozonu. Ten związek chemiczny zabija osadzone w kanałach grzyby, usuwa drobnoustroje, które zdążyły się namnożyć i niweluje przykre zapachy. Warto więc zadbać o to, aby klimatyzacja była regularnie poddawana temu zabiegowi dla Twojego zdrowia!
                    </p>
                </div>
                <div class="order-1 lg:order-2">
                    <img src="{{ asset('images/odgrzybianie-klimatyzacji-samochodowej.jpg') }}" alt="Odgrzybianie klimatyzacji" class="rounded-2xl shadow-md w-full h-64 object-cover">
                </div>
            </div>

        </div>
    </div>

    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-extrabold text-gray-900 mb-4">Cennik usług i rezerwacja</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-lg">Wybierz interesującą Cię usługę z naszej listy i zarezerwuj termin wygodnie przez Internet.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($services as $service)
                    <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 p-8 border border-gray-100 flex flex-col h-full transform hover:-translate-y-1">
                        <div class="flex-grow">
                            <h4 class="font-bold text-2xl text-indigo-900 mb-3">{{ $service->name }}</h4>
                            <p class="text-gray-600 leading-relaxed mb-6">{{ $service->description ?? 'Profesjonalna usługa wykonywana przy użyciu sprawdzonych części i narzędzi.' }}</p>
                        </div>
                        <div class="mt-6 pt-6 border-t border-gray-100 flex justify-between items-end">
                            <div class="flex flex-col">
                                <span class="text-xs text-gray-400 font-bold uppercase tracking-wider mb-1">Cena od</span>
                                <span class="font-black text-3xl text-gray-900">{{ number_format($service->price, 2) }} <span class="text-lg text-gray-500">zł</span></span>
                                <span class="text-xs text-indigo-500 font-bold mt-2 bg-indigo-50 inline-block px-2 py-1 rounded w-max">⏱ {{ $service->duration_minutes }} min</span>
                            </div>
                            @auth
                                <a href="{{ route('appointments.create', $service->id) }}" class="bg-indigo-600 text-white px-6 py-3 rounded-xl hover:bg-indigo-700 font-bold transition shadow-md hover:shadow-lg">Rezerwuj</a>
                            @else
                                <a href="{{ route('login') }}" class="bg-gray-100 text-gray-700 px-6 py-3 rounded-xl hover:bg-gray-200 font-bold transition">Zaloguj się</a>
                            @endauth
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>