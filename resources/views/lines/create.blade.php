@extends('layouts.app')

@section('content')
    <h2> Dodaj żyłkę: </h2><br><br>
    {!! Form::open(['action' => 'LinesController@store', 'method'=>'POST'] ) !!}
        <div class="form-group">
            {{Form::label('model', 'Model:')}}
            {{Form::text('model', '', ['class' => 'form-control', 'placeholder'=> 'Model kołowrotka'])}}
        </div>
        <div class="form-group">
            {{Form::label('size', 'Średnica żyłki:')}}
            {{Form::text('size', '', ['class' => 'form-control', 'placeholder'=> 'średnica żyłki'])}}
        </div>
        <div class="form-group">
            {{Form::label('weight', 'Maksymalne obciążenie żyłki:')}}
            {{Form::text('weight', '', ['class' => 'form-control', 'placeholder'=> 'maksymalne obciążenie żyłki'])}}
        </div>
        {{Form::submit('Zapisz', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection