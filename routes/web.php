<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AppointmentController;

Route::get('/', function () {
    $services = \App\Models\Service::all();
    return view('welcome', ['services' => $services]);
});

Route::view('/o-nas', 'about')->name('about');

Route::get('/dashboard', function () {
    if (auth()->user()->role === 'mechanic') {
        $services = \App\Models\Service::all();
        return view('dashboard', ['services' => $services]);
    }
    
    return redirect('/');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/services/create', [ServiceController::class, 'create'])
        ->name('services.create')
        ->middleware(\App\Http\Middleware\IsMechanic::class);
    Route::post('/services', [ServiceController::class, 'store'])
        ->name('services.store')
        ->middleware(\App\Http\Middleware\IsMechanic::class);
    Route::get('/services/{service}/book', [AppointmentController::class, 'create'])->name('appointments.create');
    Route::post('/services/{service}/book', [AppointmentController::class, 'store'])->name('appointments.store');
    Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
    Route::patch('/appointments/{appointment}', [AppointmentController::class, 'update'])->name('appointments.update');
    Route::delete('/appointments/{appointment}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');
});

require __DIR__.'/auth.php';
