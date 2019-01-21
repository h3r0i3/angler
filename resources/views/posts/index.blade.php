@extends('layouts.app')

@section('body');
    <h2> Ranking dwóch najdłuższych ryb złowionych przez naszych użytkowników: </h2><br><br>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="well">
                <h3>{{$post->nazwa}}</h3> <h5>{{$post->dlugosc}}, {{$post->waga}}, {{$post->info}}</h5> 
                <small>{{$post->created_at}}</small> <br><br>
            </div>
        @endforeach 
    @else
        <p>Nie znaleziono nic.</p>
    @endif
@endsection