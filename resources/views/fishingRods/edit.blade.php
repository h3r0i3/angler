@extends('layouts.app')

@section('content')
    <h2> Edycja wędki {{$fishing_rod->model}}: </h2><br><br>
    {!! Form::open(['action' => ['FishingRodController@update', $fishing_rod->id], 'method'=>'POST'] ) !!}
        <div class="form-group">
            {{Form::label('model', 'Model:')}}
            {{Form::text('model', $fishing_rod->model, ['class' => 'form-control', 'placeholder'=> 'Model wędki'])}}
        </div>
        <div class = "form-group"> 
            {{Form::label('type', 'Typ wędki:')}}       
            {{Form::select('type', $fishing_rods_types, $fishing_rod->type_id, ['class' => 'form-control'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Zapisz', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection