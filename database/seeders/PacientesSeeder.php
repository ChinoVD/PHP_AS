<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Paciente;

class PacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            Paciente::create([
                'rut' => '12345678-9',
                'nombre' => 'Laura',
                'apellido' => 'Martínez',
                'edad' => 30,
                'genero' => 'Femenino',
                'direccion' => 'Pasaje de la Esperanza 234',
                'telefono' => '789123456',
            ]);

            Paciente::create([
                'rut' => '98765432-1',
                'nombre' => 'Carlos',
                'apellido' => 'González',
                'edad' => 40,
                'genero' => 'Masculino',
                'direccion' => 'Avenida Siempre Viva 742',
                'telefono' => '987654321',
            ]);

            Paciente::create([
                'rut' => '21535478-9',
                'nombre' => 'María',
                'apellido' => 'López',
                'edad' => 25,
                'genero' => 'Femenino',
                'direccion' => 'Calle Falsa 336',
                'telefono' => '652135445',
            ]);

            // Agrega más pacientes según sea necesario
        } catch (\Exception $e) {
            \Log::error('Error creando paciente: ' . $e->getMessage());
        }
    }
}
