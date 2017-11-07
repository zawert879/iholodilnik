@extends('layouts.app2')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-mg-12">
            <h1>{{$recipe->name}}</h1>
            <div class="col-mg-12">
                @foreach($composition as $item)
                    <p>
                        {{$item->id_product}}
                    </p>
                @endforeach
            </div>
            <div class="col-mg-12">
                @foreach($charters as $item)
                    <p>
                        <img src="/uploads/recipes/{{$item->photo}}" alt="">
                        {{$item->text}}

                    </p>
                    @endforeach
            </div>


{{--            @foreach($products as $prod)--}}
{{--                <label >{{$prod->name}}</label>--}}
            {{--@endforeach--}}


        </div>
    </div>
</div>

@endsection