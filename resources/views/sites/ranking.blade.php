@extends('layouts.app')

@section('content')
<h2><b>Tutaj ma jeszcze znajdować się informacja, jaki użytkownik dodał informację na temat złowionej ryby + zdjęcie dodane przez użytkownika złowionego okazu.</h2></b><br>
    <h2> Ranking pięciu najdłuższych ryb złowionych przez naszych użytkowników: </h2><br><br>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="well">
                <h3>{{$post->fish_name}}</h3> <h5>Długość w cm: <b>{{$post->fish_length}}</b>, 
                    Waga w kg: <b>{{$post->fish_weight}}</b>, Pora połowu: <b>{{$post->time_of_day}}</b>,
                    Na łowisku: <b>{{$post->fishery}}</b></h5> 
                <small>Okaz złowiony przez: <b>{{$post->nick}}</b>, dodano: {{$post->created_at}}</small> <br><br>
            </div>
        @endforeach 
    @else
        <p>Nie znaleziono nic.</p>
    @endif
@endsection