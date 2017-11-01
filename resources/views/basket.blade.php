@extends('layouts.app2')
@section('header')
    <section class="Mn">
        <section class="Poisk_recipe">
            <a href="/add/Product">
                <section class="add_images">
                </section>
            </a>
            <span class="add_">Добавить продукт</span>
        </section>
        <section class="Poisk_recipe">
            <a href="/add/categoryprod">
                <section class="add_images">
                </section>
            </a>
            <span class="add_">Добавить рецепт</span>
        </section>
    </section>
@endsection
@section('content')
    <form action="{{route('productCard')}}" method="post" >

    @foreach($products as $product)

        <figure class="D_"  onclick="qq(this)">
            <input type="hidden" name="{{$product->product_id}}" value="0">
            <section class="D">
                <img class="Images_blocks" src="uploads/products/{{$product->photo }}">
            </section>
            <section class="D_recipe">
                <p class="D_zag">{{ $product->name  }}</p>
                <p class="D_zag">{{ $product->category_name }}</p>
            </section>
        </figure>


    @endforeach
        {!! csrf_field() !!}
        @auth()
        <input class="btn btn-success" type="submit" value="В холодильник">
            @endauth
    </form>
    @endsection