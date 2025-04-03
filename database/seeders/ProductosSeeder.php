<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;
use Carbon\Carbon;

class ProductosSeeder extends Seeder
{
    public function run(): void
    {
        Producto::create([
            'nombre' => 'Producto 1',
            'descripcion' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'precio' => '300',
            'img' => 'p-1.png',
        ]);
        Producto::create([
            'nombre' => 'Producto 2',
            'descripcion' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'precio' => '200',
            'img' => 'p-2.webp',
        ]);
        Producto::create([
            'nombre' => 'Producto 3',
            'descripcion' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'precio' => '400',
            'img' => 'p-3.webp',
        ]);
        Producto::create([
            'nombre' => 'Producto 4',
            'descripcion' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'precio' => '250',
            'img' => 'p-4.png',
        ]);
        Producto::create([
            'nombre' => 'Producto 5',
            'descripcion' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'precio' => '450',
            'img' => 'p-5.jpg',
        ]);
        Producto::create([
            'nombre' => 'Producto 6',
            'descripcion' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'precio' => '350',
            'img' => 'p-6.jpg',
        ]);
    }
}
