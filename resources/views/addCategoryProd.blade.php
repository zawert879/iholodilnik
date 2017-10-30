@extends('layouts.app2')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Новая категория</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('categoryProdStore') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="col-md-4 control-label">Название</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="name" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-md-4 control-label">Ссылка на фото</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="photo" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="button" class="btn btn-success">
                                    Сохранить
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection