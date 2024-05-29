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
        Schema::create('autobuses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_linea');
            $table->unsignedBigInteger('id_piloto');
            $table->unsignedBigInteger('id_parqueo');
            $table->string('marca', 30);
            $table->string('modelo', 10);
            $table->string('placa', 20)->unique();
            $table->integer('capacidad_maxima')->nullable();
            $table->integer('tiempo_espera_adicional_minutos')->nullable();
            $table->timestamps();

            $table->foreign('id_linea')->references('id')->on('lineas')->onDelete('cascade');
            $table->foreign('id_piloto')->references('id')->on('pilotos')->onDelete('cascade');
            $table->foreign('id_parqueo')->references('id')->on('parqueos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autobuses');
    }
};
