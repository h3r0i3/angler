@extends('layouts.app')

@section('content')  
    <h2>Lista twoich wędek</h2>
    <a href="/zestawy/create" class="btn btn-success">Dodaj zestaw</a> 
    <hr>
    @if(count($sets)>0)
        <table class="table"> 
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nazwa zestawu</th>
                    <th scope="col">data dodania</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            @foreach($sets as $set)
                <tr>
                    <td scope="row">1</th>
                    <td>{{$set->name}}</td>
                    <td>{{$set->created_at}}</td>
                    <td>
                    <a href="/zestawy/{{$set->id}}/edit" class="btn btn-primary">edytuj</a> 
                    {!!Form::open(['action' => ['SetsController@destroy', $set->id], 'method'=> 'POST', 'class' => 'd-inline '])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('usuń', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                    </td>
                </tr> 
            @endforeach
                
            </tbody>
        </table> 
    @else
        <p>Nie masz jeszcze zestawu dodaj nowy.</p>
    @endif
@endsection