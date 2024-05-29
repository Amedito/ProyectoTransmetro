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
        Schema::create('municipalidades', function (Blueprint $table) {
            $table->id();
            $table->string('departamento', 50);
            $table->string('municipio', 50);
            $table->timestamps();
            $table->unique(['departamento', 'municipio']); // Definimos la clave única compuesta
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('municipalidades');
    }
};
