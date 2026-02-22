<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsMechanic
{
    public function handle(Request $request, Closure $next): Response
    {
        // Sprawdzamy, czy użytkownik jest zalogowany i czy jego rola to 'mechanic'
        if (auth()->check() && auth()->user()->role === 'mechanic') {
            return $next($request);
        }

        // W przeciwnym razie blokujemy dostęp i wyświetlamy komunikat
        abort(403, 'Brak dostępu. Tylko pracownik warsztatu może modyfikować usługi.');
    }
}