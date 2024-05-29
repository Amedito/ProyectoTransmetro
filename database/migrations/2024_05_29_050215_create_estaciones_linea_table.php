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
        Schema::create('estaciones_linea', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_linea');
            $table->unsignedBigInteger('id_estacion');
            $table->integer('orden');
            $table->timestamps();

            $table->foreign('id_linea')->references('id')->on('lineas')->onDelete('cascade');
            $table->foreign('id_estacion')->references('id')->on('estaciones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estaciones_linea');
    }
};
