<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = Product::create([
            'nombres' => 'piza mexicana familiar',
            'descripcion'=> 'pizza de 16 porciones con queso, champiñones y pollo con su toque picante',
            'precio'=>'48000',
            'estado'=>'disponible'
        ]);
    }
}
