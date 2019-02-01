@extends('layouts.app')

@section('content')
    <h2> Dodaj haczyk: </h2><br><br>
    {!! Form::open(['action' => 'HooksController@store', 'method'=>'POST'] ) !!}
        <div class="form-group">
            {{Form::label('model', 'Model:')}}
            {{Form::text('model', '', ['class' => 'form-control', 'placeholder'=> 'Model haczyka'])}}
        </div>
        <div class="form-group">
            {{Form::label('size', 'Średnica żyłki:')}}
            {{Form::text('size', '', ['class' => 'form-control', 'placeholder'=> 'rozmiar'])}}
        </div>
        <div class="form-group">
            {{Form::label('weight', 'Maksymalne obciążenie żyłki:')}}
            {{Form::text('weight', '', ['class' => 'form-control', 'placeholder'=> 'maksymalne obciążenie haczyka'])}}
        </div>
        {{Form::submit('Dodaj', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection