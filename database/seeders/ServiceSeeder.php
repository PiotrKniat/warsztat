<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'name' => 'Wymiana klocków i tarcz hamulcowych',
                'description' => 'Kompleksowa wymiana elementów ciernych na jednej osi wraz z czyszczeniem jarzm i smarowaniem prowadnic.',
                'price' => 350.00,
                'duration_minutes' => 120,
            ],
            [
                'name' => 'Serwis i nabijanie klimatyzacji',
                'description' => 'Sprawdzenie szczelności układu, odessanie starego czynnika, nabicie nowego oraz uzupełnienie oleju w kompresorze.',
                'price' => 250.00,
                'duration_minutes' => 60,
            ],
            [
                'name' => 'Geometria i zbieżność kół',
                'description' => 'Komputerowe ustawienie geometrii zawieszenia 3D, zapobiegające nierównomiernemu zużyciu opon i poprawiające trakcję.',
                'price' => 150.00,
                'duration_minutes' => 45,
            ],
            [
                'name' => 'Wymiana paska rozrządu',
                'description' => 'Wymiana paska rozrządu wraz z pompą wody i rolkami napinającymi. Gwarancja bezawaryjnej pracy silnika.',
                'price' => 850.00,
                'duration_minutes' => 240,
            ],
            [
                'name' => 'Wymiana opon z wyważeniem',
                'description' => 'Sezonowa przekładka opon na felgach stalowych lub aluminiowych (do 18 cali) wraz z komputerowym wyważeniem kół.',
                'price' => 140.00,
                'duration_minutes' => 45,
            ],
            [
                'name' => 'Przegląd przedzakupowy',
                'description' => 'Kompleksowe sprawdzenie auta przed kupnem: podłączenie pod komputer, ścieżka diagnostyczna, miernik lakieru i oględziny na podnośniku.',
                'price' => 299.00,
                'duration_minutes' => 90,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}