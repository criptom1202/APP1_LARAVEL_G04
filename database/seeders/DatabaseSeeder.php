<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\Cargo::factory(20)->create();
        //creando administrador
        // $this->call([
        //     CargoSeeder::class,
        // ]);

    }
}
