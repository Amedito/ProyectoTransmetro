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
        Schema::create('estaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_municipalidad');
            $table->unsignedBigInteger('id_operador');
            $table->unsignedBigInteger('id_guardia');
            $table->string('nombre', 50);
            $table->string('direccion', 100);
            $table->integer('capacidad_actual')->nullable();
            $table->string('alerta', 100)->nullable();
            $table->timestamps();

            $table->foreign('id_municipalidad')->references('id')->on('municipalidades')->onDelete('cascade');
            $table->foreign('id_operador')->references('id')->on('operadores')->onDelete('cascade');
            $table->foreign('id_guardia')->references('id')->on('guardias_seguridad')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estaciones');
    }
};
