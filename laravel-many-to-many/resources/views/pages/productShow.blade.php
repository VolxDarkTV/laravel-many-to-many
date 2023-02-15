@extends('layouts.main-layouts')

@section('head')
    <title>Product Show</title>
@endsection

@section('main')
    <section class="container-fluid">
        <div class="container">
            <h2>Show</h2>
            <div>
                <h6>{{$product -> name}}</h6>
                <h6>{{$product -> description}}</h6>
                <h6>{{$product -> price}}</h6>
                <h6>{{$product -> weight}}</h6>
            </div>

        </div>
    </section>
@endsection