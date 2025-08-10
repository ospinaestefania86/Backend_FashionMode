<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            [
                'nombre' => 'Vestido floral rosa',
                'descripcion' => 'Vestido de verano con estampado floral',
                'precio' => 59.99,
                'stock' => null,
                'categoria_id' => null,
            ],
            [
                'nombre' => 'Pantalón vaquero verde',
                'descripcion' => 'Jeans clásicos azul oscuro',
                'precio' => 39.99,
                'stock' => null,
                'categoria_id' => null,
            ],
            [
                'nombre' => 'Camisa blanca',
                'descripcion' => 'Camisa formal de algodón',
                'precio' => 29.99,
                'stock' => 40,
                'categoria_id' => 3,
            ],
            [
                'nombre' => 'Zapatos deportivos',
                'descripcion' => 'Zapatillas para correr',
                'precio' => 79.99,
                'stock' => 15,
                'categoria_id' => 4,
            ],
            [
                'nombre' => 'Collar de plata',
                'descripcion' => 'Collar elegante de plata 925',
                'precio' => 45.50,
                'stock' => 20,
                'categoria_id' => 5,
            ],
            [
                'nombre' => 'Vestido de noche',
                'descripcion' => 'Elegante vestido para ocasiones especiales',
                'precio' => 89.99,
                'stock' => 10,
                'categoria_id' => 1,
            ],
            [
                'nombre' => 'Pantalón de vestir',
                'descripcion' => 'Pantalón formal negro',
                'precio' => 49.99,
                'stock' => 18,
                'categoria_id' => 2,
            ],
            [
                'nombre' => 'Camisa a rayas',
                'descripcion' => 'Camisa casual de manga larga',
                'precio' => 34.99,
                'stock' => 22,
                'categoria_id' => 3,
            ],
            [
                'nombre' => 'Botines',
                'descripcion' => 'Botines de cuero para mujer',
                'precio' => 65.99,
                'stock' => 12,
                'categoria_id' => 4,
            ],
            [
                'nombre' => 'Gafas de sol',
                'descripcion' => 'Gafas estilo aviador',
                'precio' => 29.99,
                'stock' => 30,
                'categoria_id' => 5,
            ],
        ]);
    }
}
