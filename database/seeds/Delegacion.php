<?php

use Illuminate\Database\Seeder;
use App\Delegacion;

class Delegacion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Delegacion::create([
            'nombre_delegacion' => 'VALLES CENTRALES'
        ]);
      
    }
}
