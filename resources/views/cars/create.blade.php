
@extends('layouts.main')
@section('content')
    <div class="card-header">Cars</div>
    <div class="body">

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
    <label for="" class="form-label">Owner</label>
    <select class="form-control" name="owner_id">
        <option selected>Select</option>
        @foreach($owners as $owner)
            <option value="{{$owner->id}}">{{$owner->name}} {{$owner->surname}}</option>
        @endforeach
    </select>
    <button class="btn btn-success">Add</button>
    <a class="btn btn-success mx-3 float-end" href="{{ route('cars.index') }}">Go Back</a>
</form>

@endsection
