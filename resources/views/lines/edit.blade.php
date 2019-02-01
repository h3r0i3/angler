@extends('layouts.app')

@section('content')
    <h2> Edycja żyłki {{$line->model}}: </h2><br><br>
    {!! Form::open(['action' => ['LinesController@update', $line->id], 'method'=>'POST'] ) !!}
        <div class="form-group">
            {{Form::label('model', 'Model:')}}
            {{Form::text('model', $line->model, ['class' => 'form-control', 'placeholder'=> 'Model kołowrotka'])}}
        </div>
        <div class="form-group">
            {{Form::label('size', 'Średnica żyłki:')}}
            {{Form::text('size', $line->size, ['class' => 'form-control', 'placeholder'=> 'średnica żyłki'])}}
        </div>
        <div class="form-group">
            {{Form::label('weight', 'Maksymalne obciążenie żyłki:')}}
            {{Form::text('weight', $line->weight, ['class' => 'form-control', 'placeholder'=> 'maksymalne obciążenie żyłki'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Zapisz', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection