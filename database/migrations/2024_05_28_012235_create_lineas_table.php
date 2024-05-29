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
        Schema::create('lineas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_municipalidad');
            $table->string('nombre', 50);
            $table->integer('zona');
            $table->float('distancia_total_km');
            $table->timestamps();

            $table->foreign('id_municipalidad')->references('id')->on('municipalidades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lineas');
    }
};
