<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Campana;
use Carbon\Carbon;

class CampanasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Campana::create([
            'nombre' => 'Reforestación en el parque central',
            'fecha' => Carbon::parse('2025-04-10'),
            'hora' => '09:00:00',
            'descripcion' => 'Jornada de reforestación con voluntarios en el parque central.',
            'ubicacion' => 'Parque Central, Ciudad Verde',
            'telefono' => '5551234567',
            'correo' => 'contacto@reforestacion.com',
            'img' => 'c-1.webp',
            'id_user' => 2
        ]);

        Campana::create([
            'nombre' => 'Reforestacion Bosque de la Primavera',
            'fecha' => Carbon::parse('2025-05-15'),
            'hora' => '07:30:00',
            'descripcion' => 'Jornada de reforestación en el Bosque de la Primavera.',
            'ubicacion' => 'Playa Azul, Costa del Sol',
            'telefono' => '5559876543',
            'correo' => 'info@limpiezaplayas.com',
            'img' => 'c-2.webp',
            'id_user' => 2
        ]);

        Campana::create([
            'nombre' => 'Plantación de árboles en la escuela',
            'fecha' => Carbon::parse('2025-06-20'),
            'hora' => '10:00:00',
            'descripcion' => 'Actividad educativa para estudiantes sobre la importancia de los árboles.',
            'ubicacion' => 'Escuela Primaria Futuro Verde',
            'telefono' => '5554567890',
            'correo' => 'escuela@futuroverde.com',
            'img' => 'c-3.jpg',
            'id_user' => 2
        ]);

        Campana::create([
            'nombre' => 'Reforestacion Parque Los Colomos',
            'fecha' => Carbon::parse('2025-07-05'),
            'hora' => '08:00:00',
            'descripcion' => 'Jornada de reforestación con voluntarios en el Parque Los Colomos.',
            'ubicacion' => 'Centro Comunitario EcoVida',
            'telefono' => '5556543210',
            'correo' => 'reciclaje@ecovida.com',
            'img' => 'c-4.jpg',
            'id_user' => 3
        ]);

        Campana::create([
            'nombre' => 'Reforestacion Cerro de la Tetilla',
            'fecha' => Carbon::parse('2025-08-12'),
            'hora' => '17:00:00',
            'descripcion' => 'Jornada de reforestación con voluntarios en el Cerro de la Tetilla.',
            'ubicacion' => 'Universidad Ambiental',
            'telefono' => '5551112233',
            'correo' => 'eventos@uniambiental.com',
            'img' => 'c-5.jpg',
            'id_user' => 3
        ]);

        Campana::create([
            'nombre' => 'Reforestacion Av.Washintong',
            'fecha' => Carbon::parse('2025-09-18'),
            'hora' => '09:30:00',
            'descripcion' => 'Jornada de reforestación con voluntarios en Av. Wasingtong.',
            'ubicacion' => 'Centro de Desarrollo Sustentable',
            'telefono' => '5552233445',
            'correo' => 'huertos@desarrollosustentable.com',
            'img' => 'c-6.jpg',
            'id_user' => 3
        ]);
    }
}
