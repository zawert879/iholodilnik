@extends('layouts.app2')
<script>
    function clone() {
        $("#cloneform").clone().removeAttr('hidden').appendTo("#cloneto");

    }
    function clone2() {
        $("#cloneform2").clone().removeAttr('hidden').appendTo("#cloneto2");
//        $("#cloneform2").find('.selectmyitem').attr('name','item[]');
//        $("#cloneform2").find('.selectmyamount').attr('name','itemAmount[]');
    }


</script>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Новый рецепт</div>

                    <div class="panel-body">
                        <form enctype="multipart/form-data" class="form-horizontal" method="POST" action="{{ route('ricipeStore') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="col-md-2 control-label">Название</label>

                                <div class="col-md-10">
                                    <input  type="text" class="form-control" name="name" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-md-2 control-label">фото</label>

                                <div class="col-md-10">
                                    <input  type="file" class="form-control" name="photo">
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-md-2 control-label">Категория</label>

                                <div class="col-md-10">
                                    <select name="category" class="form-control">
                                        @foreach($category_recipes as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label class="col-md-2 control-label">описание</label>

                                <div class="col-md-10">
                                    <textarea name="description" class="form-control"  rows="5"></textarea>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <label class="col-md-4 control-label">Этап готовки</label>
                                    <button onclick="clone2()" type="button" class="btn btn-success">
                                        +
                                    </button>
                                </div>
                            </div>
                            <div id="cloneto2">
                            </div>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <label class="col-md-4 control-label">ингридиенты</label>
                                    <button onclick="clone()" type="button" class="btn btn-success">
                                        +
                                    </button>
                                </div>
                            </div>
                            <div id="cloneto">
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-success">
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

    <div id="cloneform" class="form-group" hidden="hidden">
        <div class="col-md-4">
            <select class="form-control">
                @foreach($category_prods as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <select class="form-control" name="item[]">
                @foreach($products as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control" name="itemAmount[]" >
        </div>
    </div>

    <div class="form-group" id="cloneform2" hidden="hidden">
        <label class="col-md-2 control-label">Готовка</label>
        <div class="col-md-10">
            <input type="text" name="charter_text[]" class="form-control">
        </div>
        <label class="col-md-2 control-label">фото</label>
        <div class="col-md-10">
            <input type="file" class="form-control" name="charter_photo[]">
        </div>
        <label class="col-md-2 control-label">таймер</label>
        <div class="col-md-10">
            <input type="time" class="form-control" name="charter_timer[]">
        </div>
    </div>

@endsection