<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentBooked;

class AppointmentController extends Controller
{
    // 1. WYŚWIETLANIE LISTY REZERWACJI
    public function index()
    {
        if (auth()->user()->role === 'mechanic') {
            // Mechanik widzi wszystkie wizyty z bazy
            $appointments = Appointment::with(['user', 'service'])->orderBy('appointment_date', 'desc')->get();
        } else {
            // Klient widzi tylko swoje własne wizyty
            $appointments = Appointment::with('service')->where('user_id', auth()->id())->orderBy('appointment_date', 'desc')->get();
        }

        return view('appointments.index', ['appointments' => $appointments]);
    }

    // 2. FORMULARZ TWORZENIA REZERWACJI
    public function create(Service $service)
    {
        return view('appointments.create', ['service' => $service]);
    }

    // 3. ZAPIS NOWEJ REZERWACJI
    public function store(Request $request, Service $service)
    {
        $request->validate([
            'appointment_date' => 'required|date|after:today',
            'notes' => 'nullable|string|max:500',
        ]);

        $appointment = Appointment::create([
            'user_id' => auth()->id(),
            'service_id' => $service->id,
            'appointment_date' => $request->appointment_date,
            'notes' => $request->notes,
            'status' => 'Oczekująca',
        ]);

        Mail::to(auth()->user()->email)->send(new AppointmentBooked($appointment));

        return redirect()->route('appointments.index');
    }

    // 4. ZMIANA STATUSU
    public function update(Request $request, Appointment $appointment)
    {
        // Upewniamy się, że tylko mechanik może to kliknąć
        if (auth()->user()->role !== 'mechanic') {
            abort(403);
        }

        $request->validate([
            'status' => 'required|string'
        ]);

        $appointment->update(['status' => $request->status]);

        return back();
    }
}