# Projekt zaliczeniowy - System rezerwacji warsztatu samochodowego

Projekt to aplikacja internetowa dla warsztatu samochodowego, stworzona w oparciu o framework Laravel. Umożliwia przeglądanie oferty oraz rezerwację terminów przez klientów, a także zarządzanie wizytami ze strony pracownika warsztatu.

## Główne funkcjonalności

- System ról użytkowników (Klient oraz Mechanik).
- Rejestracja i logowanie.
- Widok cennika usług pobierany z bazy danych.
- Formularz rezerwacji wizyty z walidacją daty i czasu (rezerwacje możliwe tylko w dni robocze, w godzinach 8:00 - 16:00).
- Panel klienta do podglądu statusu własnych rezerwacji.
- Panel mechanika do zarządzania statusem wizyt (oczekująca, zaakceptowana, zakończona).
- Mechanizm archiwizacji: zakończone wizyty trafiają do osobnej tabeli, z możliwością ich przywrócenia w razie pomyłki.

## Instrukcja uruchomienia

Wymagania: PHP, Composer, Node.js oraz baza danych SQLite.

1. Pobierz repozytorium na swój komputer.
2. W głównym katalogu projektu uruchom terminal i zainstaluj zależności:
   composer install
   npm install
   npm run build

3. Utwórz plik konfiguracyjny (lub skopiuj z przykładu):
   cp .env.example .env

4. Wygeneruj klucz aplikacji:
   php artisan key:generate

5. Baza danych SQLite wraz z usługami i kontem testowym jest udostępniona w repozytorium (plik database/database.sqlite). W razie konieczności wyczyszczenia bazy i wgrania usług na nowo, można użyć przygotowanego seedera:
   php artisan migrate:fresh --seed

6. Uruchom serwer lokalny:
   php artisan serve

## Dane testowe

Konto z uprawnieniami mechanika (dostęp do zarządzania wizytami):
- Email: mechanik@warsztat.test
- Hasło: q1w2e3r4

Aby przetestować widok i uprawnienia zwykłego użytkownika, najlepiej użyć wbudowanej rejestracji i założyć nowe konto klienta.