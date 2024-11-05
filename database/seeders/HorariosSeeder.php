<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Horario;

class HorariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            Horario::create([
                'rut_empleado' => '11223344-5', // RUT del empleado
                'dia_semana' => 'Lunes',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '16:00:00',
                'turno' => 'Mañana',
            ]);

            Horario::create([
                'rut_empleado' => '12345678-9', // RUT del empleado
                'dia_semana' => 'Martes',
                'hora_inicio' => '12:00:00',
                'hora_fin' => '20:00:00',
                'turno' => 'Tarde',
            ]);

            Horario::create([
                'rut_empleado' => '21535478-9', // RUT del empleado
                'dia_semana' => 'Miércoles',
                'hora_inicio' => '20:00:00',
                'hora_fin' => '08:00:00',
                'turno' => 'Noche',
            ]);

            Horario::create([
                'rut_empleado' => '32165498-7', // RUT del empleado
                'dia_semana' => 'Jueves',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '16:00:00',
                'turno' => 'Mañana',
            ]);

            Horario::create([
                'rut_empleado' => '98765432-1', // RUT del empleado
                'dia_semana' => 'Viernes',
                'hora_inicio' => '12:00:00',
                'hora_fin' => '20:00:00',
                'turno' => 'Tarde',
            ]);
        } catch (\Exception $e) {
            \Log::error('Error creando horario: ' . $e->getMessage());
        }
    }
}
