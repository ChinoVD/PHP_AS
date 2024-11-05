<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HistorialMedico;

class HistorialMedicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            HistorialMedico::create([
                'rut_paciente' => '12345678-9', // RUT del paciente
                'fecha_consulta' => now()->subDays(10), // Fecha de la consulta
                'diagnostico' => 'Consulta general, paciente con fiebre y tos.', // Diagnóstico
                'tratamiento' => 'Reposo y antitérmicos.', // Tratamiento
                'rut_medico_responsable' => '21535478-9', // RUT del médico responsable
            ]);

            HistorialMedico::create([
                'rut_paciente' => '98765432-1', // RUT del paciente
                'fecha_consulta' => now()->subDays(5), // Fecha de la consulta
                'diagnostico' => 'Chequeo de rutina, todo en orden.', // Diagnóstico
                'tratamiento' => 'Ninguno necesario.', // Tratamiento
                'rut_medico_responsable' => '12345678-9', // RUT del médico responsable
            ]);

            HistorialMedico::create([
                'rut_paciente' => '21535478-9', // RUT del paciente
                'fecha_consulta' => now()->subDays(3), // Fecha de la consulta
                'diagnostico' => 'Consulta por dolor de cabeza, se recomienda reposo.', // Diagnóstico
                'tratamiento' => 'Analgesicos y reposo.', // Tratamiento
                'rut_medico_responsable' => '98765432-1', // RUT del médico responsable
            ]);

            HistorialMedico::create([
                'rut_paciente' => '11223344-5', // RUT del paciente
                'fecha_consulta' => now()->subDays(1), // Fecha de la consulta
                'diagnostico' => 'Atención de emergencia por esguince.', // Diagnóstico
                'tratamiento' => 'Inmovilización y antiinflamatorios.', // Tratamiento
                'rut_medico_responsable' => '21535478-9', // RUT del médico responsable
            ]);

            HistorialMedico::create([
                'rut_paciente' => '32165498-7', // RUT del paciente
                'fecha_consulta' => now(), // Fecha de la consulta
                'diagnostico' => 'Consulta por revisión de medicamentos.', // Diagnóstico
                'tratamiento' => 'Revisión de la medicación actual.', // Tratamiento
                'rut_medico_responsable' => '12345678-9', // RUT del médico responsable
            ]);
        } catch (\Exception $e) {
            \Log::error('Error creando historial médico: ' . $e->getMessage());
        }
    }
}
