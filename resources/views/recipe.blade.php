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
            @foreach($recipe as $item)
                <a href="/recipe/{{ $item->id }}" role="button" id="{{"recipe".$item->id}}" >
                <figure class="block">

                <section class="blockpi">
                    <img class="Images_blocks" src="uploads/recipes/{{$item->photo}}">
                </section>
                <section class="line_recipe"></section>
                <section class="Name_recipe">
                    <p class="zag">{{$item->name}}</p>
            </figure>
                </a>
            @endforeach
        </section>
    </section>

@endsection