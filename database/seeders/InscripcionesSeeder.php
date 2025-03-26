<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Inscripcion;

class InscripcionesSeeder extends Seeder
{
    
    public function run(): void
    {
        Inscripcion::create([
            'id_campana' => 1, // ID de la campaña
            'id_usuario' => 4,  // ID del usuario (diferente al admin)
        ]);
        Inscripcion::create([
            'id_campana' => 1, // ID de la campaña
            'id_usuario' => 5,  // ID del usuario (diferente al admin)
        ]);
        Inscripcion::create([
            'id_campana' => 1, // ID de la campaña
            'id_usuario' => 6,  // ID del usuario (diferente al admin)
        ]);
        Inscripcion::create([
            'id_campana' => 2, // ID de la campaña
            'id_usuario' => 4,  // ID del usuario (diferente al admin)
        ]);
        Inscripcion::create([
            'id_campana' => 2, // ID de la campaña
            'id_usuario' => 5,  // ID del usuario (diferente al admin)
        ]);
        Inscripcion::create([
            'id_campana' => 2, // ID de la campaña
            'id_usuario' => 6,  // ID del usuario (diferente al admin)
        ]);
        Inscripcion::create([
            'id_campana' => 3, // ID de la campaña
            'id_usuario' => 4,  // ID del usuario (diferente al admin)
        ]);
        Inscripcion::create([
            'id_campana' => 3, // ID de la campaña
            'id_usuario' => 5,  // ID del usuario (diferente al admin)
        ]);
        Inscripcion::create([
            'id_campana' => 3, // ID de la campaña
            'id_usuario' => 6,  // ID del usuario (diferente al admin)
        ]);
        Inscripcion::create([
            'id_campana' => 4, // ID de la campaña
            'id_usuario' => 4,  // ID del usuario (diferente al admin)
        ]);
        Inscripcion::create([
            'id_campana' => 4, // ID de la campaña
            'id_usuario' => 5,  // ID del usuario (diferente al admin)
        ]);
        Inscripcion::create([
            'id_campana' => 4, // ID de la campaña
            'id_usuario' => 6,  // ID del usuario (diferente al admin)
        ]);
        Inscripcion::create([
            'id_campana' => 5, // ID de la campaña
            'id_usuario' => 4,  // ID del usuario (diferente al admin)
        ]);
        Inscripcion::create([
            'id_campana' => 5, // ID de la campaña
            'id_usuario' => 5,  // ID del usuario (diferente al admin)
        ]);
        Inscripcion::create([
            'id_campana' => 5, // ID de la campaña
            'id_usuario' => 6,  // ID del usuario (diferente al admin)
        ]);
        Inscripcion::create([
            'id_campana' => 6, // ID de la campaña
            'id_usuario' => 4,  // ID del usuario (diferente al admin)
        ]);
        Inscripcion::create([
            'id_campana' => 6, // ID de la campaña
            'id_usuario' => 5,  // ID del usuario (diferente al admin)
        ]);
        Inscripcion::create([
            'id_campana' => 6, // ID de la campaña
            'id_usuario' => 6,  // ID del usuario (diferente al admin)
        ]);
    }
}
