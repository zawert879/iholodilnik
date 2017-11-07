@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Профиль</div>

                <div class="panel-body">
                    <section class="ProfImage">
                    <p>{{Auth::user()->name}}</p>
                    <img class="RadiusImage" src="/uploads/avatars/{{Auth::user()->photo}}" width="150" alt="">
                    </section>
                    
                    <form class="ProfButton" enctype="multipart/form-data" accept="image/*" action="{{Route('userPhoto')}}" method="post">
                        <input class="btn" type="file" name="photo" onchange="changefile(this)">
                        <input class="btn ButtonSize" type="submit" value="Отправить">
                        {!! csrf_field() !!}
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
