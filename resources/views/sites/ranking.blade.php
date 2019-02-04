@extends('layouts.app')

@section('content')
<h2><b>Tutaj ma jeszcze znajdować się informacja, jaki użytkownik dodał informację na temat złowionej ryby + zdjęcie dodane przez użytkownika złowionego okazu.</h2></b><br>
    <h2> Ranking pięciu najdłuższych ryb złowionych przez naszych użytkowników: </h2><br><br>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="well">
                <h3>{{$post->nazwa}}</h3> <h5>Długość w cm: <b>{{$post->dlugosc}}</b>, Waga w kg: <b>{{$post->waga}}</b>, {{$post->info}}</h5> 
                <small>{{$post->created_at}}</small> <br><br>
            </div>
        @endforeach 
    @else
        <p>Nie znaleziono nic.</p>
    @endif
@endsection