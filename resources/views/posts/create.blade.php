@extends('layouts.app')

@section('body')
    <h2> Dodaj nowy okaz: </h2><br><br>
    {!! Form::open(['action' => 'PostsController@store', 'method'=>'POST'] ) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder'=> 'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder'=> 'Body Text'])}}
            </div>
            {{Form::submit('Dodaj', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection