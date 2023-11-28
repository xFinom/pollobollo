<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Pollo Bollo - Contrataciones</title>
    <link rel="stylesheet preload" as="style" href="{{asset('css/preload.min.css')}}" />
    <link rel="stylesheet preload" as="style" href="{{asset('css/icomoon.css')}}" />
    <link rel="stylesheet preload" as="style" href="{{asset('css/libs.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/product3.min.css')}}" />


</head>
<body>

<x-main-header></x-main-header>

<ul class="breadcrumbs">
    <li>
        <a class="link" href="/">Inicio</a>
    </li>

    <li>
        <span>Renta de Botargas</span>
    </li>
</ul>
<main class="item">
    <!--  product page main content start  -->
    <div class="container">
        <div class="item_wrapper">
            @php
                $imageArray = [
                    'botarga/a.jpg',
                    'botarga/b.jpg',
                    'botarga/c.jpeg',
                    'botarga/d.jpg',
                ];
            @endphp
            <x-product-images :images="$imageArray"></x-product-images>

            <x-product-info></x-product-info>

            <x-product-description></x-product-description>
        </div>
    </div>
    <!--  product page main content end  -->
    <x-product-suggestions></x-product-suggestions>
</main>

<x-product-footer></x-product-footer>

<x-product-cart></x-product-cart>

<button class="scrollTrigger" id="scrollTrigger"><i class="icon-to-top"></i></button>
<script id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vflS50iB-/www-widgetapi.js" async=""></script>
<script src="https://www.youtube.com/player_api"></script>
<script src="{{asset('js/common.min.js')}}"></script>
<script src="{{asset('js/lottie.min.js')}}"></script>

<script src="{{asset('js/product3.min.js')}}"></script>
</body>
</html>
