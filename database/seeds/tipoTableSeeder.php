<?php

use Illuminate\Database\Seeder;

class tipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Tipo::insert([
            [
                'id'=>1,
                'nome'=>'Ataque Brute Force'
            ],
            [
                'id'=>2,
                'nome'=>'Credencias vazadas'
            ],
            [
                'id'=>3,
                'nome'=>'Ataque de DDoS'
            ],
            [
                'id'=>4,
                'nome'=>'Atividades anormais de usuários'
            ],

        ]);
    }
}
