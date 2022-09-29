
@extends('layouts.main')
@section('content')

<form action="{{route('cars.store')}}" method="post" class="form-control">
    @csrf
    <div>
        <label class="form-label">Registration number</label>
        <input type="text" name="reg_number"> <br>
    </div>
    <div>
        <label class="form-label">Brand</label>
        <input type="text" name="brand"> <br>
    </div>
    <div>
        <label class="form-label">Model</label>
        <input type="text" name="model"> <br>
    </div>
    <button class="btn btn-success">Add</button>

</form>

@endsection
