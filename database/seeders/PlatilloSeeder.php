<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Platillo;

class PlatilloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Platillo::create(['nombre'=> 'Sushi', 'precio' => 120.00, 'categoria_id' => 1]);
        Platillo::create(['nombre'=> 'Hamburguesa', 'precio' => 150.00, 'categoria_id' => 2]);
        Platillo::create(['nombre'=> 'Pizza', 'precio' => 99.99, 'categoria_id' => 2]);
        Platillo::create(['nombre'=> 'Nuggets', 'precio' => 70.00, 'categoria_id' => 2]);
        Platillo::create(['nombre'=> 'Sopa de tortilla', 'precio' => 50.00, 'categoria_id' => 3]);
    }
}
