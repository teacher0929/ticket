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
        Schema::create('transport_seats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transport_id')->constrained()->cascadeOnDelete();
            $table->foreignId('seat_class_id')->constrained()->cascadeOnDelete();
            $table->string('seat_number');
            $table->double('price')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transport_seats');
    }
};
