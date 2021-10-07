@extends('layout')

@section('edit')

    <h2>Edit a recipe</h2>
    <form id="edit-form" action="/recipes/{{$recipe->id}}" method="POST">
        @method('PUT')
        @csrf
        <div class="edit">
            <label for="name">Dish name:</label>
            <input type="text" id="name" name="name" value="{{$recipe->name}}"><br><br>

            <label for="preparation_time">Prep time:</label>
            <input type="text" id="preparation_time" name="preparation_time" value="{{$recipe->preparation_time}}"><br><br>

            <label for="total_price">Price</label>
            <input type="float" id="total_price" name="total_price" value="{{$recipe->total_price}}"><br><br>

            <label for="url">URL:</label>
            <input type="text" id="url" name="url" value="{{$recipe->url}}"><br><br>

            <label for="vegetarian">Vegetarian:</label>
            <select id="vegetarian" name="vegetarian">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>

            <button class="btn-update btn btn-three">Update</button>
            <button class="btn-back btn btn-three" href="/recipes">Go back</button>
        </div>
    </form>
@endsection
