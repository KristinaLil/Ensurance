
@extends('layouts.main')
@section('content')

<form action="{{route('cars.update',$car->id)}}" method="post" class="form-control">
    @csrf
    @method('PUT')
    <div>
    <label class="form-label">Registration number</label>
    <input type="text" name="reg_number" value="{{$car->brand}}">
    </div>
    <div>
    <label class="form-label">Brand</label>
    <input type="text" name="brand" value="{{$car->brand}}">
    </div>
    <div>
    <label class="form-label">Model</label>
    <input type="text" name="model" value="{{$car->model}}">
    </div>
    <button class="btn btn-success">Update</button>
</form>

@endsection
