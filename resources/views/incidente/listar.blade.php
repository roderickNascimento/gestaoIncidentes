@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if(Session::has('mensagem'))
                    <div class="alert alert-success ">
                        {{Session::get('mensagem')}}
                    </div>
                @endif
                <div class="panel panel-default">

                    <div class="panel-heading">Incidentes <a href="{{url('incidente/novo')}}"  class="pull-right">Novo Incidente</a></div>

                    <div class="panel-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">TITULO</th>
                                <th scope="col">CRITICIDADE</th>
                                <th scope="col">TIPO</th>
                                <th scope="col">STATUS</th>
                                <th scope="col">AÇÕES</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($incidentes as $incidente)
                                <tr>
                                    <th scope="row">{{$incidente->id}}</th>
                                    <td>{{$incidente->titulo}}</td>
                                    <td>{{$incidente->criticidade->nome}}</td>
                                    <td>{{$incidente->tipo->nome}}</td>
                                    <td>{{ $incidente->status==1? 'Aberto' : 'Fechado' }}
                                        </td>
                                    <td>
                                        <a href="/incidente/editar/{{$incidente->id}}" class="btn btn-default btn-sm"> Editar</a>
                                        {!! Form::open(['url'=>'/incidente/delete/'.$incidente->id, 'method' => 'delete', 'style'=>'display:inline']) !!}
                                        {!!   Form::submit('Excluir',['class'=>'btn btn-default  btn-sm'])!!}
                                        {!! Form::close() !!}

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!! $incidentes->Links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
