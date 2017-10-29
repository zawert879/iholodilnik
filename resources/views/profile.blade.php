@extends('layouts.app2')
@section('content')
    <h1>{{Auth::user()->name}}</h1>
    <img src="/uploads/avatars/{{Auth::user()->photo}}" width="150" alt="">

    <form enctype="multipart/form-data" action="{{Route('userPhoto')}}" method="post">
        <input type="file" name="photo">
        <input type="submit" value="Отправить">
        {!! csrf_field() !!}
    </form>
@endsection