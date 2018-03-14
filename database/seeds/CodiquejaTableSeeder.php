<?php

use Illuminate\Database\Seeder;
use App\Codigoqueja;

class CodiquejaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Codigoqueja::create([
          'id_codigo' => '1',
          'nombre_queja' => 'PROCEDIMIENTOS OPERATIVOS'
      ]);

      Codigoqueja::create([
          'id_codigo' => '2',
          'nombre_queja' => 'MAL COMPORTAMIENTO'
      ]);
    }
}
