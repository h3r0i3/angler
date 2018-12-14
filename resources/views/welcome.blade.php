@extends('layouts.app') <!-- dodajemu tutaj korzystanie z pliku layout z katalogu app (w zasadzie z layoutu :D) -->



<!-- @section('title', 'Strona główna')  -->
@section('body') <!-- użycie tego pozwala na wstrzyknięcie wszystkiego co 
znajduje się w sekcji w miejsce "yield('content')" w pliku app w katalogu layouts. -->
<h1>Główne założenia:</h1> 
- wykorzystane technologii PHP, HTML, CSS, MySQL, Google Maps.<br/>
- tworzenie responsywnego interfejsu graficznego dla użytkownika działającego na różnego rodzaju urządzeniach.<br/>  
- tworzenie połączenia z bazą danych i umieszczanie w niej kluczowych danych.<br/>
- dołączenie do aplikacji Google Maps i korzystanie z ich funkcjonalności.<br/>
- implementacja funkcji, które pozwolą użytkownikowi na wprowadzanie danych oraz ich przeglądanie.<br/>
- tworzenie kont użytkowników z zachowaniem ogólnych zasad bezpieczeństwa.<br/>
@endsection


