<?php

use Illuminate\Database\Seeder;
use App\Ambito;

class AmbitoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ambito::create([
            'nombre_ambito' => 'PRIVADA'
        ]);
         Ambito::create([
            'nombre_ambito' => 'FEDERAL'
        ]);
          Ambito::create([
            'nombre_ambito' => 'PUBLICA'
        ]);
    }
}
