@extends('layouts.app2')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-mg-12">
            <h1>{{$recipe->name}}</h1>
            <div class="col-mg-12">
                @foreach($products as $item)
                    <p>
                        {{$item->name}}
                    </p>
                @endforeach
            </div>
            <div class="col-mg-12">
                @foreach($chapters as $item)
                    <p>
                        <img src="/uploads/recipes/{{$item->photo}}" alt="">
                        {{$item->text}}

                    </p>
                    @endforeach
            </div>



        </div>
    </div>
</div>

@endsection