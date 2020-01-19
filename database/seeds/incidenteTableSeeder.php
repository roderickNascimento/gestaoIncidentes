<?php

use Illuminate\Database\Seeder;

class incidenteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Incidente::insert([
            [
                'id'=>1,
                'titulo'=>' Brute Force',
                'id_criticidade'=>1,
                'status'=> 2,
                'id_tipo'=> 1,
                'descricao'=>'Ataque Brute force no email',
            ],
           [
                'id'=>2,
                'titulo'=>'Brute Force',
                'id_criticidade'=>1,
                'status'=> 2,
                'id_tipo'=> 1,
                'descricao'=>'ataque brute force sistema de relatorio',
            ],
           [
                'id'=>3,
                'titulo'=>'Credecais',
                'id_criticidade'=>2,
                'status'=> 2,
                'id_tipo'=> 2,
                'descricao'=>'vazaram informacoes de acesso do gestor de ti',
            ],
           [
                'id'=>4,
                'titulo'=>'DDOS',
                'id_criticidade'=>3,
                'status'=> 2,
                'id_tipo'=> 3,
                'descricao'=>' DDOS  no nosso ecommerce',
            ],
           [
                'id'=>5,
                'titulo'=>'atividade suspeita',
                'id_criticidade'=>2,
                'status'=> 2,
                'id_tipo'=> 4,
                'descricao'=>' usuario co comportamento duvido ',
            ],
                      [
                'id'=>6,
                'titulo'=>'Brute Force',
                'id_criticidade'=>1,
                'status'=> 1,
                'id_tipo'=> 1,
                'descricao'=>' ataque feito para acessar aplicacao minha rede social',
            ],
                      [
                'id'=>7,
                'titulo'=>'ataque do final de semana',
                'id_criticidade'=>1,
                'status'=> 2,
                'id_tipo'=> 1,
                'descricao'=>'brute force...',
            ],
                      [
                'id'=>8,
                'titulo'=>'brute force 2 ',
                'id_criticidade'=>2,
                'status'=> 2,
                'id_tipo'=> 1,
                'descricao'=>'brute force desc',
            ],
                      [
                'id'=>9,
                'titulo'=>'DOS',
                'id_criticidade'=>1,
                'status'=> 1,
                'id_tipo'=> 3,
                'descricao'=>'ataque de ddos na aplicacao.',
            ],
                      [
                'id'=>10,
                'titulo'=>'brute force',
                'id_criticidade'=>1,
                'status'=> 1,
                'id_tipo'=> 1,
                'descricao'=>'Ataque de Brute force ',
            ],
                      [
                'id'=>11,
                'titulo'=>'Burte Force',
                'id_criticidade'=>1,
                'status'=> 2,
                'id_tipo'=> 1,
                'descricao'=>'ataque de brute force no email do presidente',
            ],
                      [
                'id'=>12,
                'titulo'=>'BF',
                'id_criticidade'=>3,
                'status'=> 2,
                'id_tipo'=> 1,
                'descricao'=>'ataque de BF ',
            ],
                      [
                'id'=>13,
                'titulo'=>'DDOS',
                'id_criticidade'=>2,
                'status'=> 2,
                'id_tipo'=> 3,
                'descricao'=>'DDOS na semana do natal',
            ],
                      [
                'id'=>14,
                'titulo'=>'Usuario suspeito',
                'id_criticidade'=>1,
                'status'=> 1,
                'id_tipo'=> 4,
                'descricao'=>'Usuario id:3354  esta com atividade suspeita',
            ],

        ]);
    }
}
