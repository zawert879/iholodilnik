@extends('layouts.app2')
@section('content')
    <section class="container">
      <ul class="NewMenuBlock">


    <li class="Newblock">
      <section class="blockpi">
        <span class="NewblockText">Лучшие рецепты</span>
        <img class="NewblockImages" src="{{asset('uploads/products/default.jpg')}}">
      </section>
    </li>

      </li>
<li class="NewblockMenu"> </li>
    </ul>
    <ul class="Newmenu" >


    <li class="Newblock">
      <section class="blockpi">
        <span class="Newblock_text">Лучшие рецепты</span>
        <img class="Newblock_images" src="{{asset('uploads/products/default.jpg')}}">
      </section>
     
      
    </li>


    <li class="Newblock">
      <section class="blockpi">
        <span class="Newblock_text">Лучшие рецепты</span>
         <img class="Newblock_images" src="{{asset('uploads/products/default.jpg')}}">
      </section>
   
      
    </li>


    <li class="Newblock">
      <section class="blockpi">
        <span class="Newblock_text">Лучшие рецепты</span>

        <img class="Newblock_images" src="{{asset('uploads/products/default.jpg')}}">

      </section>
      <section >
        
      </section>
    
     
      </li>
<li class="Newblock_menu"> </li>
    </ul>
    <ul class="ColorBlocks">
      <li class="BlockColor BlockOne"><span class="ClockColorText">Лучшие авторы недели</span></li>

    <li class="BlockColor BlockTwo">
      <section class="BlockDColor">
        <img class="BlockColorImages" src="{{asset('uploads/products/default.jpg')}}">
        <span class="BloksColorText">Тыква</span>
        <span class="BloksColorTextNumber">№1</span>
        
      </section>
    </li>

      <li class="BlockColor BlockThree">
        <section class="BlockDColor">
        <img class="BlockColorImages" src="{{asset('uploads/products/default.jpg')}}">
        <span class="BloksColorText">Тыква</span>
        <span class="BloksColorTextNumber">№2</span>
       
      </section>
    </li>


      <li class="BlockColor BlockFour">
        <section class="BlockDColor">
        <img class="BlockColorImages" src="{{asset('uploads/products/default.jpg')}}">
        <span class="BloksColorText">Тыква</span>
        <span class="BloksColorTextNumber">№3</span>
       
      </section>
    </li>
  </ul>
    <section class="SpisokRecepie">
      <section class="RecipesWeeks">
        
      <span class="RecipesWeeksZag">Рецепты недели</span>
     
      </section>
 <ul class="leftmenu">

    <li class="block">
      <section class="blockpi">
        <img class="Images_blocks" src="{{asset('uploads/products/default.jpg')}}">
      </section>
     
      <section class="Bacground_block">
      <section class="Name_recipe">
        <p class="zag">Куриные крылышки запеченые</p>
      </section>
    </section>
    </li>


    <li class="block">
      <section class="blockpi">
         <img class="Images_blocks" src="{{asset('uploads/products/default.jpg')}}">
      </section>
    
      <section class="Bacground_block">
      <section class="Name_recipe">
        <p class="zag">Куриные крылышки запеченые</p>
      </section>
    </section>
    </li>


    <li class="block">
      <section class="blockpi">
        <img class="Images_blocks" src="{{asset('uploads/products/default.jpg')}}">
      </section>
     
      <section class="Bacground_block">
      <section class="Name_recipe">
        <p class="zag">Куриные крылышки запеченые</p>
        </section>
        </section>
      </li>

    </ul>

    <section class="RecipesWeeks">
        
      <span class="RecipesWeeksKZag"><a href="">Больше рецептов </a></span>

     
      </section>
    </section>
    </section>
@endsection