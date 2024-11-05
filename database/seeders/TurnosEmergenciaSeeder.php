<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TurnoEmergencia;

class TurnosEmergenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            TurnoEmergencia::create([
                'rut_empleado' => '12345678-9', // RUT del empleado
                'fecha' => now()->subDays(1), // Fecha del turno
                'hora_inicio' => '08:00:00', // Hora de inicio
                'hora_fin' => '16:00:00', // Hora de fin
                'estado' => 'Activo', // Estado del turno
            ]);

            TurnoEmergencia::create([
                'rut_empleado' => '98765432-1', // RUT del empleado
                'fecha' => now(), // Fecha del turno
                'hora_inicio' => '16:00:00', // Hora de inicio
                'hora_fin' => '00:00:00', // Hora de fin
                'estado' => 'Activo', // Estado del turno
            ]);

            TurnoEmergencia::create([
                'rut_empleado' => '21535478-9', // RUT del empleado
                'fecha' => now()->addDays(1), // Fecha del turno
                'hora_inicio' => '00:00:00', // Hora de inicio
                'hora_fin' => '08:00:00', // Hora de fin
                'estado' => 'Activo', // Estado del turno
            ]);

            // Agrega más turnos según sea necesario
        } catch (\Exception $e) {
            \Log::error('Error creando turno de emergencia: ' . $e->getMessage());
        }
    }
}
