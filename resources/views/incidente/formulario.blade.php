@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Incidente <a href="{{url('incidente')}}" class="pull-right">Listagem</a></div>
                    @if (isset($errors) && count($errors)>0)
                        <div class="alert alert-danger ">
                        @foreach($errors->all() as $erro)
                            <p>{{$erro}}</p>
                        @endforeach
                        </div>
                    @endif
                    <div class="panel-body">
                        @if (Request::is('*/novo'))
                            {!! Form::open(['url'=>'/incidente/salvar', 'method' => 'post']) !!}
                        @else
                            {!! Form::model($incidente,  ['url'=>'/incidente/atualizar/'.$incidente->id, 'method' => 'put'])!!}
                        @endif

                        {!! Form::open(['url'=>'/incidente/salvar', 'method' => 'post']) !!}

                        {!! Form::label('Titulo', 'Titulo')!!}
                        {!! Form::text('titulo', null, ['class' => 'form-control'])!!}

                        {!! Form::label('Criticidade', 'Criticidade')!!}
                        {!! Form::Select('id_criticidade',$criticidades->pluck('nome','id'), null, ['class' => 'form-control'])!!}

                        {!! Form::label('Status ', 'Status')!!}
                        {!! Form::select('status', ['1' => 'Aberto', '2' => 'Fechado'], null, ['class' => 'form-control']) !!}

                        {!! Form::label('Tipo ', 'Tipo')!!}
                        {!! Form::select('id_tipo', $tipos->pluck('nome','id'), null, ['class' => 'form-control']) !!}

                        {!!  Form::label('Descrição', 'Descricao')!!}
                        {!!  Form::textarea('descricao', null, ['class' => 'form-control','placeholder'=>'desc'])!!}

                        {!!  Form::submit('Salvar',['class'=>'btn btn-primary'])!!}
                        {!!  Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
