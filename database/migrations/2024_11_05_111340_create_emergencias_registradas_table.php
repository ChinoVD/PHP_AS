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
        Schema::create('emergencias_registradas', function (Blueprint $table) {
            $table->id('id_emergencia'); // Clave primaria para la tabla de emergencias registradas
            $table->string('rut_paciente'); // RUT del paciente como cadena
            $table->unsignedBigInteger('id_codigo'); // ID del código de emergencia
            $table->timestamp('fecha_hora'); // Fecha y hora de la emergencia
            $table->text('descripcion')->nullable(); // Descripción de la emergencia
            $table->string('rut_atendido_por'); // RUT del empleado que atendió la emergencia
            $table->foreign('rut_paciente')->references('rut')->on('pacientes'); // Referencia al RUT en la tabla pacientes
            $table->foreign('id_codigo')->references('id_codigo')->on('codigos_emergencia'); // Referencia al código de emergencia
            $table->foreign('rut_atendido_por')->references('rut')->on('empleados'); // Referencia al RUT en la tabla empleados
            $table->timestamps(); // Campos de timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emergencias_registradas');
    }
};
