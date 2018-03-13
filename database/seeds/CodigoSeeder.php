<?php

use Illuminate\Database\Seeder;
use App\Codigo;


class CodigoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Codigo::create([
            'nombre_codigo' => 'PROBLEMAS OPERATIVIDAD'
        ]);
        Codigo::create([
            'nombre_codigo' => 'MAL COMPORTAMIENTO'
        ]);
    }
}
