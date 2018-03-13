<?php

use Illuminate\Database\Seeder;
use App\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'nombre_codigo' => 'PENDIENTE'
        ]);
        Status::create([
            'nombre_codigo' => 'ATENDIDO'
        ]);
    }
}
