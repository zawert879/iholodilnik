@extends('layouts.app2')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Новый продукт</div>

                <div class="panel-body">
                    <form enctype="multipart/form-data" class="form-horizontal" method="POST" action="{{ route('productStore') }}">
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
                                <input  type="file" class="form-control" name="photo" >
                            </div>
                        </div>


                        <div class="form-group ">
                            <label  class="col-md-4 control-label">Категория</label>
                            <div class="col-md-6">
                                <select size="" class="form-control" name="id_categoty_prod" id="id_categoty_prod">
                                    @foreach($category_prods as $category)
                                        <option selected value="{{$category->id}}"><p>{{$category->name }}</p></option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit"  class="btn btn-success">
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