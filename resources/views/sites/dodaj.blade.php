@extends('layouts.app')

@section('content')
<h4><b>W opcji dodania złowionego okazu użytkownik ma do wyboru również dodanie informacji takiej jak:<br>
* Miejsce łowiska (dodane za pomocą lokalizacji - np GPS w telefonie, lub istniejące łowisko z bazy danych),<br>
* Wpisać porę dnia połowu (ręcznie lub z jakiś kilku domyślnych przypisanych opcji),<br>
* Dodać zdjęcie złowionej ryby, <br>
* Podczas dodawania informacji, jego nick również jest wysyłany do BD w celu identyfikacji (w rankingu), <br>
* Dodawana jest informacja dotycząca zestawy, jaki został używany - zawsze ustawiony jest domyślny lub też użytkownik ma opcję wyboru, jeżeli zdefiniował inny zestaw.<br>

 </b></h4>
    <h2> Dodaj nowy okaz: </h2><br><br>
    {!! Form::open(['action' => 'PostsController@store', 'method'=>'POST'] ) !!}
        <div class="form-group">
            {{Form::label('nazwa', 'Nazwa:')}}
            {{Form::text('nazwa', '', ['class' => 'form-control', 'placeholder'=> 'Nazwa ryby'])}}
        </div>

        <div class="form-group">
            {{Form::label('dlugosc', 'Długość:')}}
            {{Form::number('dlugosc', '', ['class' => 'form-control', 'placeholder'=> 'Długość ryby w centymetrach'])}}
        </div>

        <div class="form-group">
            {{Form::label('waga', 'Waga:')}}
            {{Form::number('waga', '', ['class' => 'form-control', 'placeholder'=> 'Waga ryby w kilogramach'])}}
        </div>
        <div class="form-group">
                {{Form::label('info', 'Dodatkowe informacje:')}}
                {{Form::textarea('info', '', ['class' => 'form-control', 'placeholder'=> 'Wpisz tutaj dodatkowe informacje, jak na przykład pora dnia połowu, warunki atmosferyczne itp.'])}}
            </div>
            {{Form::submit('Dodaj', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection