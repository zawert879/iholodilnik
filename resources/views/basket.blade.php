<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <title>iхолодильник</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" >
    <link rel="shortcut icon" href="{{asset('css/images/low.png')}}" type="image/png">
</head>
<body>
<header class="header">
    <section class="Logo">
        <p>iхолодильник</p>
    </section>
    <section class="nav_bar">


        <nav>

            <a href="/" class="menu_block"><p>Главная</p></a>
            <a href="/" class="menu_block"><p>Холодильник</p></a>
            <a href="/" class="menu_block"><p>Рецепты</p></a>
            <a href="/" class="menu_block"><p>Корзина</p></a>


        </nav>
        <nav class="men">
            <div class="menu"></div>
        </nav>


    </section>

    <section class="Mn">
        <section class="Poisk_recipe">
            <a href="/add">
                <section class="add_images">

                </section>

            </a>
            <span class="add_">Добавить продукт</span>
        </section>

        <nav class="Menu_recipe">
            <section class="Bookmarks_d">
                <div class="Bookmarks"></div>
                <span class="user_bar_text">Bookmarks</span>
            </section>
            <section class="Bookmarks_">
                <div class="Search"></div>
                <span class="user_bar_text">Search</span>
            </section>
            <section class="Bookmarks_">
                <div class="Profile"></div>
                <span class="user_bar_text">Profile</span>
            </section>
        </nav>

</header>
<main class="main">

    <form action="{{route('productCard')}}" method="post">

    @foreach($products as $product)

        <figure class="D_">
            <input type="hidden" name="{{$product->product_id}}" value="0">
            <section class="D">
                <img class="Images_blocks" src="uploads/products/{{$product->photo }}">
            </section>

            <section class="D_recipe">

                <p class="D_zag">{{ $product->name  }}</p>
                <p class="D_zag">{{ $product->category_name }}</p>
            </section>
        </figure>


    @endforeach
        {!! csrf_field() !!}
        <input type="submit" value="asdsad">
    </form>

    <section id="list">

    </section>



    </section>
</main>

</body>
</html>
