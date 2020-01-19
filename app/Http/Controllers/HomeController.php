<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = \DB::select('select t.nome, count(i.id_tipo) as quantidade from incidente i join tipo_incidente t on t.id = i.id_tipo group by i.id_tipo');

        $lava = new Lavacharts();

        $graficoTipoIncidente = $lava->dataTable();
        $graficoTipoIncidente->addStringColumn('Tipo de Incidente')->addNumberColumn('quantidade');

        foreach ($data as $incidente){
            $graficoTipoIncidente->addRow([$incidente->nome, $incidente->quantidade ]);

        }


        $lava->PieChart('Incidentes', $graficoTipoIncidente);


        return view('home',['lava'=>$lava]);
    }
}
