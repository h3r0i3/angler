@extends('layouts.app')

@section('content')  
    <h2>Lista twoich przyponów</h2>
    <a href="/przypony/create" class="btn btn-success">Dodaj przypon</a> 
    <hr>
    @if(count($leaders)>0)
        <table class="table"> 
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">model żyłki</th>
                    <th scope="col">średnica [mm]</th>
                    <th scope="col">maksymalne obciążenie [kg]</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            @foreach($leaders as $leader)
                <tr>
                    <td scope="row">1</th>
                    <td>{{$leader->model}}</td>
                    <td>{{$leader->size}}</td>
                    <td>{{$leader->weight}}</td>
                    <td>
                    <a href="/przypony/{{$leader->id}}/edit" class="btn btn-primary">edytuj</a> 
                    {!!Form::open(['action' => ['LeadersController@destroy', $leader->id], 'method'=> 'POST', 'class' => 'd-inline '])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('usuń', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                    </td>
                </tr> 
            @endforeach
                
            </tbody>
        </table> 
    @else
        <p>Nie masz jeszcze przyponu dodaj nowy.</p>
    @endif
@endsection