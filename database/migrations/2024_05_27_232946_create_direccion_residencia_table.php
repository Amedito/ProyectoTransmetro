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
        Schema::create('direccion_residencia', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_piloto');
            $table->string('direccion', 100);
            $table->string('ciudad', 50);
            $table->string('codigo_postal', 10);
            $table->timestamps();

            $table->foreign('id_piloto')->references('id')->on('pilotos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direccion_residencia');
    }
};
