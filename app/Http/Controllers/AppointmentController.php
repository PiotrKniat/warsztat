<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentBooked;

class AppointmentController extends Controller
{
    public function index()
    {
        if (auth()->user()->role === 'mechanic') {
            $activeAppointments = Appointment::with(['user', 'service'])->where('status', '!=', 'Zakończona')->orderBy('appointment_date', 'asc')->get();
            $archivedAppointments = Appointment::with(['user', 'service'])->where('status', 'Zakończona')->orderBy('appointment_date', 'desc')->get();
        } else {
            $activeAppointments = Appointment::with('service')->where('user_id', auth()->id())->where('status', '!=', 'Zakończona')->orderBy('appointment_date', 'asc')->get();
            $archivedAppointments = Appointment::with('service')->where('user_id', auth()->id())->where('status', 'Zakończona')->orderBy('appointment_date', 'desc')->get();
        }

        return view('appointments.index', [
            'activeAppointments' => $activeAppointments,
            'archivedAppointments' => $archivedAppointments
        ]);
    }

    public function create(Service $service)
    {
        return view('appointments.create', ['service' => $service]);
    }

    public function store(Request $request, Service $service)
    {
        $request->validate([
            'appointment_date' => 'required|date|after:today',
            'notes' => 'nullable|string|max:500',
        ]);

        $date = \Carbon\Carbon::parse($request->appointment_date);

        if ($date->isWeekend()) {
            return back()->withErrors(['appointment_date' => 'Warsztat jest zamknięty w weekendy. Wybierz termin od poniedziałku do piątku.'])->withInput();
        }

        if ($date->hour < 8 || $date->hour >= 16) {
            return back()->withErrors(['appointment_date' => 'Wizyty można umawiać tylko w godzinach otwarcia (08:00 - 16:00).'])->withInput();
        }

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

    public function update(Request $request, Appointment $appointment)
    {
        if (auth()->user()->role !== 'mechanic') {
            abort(403);
        }

        $request->validate(['status' => 'required|string']);
        $appointment->update(['status' => $request->status]);

        return back();
    }

    public function destroy(Appointment $appointment)
    {
        if (auth()->user()->role !== 'mechanic') {
            abort(403);
        }

        $appointment->delete();
        return back();
    }
}