@extends('layouts.app')

@section('content')
    <h2> Edycja przyponu {{$leader->model}}: </h2><br><br>
    {!! Form::open(['action' => ['LeadersController@update', $leader->id], 'method'=>'POST'] ) !!}
        <div class="form-group">
            {{Form::label('model', 'Model:')}}
            {{Form::text('model', $leader->model, ['class' => 'form-control', 'placeholder'=> 'Model kołowrotka'])}}
        </div>
        <div class="form-group">
            {{Form::label('size', 'Średnica przyponu:')}}
            {{Form::text('size', $leader->size, ['class' => 'form-control', 'placeholder'=> 'średnica przyponu'])}}
        </div>
        <div class="form-group">
            {{Form::label('weight', 'Maksymalne obciążenie przyponu:')}}
            {{Form::text('weight', $leader->weight, ['class' => 'form-control', 'placeholder'=> 'maksymalne obciążenie przyponu'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Zapisz', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection