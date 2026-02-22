<!DOCTYPE html>
<html>
<head>
    <title>Potwierdzenie rezerwacji</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <h1 style="color: #4f46e5;">Witaj, {{ $appointment->user->name }}!</h1>
    
    <p>Twoja wizyta w naszym warsztacie została pomyślnie zarejestrowana.</p>
    
    <div style="background-color: #f9f9f9; padding: 15px; border-radius: 5px; margin: 20px 0;">
        <p><strong>Usługa:</strong> {{ $appointment->service->name }}</p>
        <p><strong>Data:</strong> {{ \Carbon\Carbon::parse($appointment->appointment_date)->format('d.m.Y H:i') }}</p>
        <p><strong>Status:</strong> {{ $appointment->status }}</p>
    </div>
    
    <p>Dziękujemy za zaufanie!</p>
    <p>Zespół Warsztatu</p>
</body>
</html>