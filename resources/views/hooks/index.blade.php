@extends('layouts.app')

@section('content')  
    <h2>Lista twoich haczyków</h2>
    <a href="/haczyki/create" class="btn btn-success">Dodaj haczyk</a> 
    <hr>
    @if(count($hooks)>0)
        <table class="table"> 
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">model</th>
                    <th scope="col">rozmiar</th>
                    <th scope="col">maksymalne obciążenie</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            @foreach($hooks as $hook)
                <tr>
                    <td scope="row">1</th>
                    <td>{{$hook->model}}</td>
                    <td>{{$hook->size}}</td>
                    <td>{{$hook->weight}}</td>
                    <td>
                    <a href="/haczyki/{{$hook->id}}/edit" class="btn btn-primary">edytuj</a> 
                    {!!Form::open(['action' => ['HooksController@destroy', $hook->id], 'method'=> 'POST', 'class' => 'd-inline '])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('usuń', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                    </td>
                </tr> 
            @endforeach
                
            </tbody>
        </table> 
    @else
        <p>Nie masz jeszcze haczyków dodaj nowy.</p>
    @endif
@endsection