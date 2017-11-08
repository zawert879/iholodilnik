<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>

<h1>{{$recipe->name}}</h1>
<div class="col-mg-12">
    @foreach($products as $item)
        <p>
            {{$item->name}}
        </p>
    @endforeach
</div>
<div class="col-mg-12">
    @foreach($chapters as $item)
        <p>
            <img src="/uploads/recipes/{{$item->photo}}" alt="">
            {{$item->text}}

        </p>
    @endforeach
</div>

</body>
</html>