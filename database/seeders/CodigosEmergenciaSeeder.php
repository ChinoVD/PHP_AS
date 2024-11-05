<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CodigoEmergencia; // Asegúrate de importar el modelo CodigoEmergencia

class CodigosEmergenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            CodigoEmergencia::create([
                'id_codigo' => 1,
                'nombre_codigo' => 'Código Rojo',
                'descripcion' => 'Emergencia médica crítica',
                'prioridad' => 'Alta',
            ]);

            CodigoEmergencia::create([
                'id_codigo' => 2,
                'nombre_codigo' => 'Código Amarillo',
                'descripcion' => 'Emergencia médica grave',
                'prioridad' => 'Media',
            ]);

            CodigoEmergencia::create([
                'id_codigo' => 3,
                'nombre_codigo' => 'Código Verde',
                'descripcion' => 'Emergencia médica leve',
                'prioridad' => 'Baja',
            ]);

            CodigoEmergencia::create([
                'id_codigo' => 4,
                'nombre_codigo' => 'Código Naranja',
                'descripcion' => 'Emergencia médica moderada',
                'prioridad' => 'Media',
            ]);

            CodigoEmergencia::create([
                'id_codigo' => 5,
                'nombre_codigo' => 'Código Azul',
                'descripcion' => 'Emergencia médica pediátrica',
                'prioridad' => 'Alta',
            ]);

            CodigoEmergencia::create([
                'id_codigo' => 6,
                'nombre_codigo' => 'Código Gris',
                'descripcion' => 'Emergencia de seguridad',
                'prioridad' => 'Alta',
            ]);
            
        } catch (\Exception $e) {
            \Log::error('Error creando código de emergencia: ' . $e->getMessage());
        }
    }
}
