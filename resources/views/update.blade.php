@extends('template.main')

@section('content')
    <h1 class="text-center">Update</h1>
    <form action="/updateIngredient" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" name="name" class="form-control" value="{{$data->name}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Quantity (gr)</label>
            <input type="text" name="quantity" class="form-control" value="{{$data->name}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Photo</label>
            <input type="text" name="src" class="form-control" value="{{$data->name}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection