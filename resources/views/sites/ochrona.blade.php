@extends('layouts.app')

@section('body')
Po wybraniu danego gatunku ryby program będzie informował w oparciu o bieżącą datę, czy złowiona zdobycz 
znajduje się w chwili obecnej pod ochroną, lub też po wpisaniu rozmiaru danego gatunku, czy ma za mały rozmiar, by została złowiona.  
<br><br><br>
<h3>Okresy ochronne ryb, to czas, w którym łowienie danych okazów jest zabronione. Okresy ochronne ryb zbiegają się w czasie przede wszystkim z momentem największego rozrodu danych gatunków, kiedy powinny być poddane szczególnej ochronie. <h3> 
<br>
<form action="{{route('sites.zapisz')}}" method="post"> <!-- formularz wysyłany za pomocą metody POST -->
    
    <div class="form-group">
        <input type="text" name="title" class="form-control" placeholder="Podaj nazwę ryby">
    </div>

    <div class="form-group">
        <button class="btn btn-primary"> Szukaj </button>
    </div>

</form><br/>
@endsection