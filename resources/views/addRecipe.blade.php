@extends('layouts.app2')
@section('content')
<form action="{{route('recipeStore')}}" method="post">
    <input type="text" name="name"  placeholder="Укажите новую катигорию" required>
    <input type="text" name="photo" id="photo" placeholder="ссылка на фото" >
    <input type="submit" value="Отправить">
    {!! csrf_field() !!}
</form>
@endsection