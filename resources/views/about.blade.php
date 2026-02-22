<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            O naszym warsztacie
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8 md:p-10">
                <h3 class="text-3xl font-extrabold mb-6 text-gray-900 tracking-tight">Niezastąpiony sprzęt diagnostyczny i naprawczy</h3>
                <p class="text-gray-600 text-lg mb-6 text-justify leading-relaxed">
                    Doświadczenie, wiedza zdobywana od lat i umiejętności praktyczne to nie wszystko. We współczesnej motoryzacji nasi mechanicy muszą opierać się również na nowoczesnych urządzeniach. Nasz zakład wyposażony jest w profesjonalne podnośniki ułatwiające szybkie i precyzyjne naprawy. Nie brakuje u nas zaawansowanego sprzętu do ustawiania zbieżności i geometrii kół, na bieżąco aktualizowanych komputerów diagnostycznych oraz pełnej gamy specjalistycznych narzędzi ręcznych.
                </p>
                <p class="text-gray-600 text-lg mb-10 text-justify leading-relaxed">
                    W naszym warsztacie znajdują się również testery ciśnienia i napięcia, blokady rozrządu, nowoczesne smarownice, sprzęt blacharski oraz elementy niezbędne do obsługi układu hamulcowego. Dysponujemy najwyższej jakości smarami i chemią samochodową. Dbamy o to, by naprawione auto gwarantowało bezpieczne i komfortowe korzystanie.
                </p>

                <h3 class="text-3xl font-extrabold mb-6 text-gray-900 tracking-tight">Czym cechuje się dobry mechanik samochodowy?</h3>
                <p class="text-gray-600 text-lg mb-6 text-justify leading-relaxed">
                    Dobry mechanik to specjalista, który stale aktualizuje swoją wiedzę. Technologie stosowane w pojazdach dynamicznie się zmieniają, pojawiają się nowe rozwiązania zwiększające bezpieczeństwo i komfort. Dlatego regularnie się szkolimy, aby bez problemu wykonywać naprawy również najnowszych modeli samochodów.
                </p>
                <p class="text-gray-600 text-lg mb-10 text-justify leading-relaxed">
                    Działamy sprawnie – diagnozujemy usterki komputerowo, co pozwala ocenić stopień i charakter awarii, skracając czas poszukiwania problemu. Niezbędne części zamawiamy błyskawicznie, aby czas oczekiwania na gotowy samochód był jak najkrótszy.
                </p>

                <div class="bg-indigo-50 border-l-4 border-indigo-600 p-8 rounded-r-xl">
                    <h4 class="text-2xl font-bold text-indigo-900 mb-3">Zauważyłeś usterkę? Nie czekaj!</h4>
                    <p class="text-gray-700 text-lg mb-6">
                        Działamy na terenie Poznania. Zapraszamy do kontaktu wszystkich szukających solidnego mechanika. Jeśli słyszysz niepokojące dźwięki lub na desce rozdzielczej zapaliła się kontrolka silnika – nasz system rezerwacji czeka na Ciebie.
                    </p>
                    <a href="{{ url('/') }}" class="inline-flex items-center bg-indigo-600 text-white px-6 py-3 rounded-lg font-bold hover:bg-indigo-700 transition shadow-sm">
                        Przejdź do oferty i umów wizytę
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                    <h4 class="font-bold text-gray-900 mb-4 text-xl">Dane kontaktowe</h4>
                    <p class="mb-2 text-gray-600 text-lg">Telefon: <strong class="text-gray-900">123 456 789</strong></p>
                    <p class="mb-2 text-gray-600 text-lg">Email: <strong class="text-gray-900">kontakt@warsztat.test</strong></p>
                    <p class="mt-4 text-indigo-700 font-bold text-lg">📍 ul. Robocza 1, Poznań</p>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                    <h4 class="font-bold text-gray-900 mb-4 text-xl">Godziny otwarcia</h4>
                    <p class="mb-2 text-gray-600 text-lg">Poniedziałek - Piątek: <strong class="text-gray-900">08:00 - 16:00</strong></p>
                    <p class="mb-2 text-gray-400 text-lg">Sobota - Niedziela: <strong>Zamknięte</strong></p>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>