<?php

use Illuminate\Database\Seeder;


class criticidadeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Criticidade::insert([
            [
                'id'=>1,
                'nome'=>'alta'
            ],
            [
                'id'=>2,
                'nome'=>'media'
            ],
            [
                'id'=>3,
                'nome'=>'baixa'
            ]
        ]);
    }
}
