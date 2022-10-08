<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CategoriaSeeder;
use Database\Seeders\IngredienteSeeder;
use Database\Seeders\PlatilloSeeder;
use Database\Seeders\PlatilloIngredienteSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoriaSeeder::class,
            IngredienteSeeder::class,
            PlatilloSeeder::class,
            PlatilloIngredienteSeeder::class
        ]);
    }
}
