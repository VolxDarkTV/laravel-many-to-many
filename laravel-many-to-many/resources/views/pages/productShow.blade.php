@extends('layouts.main-layouts')

@section('head')
    <title>Product Show</title>
@endsection

@section('main')
    <section class="container-fluid">
        <div class="container">
            <h2>Show</h2>
            <div>
                <h6>Name: {{$product -> name}}</h6>
                <h6>Description: {{$product -> description}}</h6>
                <h6>Price: {{$product -> price}}</h6>
                <h6>Weight: {{$product -> weight}}</h6>
            </div>

        </div>
    </section>
@endsection