@extends('layouts.app')

@section('content')
    <h2> Edycja kołowrotka {{$reel->model}}: </h2><br><br>
    {!! Form::open(['action' => ['ReelsController@update', $reel->id], 'method'=>'POST'] ) !!}
        <div class="form-group">
            {{Form::label('model', 'Model:')}}
            {{Form::text('model', $reel->model, ['class' => 'form-control', 'placeholder'=> 'Model kołowrotka'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Zapisz', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection