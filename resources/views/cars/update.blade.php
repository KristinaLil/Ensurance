
@extends('layouts.main')
@section('content')
    <div class="card-header">Cars</div>
    <div class="body">

<form action="{{route('cars.update',$car->id)}}" method="post" class="form-control">
    @csrf
    @method('PUT')
    <div>
    <label class="form-label">Registration number</label>
    <input type="text" name="reg_number" value="{{$car->reg_number}}">
    </div>
    <div>
    <label class="form-label">Brand</label>
    <input type="text" name="brand" value="{{$car->brand}}">
    </div>
    <div>
    <label class="form-label">Model</label>
    <input type="text" name="model" value="{{$car->model}}">
    </div>
    <div>
        <label for="owner" class="form-label">Owner</label>
        <select id="owner" class="form-control">
            @foreach($owners as $owner)
                <option value="{{$owner->id}}" {{$car->owner_id == $owner->id ? 'selected' : ''}}>{{ $owner->name }} {{ $owner->surname }}</option>
            @endforeach
        </select>
    </div>
    <button class="btn btn-success">Update</button>
    <a class="btn btn-success mx-3 float-end" href="{{ route('cars.index') }}">Go Back</a>
</form>

@endsection
