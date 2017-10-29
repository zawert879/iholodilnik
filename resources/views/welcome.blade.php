
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <title>iхолодильник</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <link rel="shortcut icon" href=" {{asset('css/images/low.png')}} " type="image/png">
</head>
<script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
<script>
    $(document).ready(function(){
        PopUpHide();
    });
    function PopUpShow(){
        $("#popup1").show();
    }
    function PopUpHide(){
        $("#popup1").hide();
    }
</script>
<body>
<header class="header">
    <section class="Logo">
        <p>iхолодильник</p>
    </section>
    <section class="nav_bar">


        <nav>

            <a href="index.html" class="menu_block"><p>Главная</p></a>
            <a href="index.html" class="menu_block"><p>Холодильник</p></a>
            <a href="index.html" class="menu_block"><p>Рецепты</p></a>
            <a href="{{url('/basket')}}" class="menu_block"><p>Корзина</p></a>


        </nav>
        <nav class="men">
            @auth()

            <a href="javascript:PopUpShow()" class="menu"></a>
                @else
                    <a href="/home" >Войти</a>
                @endauth
        </nav>


    </section>

    <section class="Mn">

        <section class="Poisk_recipe">
            <form action="" method="">
                <select size="" class="Block_Search">
                    <option value="Категория"><p>Категория</p></option>
                    <option value="Категория"><p>Категории</p></option>
                    <option value="Категория"><p>Категории</p></option>
                    <option value="Категория"><p>Категории</p></option>
                </select>

                <select size="" class="Block_Search">
                    <option><p>Кухня</p></option>
                    <option><p>Категории</p></option>
                    <option><p>Категории</p></option>
                    <option><p>Категории</p></option>
                </select>
                <select size="" class="Block_Search">
                    <option><p>Меню</p></option>
                    <option><p>Категории</p></option>
                    <option><p>Категории</p></option>
                    <option><p>Категории</p></option>
                </select>

            </form>
            <section class="Bookmarks_">
                <div class="Ifrukt"></div>
                <span class="user_bar_text">Ингредиенты</span>
            </section>
        </section>



    </section>
</header>

<main class="main">

    <section class="container">

        <section class="leftmenu">

            <figure class="block">

                <section class="blockpi">
                    <img class="Images_blocks" src="images/shutterstock.jpg">
                </section>
                <section class="line_recipe"></section>
                <section class="Name_recipe">

                    <p class="zag">Куриные крылышки запеченые</p>
            </figure>


            <figure class="block">

                <section class="blockpi">
                    <img class="Images_blocks" src="images/shutterstock.jpg">
                </section>
                <section class="line_recipe"></section>


                <section class="Name_recipe">

                    <p class="zag">Куриные крылышки запеченые</p>
                </section>
            </figure>



            <figure class="block">

                <section class="blockpi">
                    <img class="Images_blocks" src="images/shutterstock.jpg">
                </section>
                <section class="line_recipe"></section>
                <section class="Name_recipe">

                    <p class="zag">Куриные крылышки запеченые</p>
            </figure>

        </section>

    </section>

    </section>

    @auth()
    <div class="b-popup" id="popup1">

        <section class="b-popup-content">
            <a href="javascript:PopUpHide()">
                <span class="Close_">Close</span>
            </a>
        </section>

        <section class="Profile_">
            <section class="Profile_block">
                <section class="Foto_profile">

                </section>

                <span class="Text_profile">{{Auth::user()->name}}</span>
            </section>
        </section>

        <section class="Menu_blocks">
            <div class="Bookmarks"></div>
            <span class="user_bar_text">Закладки</span>
        </section>

        <section class="Menu_blocks">
            <div class="Search"></div>
            <span class="user_bar_text">Поиск</span>
        </section>

        <section class="Menu_blocks">
            <div class="Profile"></div>

                <a class="user_bar_text" href="{{url('user')}}">Профиль</a>

        </section>
        <section class="Menu_blocks">
            <div class="Black_cpisok"></div>
            <span class="user_bar_text">Черный список</span>
        </section>
        <section class="Menu_blocks">
            <div class="Ifrukt_cpisok"></div>
            <span class="user_bar_text">Любимые продукты</span>
        </section>

        <section class="Menu_blocks">
            <div class="Ifrukt_cpisok"></div>
            <a class="user_bar_text" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                Выйти
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </section>

    </div>

        @endauth
</main>

</body>
</html>
