
@extends('layouts.app')
@section('content')
    <div class="card-header">Owners</div>
    <div class="body">

        <a href="{{route('cars.index')}}">Cars page</a>
<a href="{{route('owners.create')}}">Add owner</a>

<table class="table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Surname</th>
        <th>Owned cars</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($owners as $owner)
    <tr>
        <td>{{$owner->name}}</td>
        <td>{{$owner->surname}}</td>
        <td>
            @foreach($owner->car as $car)
                [{{$car->brand}}
                {{$car->model}}]
            @endforeach
        </td>
        <td><a href="{{route('owners.edit',$owner->id)}}">Edit</a></td>
        <td>
            <form action="{{route('owners.destroy',$owner->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

@endsection
