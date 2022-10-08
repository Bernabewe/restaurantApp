<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PlatilloIngrediente;

class PlatilloIngredienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PlatilloIngrediente::create(['platillo_id' => 1, 'ingrediente_id' => 1]);
        PlatilloIngrediente::create(['platillo_id' => 2, 'ingrediente_id' => 2]);
        PlatilloIngrediente::create(['platillo_id' => 2, 'ingrediente_id' => 5]);
        PlatilloIngrediente::create(['platillo_id' => 2, 'ingrediente_id' => 6]);
        PlatilloIngrediente::create(['platillo_id' => 2, 'ingrediente_id' => 8]);
        PlatilloIngrediente::create(['platillo_id' => 3, 'ingrediente_id' => 2]);
        PlatilloIngrediente::create(['platillo_id' => 3, 'ingrediente_id' => 4]);
        PlatilloIngrediente::create(['platillo_id' => 3, 'ingrediente_id' => 5]);
        PlatilloIngrediente::create(['platillo_id' => 3, 'ingrediente_id' => 6]);
        PlatilloIngrediente::create(['platillo_id' => 3, 'ingrediente_id' => 7]);
        PlatilloIngrediente::create(['platillo_id' => 3, 'ingrediente_id' => 8]);
        PlatilloIngrediente::create(['platillo_id' => 3, 'ingrediente_id' => 9]);
        PlatilloIngrediente::create(['platillo_id' => 4, 'ingrediente_id' => 3]);
        PlatilloIngrediente::create(['platillo_id' => 4, 'ingrediente_id' => 7]);
        PlatilloIngrediente::create(['platillo_id' => 4, 'ingrediente_id' => 8]);
        PlatilloIngrediente::create(['platillo_id' => 4, 'ingrediente_id' => 10]);
        PlatilloIngrediente::create(['platillo_id' => 5, 'ingrediente_id' => 5]);
        PlatilloIngrediente::create(['platillo_id' => 5, 'ingrediente_id' => 11]);
        PlatilloIngrediente::create(['platillo_id' => 5, 'ingrediente_id' => 12]);
    }
}
