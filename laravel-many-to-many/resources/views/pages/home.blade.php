@extends('layouts.main-layouts')

@section('head')
    <title>Home</title>
@endsection

@section('main')
<section class="container-fluid">
    <div class="container">
            <h1>Home</h1>
            <a href="{{ route('product.create') }}">create</a>
            @foreach ($categories as $category)
                <h2>[{{$category -> id}}]{{$category -> name}}</h2>
                <div class="row row-cols-4">
                    @foreach ($category -> products as $product)
                        <li class="card">
                            <div>
                                [{{ $product -> id }}] {{ $product -> name }}
                                - Digital: {{$product -> typology -> digital ? 'Yes' : 'No'}}
                            </div>
                            <div class="d-flex">
                                <a class="btn btn-success rounded-pill" href="{{ route('product.show', $product) }}">Go</a> 
                            </div>
                        </li> 
                   @endforeach
                </div>
            @endforeach
        </div>
    </section>
@endsection