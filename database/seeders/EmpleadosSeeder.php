<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empleado; // Asegúrate de importar el modelo Empleado

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            // Primer empleado
            Empleado::create([
                'rut' => '32165498-7',
                'nombre' => 'Laura',
                'apellido' => 'Martínez',
                'email' => 'laura.martinez@hospital.com',
                'password' => bcrypt('contraseña321'),
                'rol' => 'Enfermero',
                'telefono' => '789123456',
                'direccion' => 'Pasaje de la Esperanza 234',
                'fecha_contratacion' => now(),
            ]);

            // Segundo empleado
            Empleado::create([
                'rut' => '98765432-1',
                'nombre' => 'María',
                'apellido' => 'González',
                'email' => 'maria.gonzalez@hospital.com',
                'password' => bcrypt('contraseña456'),
                'rol' => 'Enfermero',
                'telefono' => '987654321',
                'direccion' => 'Avenida Siempre Viva 742',
                'fecha_contratacion' => now(),
            ]);

            // Tercer empleado
            Empleado::create([
                'rut' => '11223344-5',
                'nombre' => 'Carlos',
                'apellido' => 'López',
                'email' => 'carlos.lopez@hospital.com',
                'password' => bcrypt('contraseña789'),
                'rol' => 'Paramédico',
                'telefono' => '456789123',
                'direccion' => 'Boulevard de los Sueños Rotos 456',
                'fecha_contratacion' => now(),
            ]);
        } catch (\Exception $e) {
            \Log::error('Error creating employee: ' . $e->getMessage());
        }
    }
}
