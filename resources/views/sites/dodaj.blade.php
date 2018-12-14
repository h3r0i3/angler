@extends('layouts.app') <!-- dodajemu tutaj korzystanie z pliku layout z katalogu app (w zasadzie z layoutu :D) -->



@section('title', 'Dodawanie strony')  
@section('body')

<form action="{{route('sites.zapisz')}}" method="post"> <!-- formularz wysyłany za pomocą metody POST -->
    
    <div class="form-group">
        <input type="text" name="title" class="form-control" placeholder="Podaj nazwę okazu">
    </div>
    
    <div class="form-group">
        <textarea name="uwagi" class="form-control" placeholder="Napisz proszę coś więcej"></textarea>
    </div>

    <div class="form-group">
        <button class="btn btn-primary"> Zapisz </button>
    </div>

</form><br/>
@endsection
@section('body2') <!-- użycie tego pozwala na wstrzyknięcie wszystkiego co 
znajduje się w sekcji w miejsce "yield('content')" w pliku app w katalogu layouts. -->
Użytkownij będzie mógł dodać do BD swoją zdobycz 
(nazwę ryby, jej wielkość, dzień i godzinę złowienia, miejsce połowu, dane o pogodzie i jakąś notatkę)  
@endsection


