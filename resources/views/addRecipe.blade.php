@extends('layouts.app2')
<script>
    function clone() {
        var eeq = $("#amount").val();
        eeq++;
        $("#amount").val(eeq);

        $("#cloneform").clone().removeAttr('hidden').appendTo("#cloneto");
        $("#cloneform").find('.selectmyitem').attr('name','item_'+eeq);

    }


</script>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Новый рецепт</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('ricipeStore') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="col-md-4 control-label">Название</label>

                                <div class="col-md-6">
                                    <input  type="text" class="form-control" name="name" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-md-4 control-label">фото</label>

                                <div class="col-md-6">
                                    <input  type="text" class="form-control" name="photo">
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-md-4 control-label">Категория</label>

                                <div class="col-md-6">
                                    <select name="category" class="form-control">
                                        @foreach($category_recipes as $item)
                                            <option value="{{$item->name}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label class="col-md-4 control-label">описание</label>

                                <div class="col-md-6">
                                    <textarea name="description" class="form-control"  rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button onclick="clone()" type="button" class="btn btn-success">
                                        +
                                    </button>
                                </div>
                            </div>
                            <div id="cloneto">
                            </div>
                            <div id="cloneform" class="form-group" hidden="hidden">
                                <div class="col-md-4">
                                    <select class="form-control">

                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control selectmyitem">
                                        <option value="4"> asdasd</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-success">
                                        Сохранить
                                    </button>
                                </div>
                            </div>

                            <input type="hidden" id="amount" name="amount" value="0">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection