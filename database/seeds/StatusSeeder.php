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
            'nombre_status' => 'PENDIENTE'
        ]);
        Status::create([
            'nombre_status' => 'ATENDIDO'
        ]);
    }
}
