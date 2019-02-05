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
            {{Form::label('fish_name', 'Nazwa:')}}
            <select class="form-control">
                    <option>--Wybierz nazwę ryby--</option>
                    <option>Nazwa ryby z BD 1</option>
                    <option>Nazwa ryby z BD 2</option>
            </select>
        </div>
        <div>   
        <div class="form-group" id="fishery">
                {{Form::label('fishery', 'Łowisko:')}}
                <select class="form-control">
                    <option>--Wybierz łowisko--</option>
                    <option>Łowisko z BD 1</option>
                    <option>Łowisko z BD 2</option>
                </select>
        </div>

        <div class="form-group">
            {{Form::label('fish_length', 'Długość:')}}
            {{Form::number('fish_length', '', ['class' => 'form-control', 'placeholder'=> 'Długość ryby w centymetrach'])}}
        </div>

        <div class="form-group">
            {{Form::label('fish_weight', 'Waga:')}}
            {{Form::number('fish_weight', '', ['class' => 'form-control', 'placeholder'=> 'Waga ryby w kilogramach'])}}
        </div>
        <div class="form-group" id = "time_of_day">
                {{Form::label('time_of_day', 'Pora dnia:')}}
                <select class="form-control">
                    <option>--Wybierz porę dnia połowu--</option>
                    <option>Brzask</option>
                    <option>Ranek</option>
                    <option>Południe</option>
                    <option>Popołodnie</option>
                    <option>Wieczór</option>
                    <option>Zmierzch</option>
                    <option>Północ</option>
                </select>
        </div>
        <div class="form-group" id="sets">
                {{Form::label('sets', 'Użyty zestaw:')}}
                <select class="form-control">
                    <option>** Domyślny zestaw**</option>
                    <option>Dodatkowy zestaw użytkownika z BD 1</option>
                    <option>Dodatkowy zestaw użytkownika z BD 2</option>
                </select>
        </div>
        <div class="form-group">
                <label for="file">Dodaj zdjęcie złowionego okazu</label>
                <input type="file" class="form-control-file" id="file">
        </div><br>


    {{Form::submit('Dodaj', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection