@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Incidentes</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div id="graph">
                            {!! $lava->render('PieChart', 'Incidentes', 'graph') !!}
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
