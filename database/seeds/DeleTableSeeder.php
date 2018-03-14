<?php

use Illuminate\Database\Seeder;
use App\Delegacion;

class DeleTableSeeder extends Seeder
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
      Delegacion::create([
          'nombre_delegacion' => 'HUAJUAPAM DE LEON'
      ]);
      Delegacion::create([
          'nombre_delegacion' => 'PINOTEPA NACIONAL'
      ]);
      Delegacion::create([
          'nombre_delegacion' => 'PUERTO ESCONDIDO'
      ]);
    }
}
