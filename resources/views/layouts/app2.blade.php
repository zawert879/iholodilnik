<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <title>iхолодильник</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <link rel="shortcut icon" href=" {{asset('css/images/low.png')}} " type="image/png">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $('form input[type=file]').change(function() {


        var input = $('form input[type=file]')[0];
        if(input.files[0].size>  5000000){
            alert('Максимальный вес файла - 5мб');
            return false;
        }
        return true;
    });
</script>
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
@auth()
    <script>
        function qq(ee){

            var child = ee.childNodes[1];
            if(child.value=='0'){
                ee.style.background='#61ff6a';
                child.value='1'
            }else {
                child.value='0';
                ee.style.background='#fff';
            }
        }
    </script>
@endauth
<body>
<header class="header">
    <section class="Logo">
        <p>iхолодильник</p>
    </section>
    <section class="nav_bar">
        <nav>
            <a href="{{url('/')}}" class="menu_block"><p>Главная</p></a>
            <a href="{{url('/fridge')}}" class="menu_block"><p>Холодильник</p></a>
            <a href="{{url('/recipe')}}" class="menu_block"><p>Рецепты</p></a>
            <a href="{{url('/basket')}}" class="menu_block"><p>Корзина</p></a>
        </nav>
        <nav class="men">
            @auth()

                <a href="javascript:PopUpShow()" class="menu"></a>
                @else
                    <a href="/login" >Войти </a>
                    <a href="/register">Регистрация</a>
                    @endauth
        </nav>
    </section>
    @yield('header')
</header>
<body>
    @yield('content')
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
                            <img class="FotoProf"src="uploads/avatars/{{Auth::user()->photo}}">
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

                    <a class="user_bar_text" href="{{url('/home')}}">Профиль</a>

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
</body>
</html>
