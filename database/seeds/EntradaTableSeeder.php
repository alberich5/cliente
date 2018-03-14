<?php

use Illuminate\Database\Seeder;
use App\Entrada;

class EntradaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Entrada::create([
          'nombre_entrada' => 'Llamada Telefónica'
      ]);
      Entrada::create([
          'nombre_entrada' => 'Correo Electrónico '
      ]);
    }
}
