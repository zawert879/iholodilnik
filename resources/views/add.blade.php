<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="{{route('productStore')}}" method="post">
    <input type="text" name="name" id="name" placeholder="Укажите название продукта" required>
    <input type="text" name="photo" id="photo" placeholder="ссылка на фото" >
    <select size="" name="id_categoty_prod" id="id_categoty_prod">
        <option selected value="1"><p>овощи</p></option>
        <option value="2"><p>фрукты</p></option>

    </select>
    <input type="submit" value="Отправить">
    {!! csrf_field() !!}
</form>
</body>
</html>