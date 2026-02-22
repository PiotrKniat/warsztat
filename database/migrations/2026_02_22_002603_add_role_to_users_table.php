<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Uruchomienie migracji (dodanie kolumny).
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Dodajemy kolumnę 'role' po kolumnie 'email'
            // Domyślną wartością dla każdego nowego konta będzie 'client'
            $table->string('role')->default('client')->after('email');
        });
    }

    /**
     * Cofnięcie migracji (usunięcie kolumny).
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
        });
    }
};