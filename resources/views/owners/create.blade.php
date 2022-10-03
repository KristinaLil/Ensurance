
@extends('layouts.main')
@section('content')
    <div class="card-header">Owners</div>
    <div class="body">

<form action="{{route('owners.store')}}" method="post" class="form-control">
    @csrf
    <div>
        <label class="form-label">Name</label>
        <input type="text" name="name"> <br>
    </div>
    <div>
        <label class="form-label">Surname</label>
        <input type="text" name="surname"> <br>
    </div>
    <button class="btn btn-success">Add</button>

</form>

@endsection
