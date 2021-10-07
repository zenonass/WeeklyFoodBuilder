@extends('layout')

@section('create')

    <h2>Add a new recipe</h2>
    <form id="edit-form"  action="/recipes" method="POST">

        @csrf
        <div class="edit">
            <label for="name">Dish name:</label>
            <input type="text" id="name" name="name"><br><br>

            <label for="preparation_time">Prep time:</label>
            <input type="text" id="preparation_time" name="preparation_time"><br><br>

            <label for="total_price">Price</label>
            <input type="float" id="total_price" name="total_price"><br><br>

            <label for="url">URL:</label>
            <input type="text" id="url" name="url"><br><br>

            <label for="vegetarian">Vegetarian:</label>
            <input type="text" id="vegetarian" name="vegetarian"><br><br>

            <button class="btn-update btn btn-three">Create</button>
            <a href="/recipes" class="btn-back btn btn-three" >Go back</a>

        </div>
    </form>
@endsection
