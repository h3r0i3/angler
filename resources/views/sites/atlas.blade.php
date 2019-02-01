@extends('layouts.app')

@section('content')
W tym miejscu będzie znajdował się atlas ryb wraz ze zdjęciami, opisem itp. 
Po wybraniu gatunku ryby, użytkownik zostanie przeniesiony do obszerniejszego widoku, 
w którym znajdować się będą informacje zdefiniowane wcześniej w bazie danych: <br>
- zdjęcie,<br>- informacje na temat gatunku,<br>- okres ochronny wraz z wymiarami ochronnymi.
<br><br><h3>Atlas ryb</h3><br>
<div class="input-group mb-3">
	<select class="custom-select" id="inputGroupSelect02">
	  <option selected>Wybierz gatunek ryby:</option>
	  <option value="1">Nazwa ryby z bazy danych 1 </option>
	  <option value="2">Nazwa ryby z bazy danych 2 </option>
	  <option value="3">Nazwa ryby z bazy danych 3 </option>
	</select>
	<div class="input-group-append">
		<button class="btn btn-primary" type="button">Szukaj</button>
	</div>
  </div>
@endsection