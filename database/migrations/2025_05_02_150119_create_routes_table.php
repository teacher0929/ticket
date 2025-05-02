<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transport_id')->constrained()->cascadeOnDelete();
            $table->foreignId('from_station_id')->constrained('stations', 'id')->cascadeOnDelete();
            $table->foreignId('to_station_id')->constrained('stations', 'id')->cascadeOnDelete();
            $table->string('code')->unique();
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->unsignedTinyInteger('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('routes');
    }
};
