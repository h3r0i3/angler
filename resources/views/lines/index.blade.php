@extends('layouts.app')

@section('content')  
    <h2>Lista twoich żyłek</h2>
    <a href="/zylki/create" class="btn btn-success">Dodaj żyłkę</a> 
    <hr>
    @if(count($lines)>0)
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
            @foreach($lines as $line)
                <tr>
                    <td scope="row">1</th>
                    <td>{{$line->model}}</td>
                    <td>{{$line->size}}</td>
                    <td>{{$line->weight}}</td>
                    <td>
                    <a href="/zylki/{{$line->id}}/edit" class="btn btn-primary">edytuj</a> 
                    {!!Form::open(['action' => ['LinesController@destroy', $line->id], 'method'=> 'POST', 'class' => 'd-inline '])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('usuń', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                    </td>
                </tr> 
            @endforeach
                
            </tbody>
        </table> 
    @else
        <p>Nie masz jeszcze żyłki dodaj nową.</p>
    @endif
@endsection