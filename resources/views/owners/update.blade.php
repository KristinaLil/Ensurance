
@extends('layouts.main')
@section('content')

<form action="{{route('owners.update',$owner->id)}}" method="post" class="form-control">
    @csrf
    @method('PUT')
    <div>
    <label class="form-label">Registration number</label>
    <input type="text" name="name" value="{{$owner->name}}">
    </div>
    <div>
    <label class="form-label">Brand</label>
    <input type="text" name="surname" value="{{$owner->surname}}">
    </div>
    <button class="btn btn-success">Update</button>
</form>

@endsection
