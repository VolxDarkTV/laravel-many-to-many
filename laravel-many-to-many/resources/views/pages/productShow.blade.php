@extends('layouts.main-layouts')

@section('head')
    <title>Product Show</title>
@endsection

@section('main')
    <section class="container-fluid">
        <div class="container">
            <h2>Show</h2>
            <span>{{$product -> name}}</span>
        </div>
    </section>
@endsection