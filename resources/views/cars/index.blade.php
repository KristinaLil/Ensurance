
@extends('layouts.main')
@section('content')

<a href="{{route('cars.create')}}">Add car</a>

<table class="table">
    <thead>
    <tr>
        <th>Registration number</th>
        <th>Brand</th>
        <th>Model</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($cars as $car)
    <tr>
        <td>{{$car->reg_number}}</td>
        <td>{{$car->brand}}</td>
        <td>{{$car->model}}</td>
        <td><a href="{{route('cars.edit',$car->id)}}">Edit</a></td>
        <td>
            <form action="{{route('cars.destroy',$car->id)}}" method="post">
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
