@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Профиль</div>

                <div class="panel-body">
                    <h1>{{Auth::user()->name}}</h1>
                    <img src="/uploads/avatars/{{Auth::user()->photo}}" width="150" alt="">

                    <form enctype="multipart/form-data" accept="image/*" action="{{Route('userPhoto')}}" method="post">
                        <input type="file" name="photo" onchange="changefile(this)">
                        <input type="submit" value="Отправить">
                        {!! csrf_field() !!}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
