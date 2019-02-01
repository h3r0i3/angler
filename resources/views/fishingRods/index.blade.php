@extends('layouts.app')

@section('content')  
    <h2>Lista twoich wędek</h2>
    <a href="/wedki/create" class="btn btn-success">Dodaj wędkę</a> 
    <hr>
    @if(count($fishing_rods)>0)
        <table class="table"> 
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">model wędki</th>
                    <th scope="col">data dodania</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            @foreach($fishing_rods as $fishing_rod)
                <tr>
                    <td scope="row">1</th>
                    <td>{{$fishing_rod->model}}</td>
                    <td>{{$fishing_rod->created_at}}</td>
                    <td>
                    <a href="/wedki/{{$fishing_rod->id}}/edit" class="btn btn-primary">edytuj</a> 
                    {!!Form::open(['action' => ['FishingRodController@destroy', $fishing_rod->id], 'method'=> 'POST', 'class' => 'd-inline '])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('usuń', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                    </td>
                </tr> 
            @endforeach
                
            </tbody>
        </table> 
    @else
        <p>Nie masz jeszcze wędki dodaj nową.</p>
    @endif
@endsection