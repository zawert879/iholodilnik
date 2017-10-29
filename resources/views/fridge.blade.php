@extends('layouts/app2')

@section('content')
    @auth()
    @foreach($fridge as $item)
    <figure class="D_">
        <section class="D">
            <img class="Images_blocks" src="uploads/products/{{$item->photo }}">
        </section>
        <section class="D_recipe">
            <p class="D_zag">{{ $item->product_name  }}</p>
            <p class="D_zag">{{ $item->category_name }}</p>
        </section>
    </figure>
    @endforeach
    @else
        <script >
            alert("Войдите чтобы отобразить список ваших продуктов")
        </script>
    @endauth
@endsection