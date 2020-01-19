<?php

namespace App\Http\Controllers;

use App\Criticidade;
use App\Http\Requests\IncidenteFormRequest;
use App\Incidente;
use App\Tipo;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;

class IncidentesController extends Controller
{
    public function index(){
        $incidentes = Incidente::with(['Tipo', 'Criticidade'])->paginate(10);;

        return view('incidente.listar', ['incidentes' =>$incidentes]);
    }

    public function novo(){
        $criticidades = Criticidade::all();
        $tipos = Tipo::all();
        return view('incidente.formulario',  ['incidente'=>array(),'tipos'=>$tipos, 'criticidades'=>$criticidades]);
    }

    public function salvar(IncidenteFormRequest $request){
        $incidente = new Incidente();

        $incidente->create($request->all());
         \Session::flash('mensagem', 'Incidente cadastrado com sucesso!');

       return \Redirect::to('incidente');
    }
    public function atualizar($id, IncidenteFormRequest $request){

        $incidente = Incidente::findOrFail($id);

        $incidente->update($request->all());
        \Session::flash('mensagem', 'Incidente Atualizado com sucesso!');

       return \Redirect::to('incidente');
    }

    public function editar($id){
       $incidente = Incidente::findOrFail($id);
       $criticidades = Criticidade::all();
       $tipos = Tipo::all();

       return view('incidente.formulario', ['incidente'=>$incidente, 'tipos'=>$tipos, 'criticidades'=>$criticidades]);
    }

    public function delete($id){
        $incidente = Incidente::findOrFail($id);
        $incidente->delete();
        \Session::flash('mensagem', 'Incidente Excluido com sucesso!');

        return \Redirect::to('incidente');
    }
}
