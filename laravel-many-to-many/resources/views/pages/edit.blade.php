@extends('layouts.main-layouts')

@section('head')
    <title>
        Create Product
    </title>
@endsection

@section('main')
    
    <section class="container-fluid">
        <div class="container">

            <h2>Create</h2>
            <form method="post" action="{{ route('product.update', $product) }}">
                @csrf
                <label for="name">name</label>
                <input type="text" name="name" id="name" value="{{ $product -> name }}">
                <br>
                <label for="description">description</label>
                <input type="text" name="description" id="description" value="{{ $product -> description }}">
                <br>
                <label for="price">price</label>
                <input type="number" name="price" id="price" value="{{ $product -> price }}">
                <br>
                <label for="weight">weight</label>
                <input type="number" name="weight" id="weight" value="{{ $product -> weight }}">
                <br>
                {{-- Selected --}}
                <label for="typology">Typology</label>
                <select name="typology" id="typology">
                    @foreach ($typologies as $typology)

                        <option 
                            value="{{ $typology -> id }}" 
                            @if ($product -> typology -> id == $typology -> id)
                                selected
                            @endif
                        >{{ $typology -> name }}</option>

                    @endforeach
                </select>
                <br>
                {{-- CheckBox --}}
                @foreach ($categories as $category)
                    <input 
                    type="checkbox" 
                    name="categories[]" 
                    id="{{ $category -> id }}" 
                    value="{{ $category -> id }}"
                    @foreach ($product -> categories as $productCategory)

                        @if ($productCategory -> id == $category -> id)
                            checked
                        @endif
                        
                    @endforeach
                    >
                    
                    <label for="{{ $category -> id }}">{{ $category -> name }}</label>
                    <br>
                @endforeach
                <input type="submit" value="Create">

            </form>

        </div>
    </section>

@endsection