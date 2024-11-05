<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EmergenciaRegistrada;

class EmergenciasRegistradasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            EmergenciaRegistrada::create([
                'rut_paciente' => '12345678-9', // RUT del paciente
                'id_codigo' => 1, // ID del código de emergencia
                'fecha_hora' => now()->subHours(1), // Fecha y hora de la emergencia
                'descripcion' => 'Paciente con dificultad respiratoria.', // Descripción de la emergencia
                'rut_atendido_por' => '21535478-9', // RUT del empleado que atendió
            ]);

            EmergenciaRegistrada::create([
                'rut_paciente' => '98765432-1', // RUT del paciente
                'id_codigo' => 2, // ID del código de emergencia
                'fecha_hora' => now()->subHours(2), // Fecha y hora de la emergencia
                'descripcion' => 'Accidente de tránsito con múltiples heridos.', // Descripción de la emergencia
                'rut_atendido_por' => '12345678-9', // RUT del empleado que atendió
            ]);

            EmergenciaRegistrada::create([
                'rut_paciente' => '21535478-9', // RUT del paciente
                'id_codigo' => 3, // ID del código de emergencia
                'fecha_hora' => now()->subHours(3), // Fecha y hora de la emergencia
                'descripcion' => 'Desmayo en la vía pública.', // Descripción de la emergencia
                'rut_atendido_por' => '98765432-1', // RUT del empleado que atendió
            ]);

            // Agrega más emergencias según sea necesario
        } catch (\Exception $e) {
            \Log::error('Error creando emergencia registrada: ' . $e->getMessage());
        }
    }
}
