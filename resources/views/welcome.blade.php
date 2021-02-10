@extends('template.main')

@section('content')
    <div class="my-4">
        <h1 class="text-center">Ingredients List</h1>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($ingredients as $item)
                <tr>
                    <th scope="row">{{$item->name}}</th>
                    <td>
                        <a class="btn btn-success" href="/ingredient-list/{{$item->id}}">Details</a>
                    </td>
                    <td>
                        <form action="/deleteIngredient/{{$item->id}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    <td>
                        <form action="/updateIngredient/{{$item->id}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-info">Update</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="my-4">
        <h1 class="text-center">Add Ingredients</h1>

        <form action="/addIngredient" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Quantity (gr)</label>
                <input type="text" name="quantity" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Src</label>
                <input type="text" name="src" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection