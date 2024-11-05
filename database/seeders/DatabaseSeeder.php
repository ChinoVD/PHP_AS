<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\EmpleadosSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // EmpleadosSeeder::class,
            // CodigosEmergenciaSeeder::class,
            // HorariosSeeder::class,
            // HistorialMedicoSeeder::class,
            // PacientesSeeder::class,
            // TurnosEmergenciaSeeder::class,
            EmergenciasRegistradasSeeder::class,
           
        ]);
    }
}
