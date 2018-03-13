<?php

use Illuminate\Database\Seeder;
use App\Mes;

class MesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Mes::create([
            'nombre_mes' => 'ENERO'
        ]);
         Mes::create([
            'nombre_mes' => 'FEBRERO'
        ]);
         Mes::create([
            'nombre_mes' => 'MARZO'
        ]);
         Mes::create([
            'nombre_mes' => 'ABRIL'
        ]);
         Mes::create([
            'nombre_mes' => 'MAYO'
        ]);
         Mes::create([
            'nombre_mes' => 'JUNIO'
        ]);
         Mes::create([
            'nombre_mes' => 'AGOSTO'
        ]);
         Mes::create([
            'nombre_mes' => 'SEPTIEMBRE'
        ]);
         Mes::create([
            'nombre_mes' => 'OCTUBRE'
        ]);
         Mes::create([
            'nombre_mes' => 'NOVIEMBRE'
        ]);
         Mes::create([
            'nombre_mes' => 'DICIEMBRE'
        ]);
        
    }
}
