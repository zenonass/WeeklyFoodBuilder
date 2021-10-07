@extends('layout')

@section('recipes')


    <div class="container">
        <h2>Recipes</h2>
        <ul class="responsive-table">
            <li class="table table-header">
                <div class="col col-1">No.</div>
                <div class="col col-2">Dish name</div>
                <div class="col col-3">Prep time</div>
                <div class="col col-4">Price</div>
                <div class="col col-5">Vegetarian</div>
                <div class="col col-6"></div>
            </li>
            @foreach($recipes as $recipe)
                <li class="table table-row">
                    <div class="col col-1">{{$recipe->id}}</div>
                    <div class="col col-2">{{$recipe->name}}</div>
                    <div class="col col-3">{{$recipe->preparation_time}}</div>
                    <div class="col col-4">{{$recipe->total_price}} €</div>
                    <div class="col col-5">{{$recipe->vegetarian}}</div>
                    <div class="col col-6"><a id="edit-icon"href="/recipes/{{$recipe->id}}/edit"><i class='far fa-edit'></i></a>
                        <form action="/recipes/{{$recipe->id}}" method="POST" style="display: inline;">
                            @method('DELETE')
                            @csrf
                            <button class="btn-delete"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="btn-add-wrapper">
            <a href="/recipes/create"><button class="btn-add btn btn-three">Add new</button></a>
        </div>
        {{$recipes->links()}}
    </div>
@endsection
