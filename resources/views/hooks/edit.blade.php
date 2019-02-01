@extends('layouts.app')

@section('content')
    <h2> Edycja haczyka {{$hook->model}}: </h2><br><br>
    {!! Form::open(['action' => ['HooksController@update', $hook->id], 'method'=>'POST'] ) !!}
        <div class="form-group">
            {{Form::label('model', 'Model:')}}
            {{Form::text('model', $hook->model, ['class' => 'form-control', 'placeholder'=> 'Model haczyka'])}}
        </div>
        <div class="form-group">
            {{Form::label('size', 'Rozmiar haczyka:')}}
            {{Form::text('size', $hook->size, ['class' => 'form-control', 'placeholder'=> 'Rozmiar haczyka'])}}
        </div>
        <div class="form-group">
            {{Form::label('weight', 'Maksymalne obciążenie Haczyyka:')}}
            {{Form::text('weight', $hook->weight, ['class' => 'form-control', 'placeholder'=> 'Maksymalne obciążenie haczyka'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Zapisz', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection