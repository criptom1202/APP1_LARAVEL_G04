<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cargo;


class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cargo1 = new Cargo();
        $cargo1->cargo = "Administrador";
        $cargo1->descripcion = "Descripcion de administrador";
        $cargo1->save();

        $cargo2 = new Cargo();
        $cargo2->cargo= "Auditor";
        $cargo2->descripcion = "Descripción de auditor";
        $cargo2->save();


        
    }
}
