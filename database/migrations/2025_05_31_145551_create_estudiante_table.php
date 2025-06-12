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
        Schema::create('estudiantes', function (Blueprint $table) {
    $table->id();
    $table->string('nombre', 100);
    $table->string('apellido', 100);
    $table->string('email')->unique();
    $table->string('telefono', 20)->nullable();
    $table->date('fecha_nacimiento')->nullable();
    $table->string('direccion', 255)->nullable();
    $table->enum('genero', ['Masculino', 'Femenino', 'Otro']);
    $table->enum('estado', ['Activo', 'Inactivo']);
    $table->timestamps();
    });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
