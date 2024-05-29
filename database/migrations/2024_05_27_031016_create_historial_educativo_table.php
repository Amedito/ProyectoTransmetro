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
        Schema::create('HistorialEducativo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_piloto');
            $table->string('nivel_educativo', 50);
            $table->string('institucion', 100);
            $table->date('año_graduacion');
            $table->timestamps();

            $table->foreign('id_piloto')->references('id_piloto')->on('Pilotos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_educativo');
    }
};
