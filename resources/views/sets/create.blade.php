@extends('layouts.app')

@section('content')
    <h2> Dodaj nowy zestaw </h2><br><br>
    {!! Form::open(['action' => 'SetsController@store', 'method'=>'POST'] ) !!}
        <div class="form-group">
            {{Form::label('name', 'Nazwa zestawu:')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder'=> 'Nazwa zestawu'])}}
        </div>
        <div class = "form-group"> 
            {{Form::label('fishing_rod', 'Wędka:')}}       
            {{Form::select('fishing_rod', $fishing_rods, '', ['class' => 'form-control'])}}
        </div>
        <div class = "form-group"> 
            {{Form::label('line', 'Żyłka:')}}       
            {{Form::select('line', $lines, '', ['class' => 'form-control'])}}
        </div>
        <div class = "form-group"> 
            {{Form::label('reel', 'Kołowrotek:')}}       
            {{Form::select('reel', $reels, '', ['class' => 'form-control'])}}
        </div>
        <div class = "form-group"> 
            {{Form::label('hook', 'Haczyk:')}}       
            {{Form::select('hook', $hooks, '', ['class' => 'form-control'])}}
        </div>
        <div class = "form-group"> 
            {{Form::label('leader', 'Przypon:')}}       
            {{Form::select('leader', $leaders, '', ['class' => 'form-control'])}}
        </div>


        {{Form::submit('Dodaj', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection