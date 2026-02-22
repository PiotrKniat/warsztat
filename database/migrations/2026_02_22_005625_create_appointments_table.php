<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            // Kto zamawia
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            // Co zamawia
            $table->foreignId('service_id')->constrained()->onDelete('cascade');
            // Kiedy odbędzie się wizyta
            $table->dateTime('appointment_date');
            // Status wizyty
            $table->string('status')->default('pending');
            // Ewentualne dodatkowe uwagi od klienta
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
