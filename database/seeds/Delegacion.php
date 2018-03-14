<?php

use Illuminate\Database\Seeder;
use App\Delegacion;

class Delegacionseeder extends Seeder
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
