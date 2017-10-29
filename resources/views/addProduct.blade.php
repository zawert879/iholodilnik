@extends('layouts.app2')
@section('content')
<form action="{{route('productStore')}}" method="post">
    <input type="text" name="name" id="name" placeholder="Укажите название продукта" required>
    <input type="text" name="photo" id="photo" placeholder="ссылка на фото" >
    <select size="" name="id_categoty_prod" id="id_categoty_prod">
        @foreach($category_prods as $category)

        <option selected value="{{$category->id}}"><p>{{$category->name }}</p></option>


        @endforeach



    </select>

    <input type="submit" value="Отправить">
    {!! csrf_field() !!}
</form>
@endsection