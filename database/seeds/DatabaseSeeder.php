<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(MesSeeder::class);
        $this->call(AmbitoSeeder::class);
        $this->call(DeleTableSeeder::class);
        $this->call(CodigoSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(CodiquejaTableSeeder::class);
        $this->call(EntradaTableSeeder::class);
    }
}
