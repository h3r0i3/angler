@extends('layouts.app')

@section('content')

<h4><b>Dodanie informacji na temat długości wędki.</b></h4>
    <h2> Dodaj nową wędkę: </h2><br><br>
    {!! Form::open(['action' => 'FishingRodController@store', 'method'=>'POST'] ) !!}
        <div class="form-group">
            {{Form::label('model', 'Model:')}}
            {{Form::text('model', '', ['class' => 'form-control', 'placeholder'=> 'Model wędki'])}}
        </div>
        <div class="form-group">
                {{Form::label('length', 'Długość wędki:')}}
                {{Form::number('length', '', ['class' => 'form-control', 'placeholder'=> 'Długość wędki w centymetrach'])}}
        </div>
        <div class = "form-group"> 
            {{Form::label('type', 'Typ wędki:')}}       
            {{Form::select('type', $fishing_rods_types, '', ['class' => 'form-control'])}}
        </div>

        {{Form::submit('Dodaj', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection