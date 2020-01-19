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
         $this->call(criticidadeTableSeeder::class);
         $this->call(tipoTableSeeder::class);
         $this->call(incidenteTableSeeder::class);
    }
}
