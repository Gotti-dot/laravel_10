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
        Schema::create('materias', function (Blueprint $table) {
    $table->id();
    $table->string('codigo_materia', 20)->unique();
    $table->string('nombre_materia', 100);
    $table->integer('total_horas');
    $table->integer('horas_teoria')->nullable();
    $table->integer('horas_practica')->nullable();
    $table->text('descripcion')->nullable();
    $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materias');
    }
};
