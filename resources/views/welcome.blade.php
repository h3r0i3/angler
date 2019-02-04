@extends('layouts.app') <!-- dodajemu tutaj korzystanie z pliku layout z katalogu app (w zasadzie z layoutu :D) -->



<!-- @section('title', 'Strona główna')  -->
@section('content') <!-- użycie tego pozwala na wstrzyknięcie wszystkiego co 
znajduje się w sekcji w miejsce "yield('content')" w pliku app w katalogu layouts. -->
<h1>Główne założenia:</h1> 
- wykorzystane technologii PHP, HTML, CSS, MySQL, Google Maps.<br/>
- tworzenie responsywnego interfejsu graficznego dla użytkownika działającego na różnego rodzaju urządzeniach.<br/>  
- tworzenie połączenia z bazą danych i umieszczanie w niej kluczowych danych.<br/>
- dołączenie do aplikacji Google Maps i korzystanie z ich funkcjonalności.<br/>
- implementacja funkcji, które pozwolą użytkownikowi na wprowadzanie danych oraz ich przeglądanie.<br/>
- tworzenie kont użytkowników z zachowaniem ogólnych zasad bezpieczeństwa.<br/><br><br>

<b><h1>!! NEW !! </h1>
W kilku funkcjonalnościach są dodane założenia. Podsumowane są również tutaj.<br>
* W rankingu dodać nazwę użytkownika który dodał informacje na temat ryby. Nick użytkownika będzie
pobierany z BD, gdzie wcześniej znalazł się podczas dodawania złowionego okazu przez zalogowanego użytkownika,
dodać również zdjęcie złowionego okazu,<br>
* W dodaniu złowionej ryby powinny znajdować się informacje jak: pora dnia połowu (z rozwijanej listy, wcześniej zdefiniowanej), miejsce łowiska 
(dodane po GPS lub z dodanego łowiska z BD), opcję dodania zdjęcia złowionej ryby, dodanie informacji
na temat zestawu jakim ryba została złowiona (domyślny zestaw lub też wybrany z listy, 
jeżeli użytkownik dodał inne zestawy)<br>
* W wędkach dodać informację na temat jej długości,<br>
* Podczas wybierania przyponu dać możliwość wyboru rodzaju (na ryby drapieżne lub "niedrapieżne").
</b>

@endsection


