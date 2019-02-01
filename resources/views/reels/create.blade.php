@extends('layouts.app')

@section('content')
    <h2> Dodaj nowy kołowrotek: </h2><br><br>
    {!! Form::open(['action' => 'ReelsController@store', 'method'=>'POST'] ) !!}
        <div class="form-group">
            {{Form::label('model', 'Model:')}}
            {{Form::text('model', '', ['class' => 'form-control', 'placeholder'=> 'Model kołowrotka'])}}
        </div>

        {{Form::submit('Dodaj', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection