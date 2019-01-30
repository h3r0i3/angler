@extends('layouts.app')

@section('body')
Po wybraniu danego gatunku ryby program będzie informował w oparciu o bieżącą datę, czy złowiona zdobycz 
znajduje się w chwili obecnej pod ochroną, lub też po wpisaniu rozmiaru danego gatunku, czy ma za mały rozmiar, by została złowiona.  
<br><br><br>
<h4>Okresy ochronne ryb, to czas, w którym łowienie danych okazów jest zabronione. Okresy ochronne ryb zbiegają się w czasie przede wszystkim z momentem największego rozrodu danych gatunków, kiedy powinny być poddane szczególnej ochronie. </h4> 
<br>
<form action="{{route('sites.zapisz')}}" method="post"> <!-- formularz wysyłany za pomocą metody POST -->
    
    <div class="input-group mb-3">
		<div class="input-group-prepend">
		  <label class="input-group-text" for="inputGroupSelect01">Wybierz nazwę ryby: </label>
		</div>
		<select class="custom-select" id="inputGroupSelect01">
		  <option selected>Wybierz...</option>
		  <option value="1">Rybka ochrona z BD 1</option>
		  <option value="2">Rybka ochrona z BD 2</option>
		  <option value="3">Rybka ochrona z BD 3</option>
		</select>
	  </div>

    <div class="form-group">
        <button class="btn btn-primary"> Szukaj </button>
    </div>

</form><br/>
@endsection