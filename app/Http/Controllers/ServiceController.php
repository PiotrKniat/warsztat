<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Metoda wyświetlająca formularz
    public function create()
    {
        return view('services.create');
    }

    // Metoda zapisująca dane po kliknięciu "Zapisz"
    public function store(Request $request)
    {
        // Sprawdzamy, czy użytkownik wypełnił poprawnie wymagane pola
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'duration_minutes' => 'required|integer',
            'description' => 'nullable|string'
        ]);

        // Zapisujemy nową usługę do bazy danych używając naszego Modelu
        Service::create($request->all());

        // Po udanym zapisie, wracamy do panelu głównego
        return redirect()->route('dashboard');
    }
}