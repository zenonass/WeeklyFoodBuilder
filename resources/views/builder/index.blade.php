@extends('layout')

@section('builders')

    <div class="container">
        <h2>Weekly Food Builder</h2>
        <ul class="responsive-table">
            <li class="table table-header">
                <div class="col col-1">Day</div>
                <div class="col col-2">Dish name</div>
                <div class="col col-3">Prep time</div>
                <div class="col col-4">Price</div>
                <div class="col col-5">Vegetarian</div>
            </li>

            @foreach($recipes as $key =>$recipe)
                <li class="table table-row">
                    <div class="col col-1">{{$days[$key]}}</div>
                    <div class="col col-2">{{$recipe->name}}</div>
                    <div class="col col-3">{{$recipe->preparation_time}}</div>
                    <div class="col col-4">{{$recipe->total_price}} €</div>
                    <div class="col col-5">{{$recipe->vegetarian}}</div>
                </li>
            @endforeach

        </ul>
    </div>
@endsection
