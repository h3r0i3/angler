@extends('layouts.app')

@section('body')
    <h2> Dodaj nowy okaz: </h2><br><br>
    {!! Form::open(['action' => 'PostsController@store', 'method'=>'POST'] ) !!}
        <div class="form-group">
            {{Form::label('nazwa', 'Nazwa:')}}
            {{Form::text('nazwa', '', ['class' => 'form-control', 'placeholder'=> 'Nazwa ryby'])}}
        </div>

        <div class="form-group">
            {{Form::label('dlugosc', 'Długość:')}}
            {{Form::text('dlugosc', '', ['class' => 'form-control', 'placeholder'=> 'Długość ryby w centymetrach'])}}
        </div>

        <div class="form-group">
            {{Form::label('waga', 'Waga:')}}
            {{Form::text('waga', '', ['class' => 'form-control', 'placeholder'=> 'Waga ryby w kilogramach'])}}
        </div>
        <div class="form-group">
                {{Form::label('info', 'Dodatkowe informacje:')}}
                {{Form::textarea('info', '', ['class' => 'form-control', 'placeholder'=> 'Wpisz tutaj dodatkowe informacje, jak na przykład pora dnia połowu, warunki atmosferyczne itp.'])}}
            </div>
            {{Form::submit('Dodaj', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection