@extends('layouts.app')

@section('content')  
    <h2>Lista twoich kołowrotków</h2>
    <a href="/kolowrotki/create" class="btn btn-success">Dodaj kołowrotek</a> 
    <hr>
    @if(count($reels)>0)
        <table class="table"> 
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">model kołowrotka</th>
                    <th scope="col">data dodania</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            @foreach($reels as $reel)
                <tr>
                    <td scope="row">1</th>
                    <td>{{$reel->model}}</td>
                    <td>{{$reel->created_at}}</td>
                    <td>
                    <a href="/kolowrotki/{{$reel->id}}/edit" class="btn btn-primary">edytuj</a> 
                    {!!Form::open(['action' => ['ReelsController@destroy', $reel->id], 'method'=> 'POST', 'class' => 'd-inline '])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('usuń', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                    </td>
                </tr> 
            @endforeach
                
            </tbody>
        </table> 
    @else
        <p>Nie masz jeszcze kołowrotka dodaj nowy.</p>
    @endif
@endsection