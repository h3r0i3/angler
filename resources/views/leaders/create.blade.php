@extends('layouts.app')

@section('content')
<h4><b></b></h4>
<h4><b>Dodać możliwość wyboru przyponu ze względu na charakter łowionej ryby - (drapieżna lub ??zwykłe??)</b></h4>
    <h2> Dodaj przypon: </h2><br><br>
    {!! Form::open(['action' => 'LeadersController@store', 'method'=>'POST'] ) !!}
        <div class="form-group">
            {{Form::label('model', 'Model:')}}
            {{Form::text('model', '', ['class' => 'form-control', 'placeholder'=> 'Model przyponu'])}}
        </div>
        <div class="form-group">
            {{Form::label('size', 'Średnica przyponu:')}}
            {{Form::text('size', '', ['class' => 'form-control', 'placeholder'=> 'średnica przyponu'])}}
        </div>
        <div class="form-group">
            {{Form::label('weight', 'Maksymalne obciążenie przyponu:')}}
            {{Form::text('weight', '', ['class' => 'form-control', 'placeholder'=> 'maksymalne obciążenie przyponu'])}}
        </div>
        {{Form::submit('Dodaj', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection