@extends('layouts.app')

@section('content')
    <h2 class="text-center">{{$town->name}}</h2>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/town/{{$town->id}}/edit" role="button">Edit</a>
        </div>
        <div class="row">
            {{Form::open(['route' => ['town.destroy', $town->id], 'method' => 'DELETE'])}}
                {{Form::hidden('id', $town->id)}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {{Form::close()}}
        </div>
    </div>    
@endsection