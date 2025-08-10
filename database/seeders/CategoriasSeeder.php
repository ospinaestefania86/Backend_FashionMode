<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            [
                'nombre' => 'Vestidos',
                'descripcion' => 'Vestidos para toda ocasión',
            ],
            [
                'nombre' => 'Pantalones',
                'descripcion' => 'Pantalones formales e informales',
            ],
            [
                'nombre' => 'Camisas',
                'descripcion' => 'Camisas para hombre y mujer',
            ],
            [
                'nombre' => 'Zapatos',
                'descripcion' => 'Calzado de moda',
            ],
            [
                'nombre' => 'Accesorios',
                'descripcion' => 'Complementos para tu look',
            ],
        ]);
    }
}
