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
        Schema::create('carreras', function (Blueprint $table) {
    $table->id();
    $table->string('nombre_carrera', 100);
    $table->string('codigo_carrera', 20)->unique();
    $table->integer('duracion_semestres');
    $table->text('descripcion')->nullable();
    $table->date('fecha_creacion')->nullable();
    $table->boolean('activa')->default(true);
    $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carreras');
    }
};
