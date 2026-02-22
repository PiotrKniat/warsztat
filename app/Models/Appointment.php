<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    // Pola, które możemy wypełniać formularzem
    protected $fillable = [
        'user_id',
        'service_id',
        'appointment_date',
        'status',
        'notes',
    ];

    // Rezerwacja należy do Użytkownika
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Rezerwacja dotyczy konkretnej Usługi
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}