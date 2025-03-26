<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{   
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'),
        ]);
        User::create([
            'name' => 'Organizacion 1',
            'email' => 'organizacion_1@example.com',
            'password' => Hash::make('password123'),
        ]);
        User::create([
            'name' => 'Organizacion 2',
            'email' => 'organizacion_2@example.com',
            'password' => Hash::make('password123'),
        ]);
        User::create([
            'name' => 'Voluntario 1',
            'email' => 'voluntario_1@example.com',
            'password' => Hash::make('password123'),
        ]);
        User::create([
            'name' => 'Voluntario 2',
            'email' => 'voluntario_2@example.com',
            'password' => Hash::make('password123'),
        ]);   
        User::create([
            'name' => 'Voluntario 3',
            'email' => 'voluntario_3@example.com',
            'password' => Hash::make('password123'),
        ]);    
    }
}
