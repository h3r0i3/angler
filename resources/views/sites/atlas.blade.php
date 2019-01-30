@extends('layouts.app')

@section('body')
<h4>Aby wyświetli informacje związane z interesującą rybą, 
wybierz nazwę gatunku z rozwijanej listy znajdującej się poniżej:</h4>
<br>
<form action="...">
	<div class="input-group mb-3">
		<div class="input-group-prepend">
		  <label class="input-group-text" for="inputGroupSelect01">Wybierz nazwę ryby: </label>
		</div>
		<select class="custom-select" id="inputGroupSelect01">
		  <option selected>Wybierz...</option>
		  <option value="1">Rybka z BD 1</option>
		  <option value="2">Rybka z BD 2</option>
		  <option value="3">Rybka z BD 3</option>
		</select>
	  </div>

	<div class="form-group">
        <button class="btn btn-primary"> Szukaj </button>
    </div>
</form>
@endsection