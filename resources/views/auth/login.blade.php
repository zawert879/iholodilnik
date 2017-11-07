@extends('layouts.app2')

@section('content')
<div class="container" id="LoginBlock">
    <div class="row ">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <section class="panel-heading">Авторизоваться</section>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                             <label for="email" class="col-md-4 control-label">E-Mail Адрес</label>

                            <div class="col-md-6">

                                <section class="Zn">
                                     <section class="Zn_imagesEmail"></section>
                                </section>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Пароль<a class="PassText" href="{{ route('password.request') }}">Забыли пароль?</a></label>

                            <div class="col-md-6">
                                <section class="Zn">
                                   <section class="Zn_imagesKey"></section>
                                </section>
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Запомнить меня
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Войти
                                </button>

                            </div>
                            
                        </div>
                        
                    </form>

                </div>
            </div>
        </div>
    </div>
    <section class="BlockRegister">
    <p>У вас еще нет логина на сайте?<a class="PassText" href="/register">Зарегистрируйтесь</a></p>
    </section>
</div>
@endsection
