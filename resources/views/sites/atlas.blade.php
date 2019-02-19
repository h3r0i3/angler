@extends('layouts.app')

@section('content')
W tym miejscu będzie znajdował się atlas ryb wraz ze zdjęciami, opisem itp. 
Po wybraniu gatunku ryby, użytkownik zostanie przeniesiony do obszerniejszego widoku, 
w którym znajdować się będą informacje zdefiniowane wcześniej w bazie danych: <br>
- zdjęcie,<br>- informacje na temat gatunku,<br>- okres ochronny wraz z wymiarami ochronnymi.
<br><br><h3>Atlas ryb</h3><br>

    {!! Form::open(['action' => 'AtlasController@store', 'method'=>'POST'] ) !!}

        <div class = "form-group"> 
            {{Form::label('type', 'Wybierz rybę:')}}       
            {{Form::select('type', $fishs, '', ['class' => 'form-control'])}}
        </div>
        {{Form::submit('Szukaj', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection