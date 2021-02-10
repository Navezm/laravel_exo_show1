@extends('template.main')

@section('content')
    <a class="btn btn-outline-secondary mt-2" href="/">Back to main page</a>
    <h1 class="text-center">{{$show->name}}</h1>
    <div class="d-flex justify-content-center my-5">
        <div class="card text-center" style="width: 18rem;">
            <img src="{{asset('img/'.$show->src)}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$show->name}}</h5>
                <p class="card-text">{{$show->quantity}}gr</p>
                <form action="/deleteIngredient/{{$show->id}}" method="POST">
                    @csrf
                    <button href="/" type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection