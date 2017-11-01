@extends('layouts.app2')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-mg-12">
        <h1>{{$recipe->name}}</h1>
            @foreach($products as $prod)
                <label >{{$prod->name}}</label>
            @endforeach


            <?php
            $result = explode("\r\n", $recipe->text);
//            dd($result);
            ?>
            <p>
                @foreach($result as $item)
                    {{$item}} <br>
                @endforeach
            </p>

        </div>
    </div>
</div>

@endsection