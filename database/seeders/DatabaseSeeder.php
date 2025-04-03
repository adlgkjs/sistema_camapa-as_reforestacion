<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Ejecutar el seeder de usuarios
        $this->call(UsuariosSeeder::class);

        // Ejecutar el seeder de campañas
        $this->call(CampanasSeeder::class);

        // Ejecutar el seeder de inscripciones
        // $this->call(InscripcionesSeeder::class);

        // Ejecutar el seeder de productos
        $this->call(ProductosSeeder::class);
    }
}
