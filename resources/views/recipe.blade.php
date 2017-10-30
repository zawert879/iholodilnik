@extends('layouts.app2')
@section('header')
    <section class="Mn">
        <section class="Poisk_recipe">
            <a href="/add/recipe">
                <section class="add_images">
                </section>
            </a>
            <span class="add_">Добавить рецепт</span>
        </section>
    </section>
@endsection

@section('content')
    <section class="container">

        <section class="leftmenu">
            {{--@foreach()--}}
            <figure class="block">
                <section class="blockpi">
                    <img class="Images_blocks" src="{{asset('uploads/products/default.jpg')}}">
                </section>
                <section class="line_recipe"></section>
                <section class="Name_recipe">


                    <p class="zag">Куриные крылышки запеченые</p>
            </figure>
            {{--@endforeach--}}
        </section>

    </section>

@endsection