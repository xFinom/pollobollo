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
    <link rel="stylesheet" href="{{asset('css/shop-list.css')}}" />
</head>
<body>
<x-main-header></x-main-header>
<header class="page" style="background-image: url('https://i.imgur.com/CfMcfRr.jpeg');">
    <div class="container">
        <div class="page_title">
            <div class="page_title-icon rotate shape">
                <svg width="69" height="69" viewBox="0 0 69 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M42.993 69L34.5 51.2698L26.007 69L16.1104 64.9008L22.6419 46.3582L4.09932 52.8899L0 42.993L17.7302 34.5L0 26.007L4.09932 16.1103L22.6419 22.6418L16.1104 4.09921L26.007 0L34.5 17.7302L42.993 0L52.8899 4.09921L46.3582 22.6418L64.9008 16.1103L69 26.007L51.2698 34.5L69 42.993L64.9008 52.8899L46.3582 46.3582L52.8899 64.9008L42.993 69Z"
                        fill="currentColor"
                    />
                </svg>
            </div>
            <h1 class="page_title-title outlined outlined--white" data-aos="fade-left">{{$titulo}}</h1>
            <h2 class="page_title-subtitle" data-aos="fade-left" data-aos-delay="50">
                {{$subtitulo}}
            </h2>
        </div>
    </div>
</header>

<main class="shop">
    <!--  shop main content start  -->
    <div class="container">
        <div class="shop_panel">
        </div>
        <div class="container_wrapper container_wrapper--list">
            <div class="block">
                @foreach($articulos as $articulo)
                    <ul class="shop_list observingArea">
                        <li class="shop_list-item">
                            <div class="media">
                                <div class="media_slider media_slider--single media_slider--single--1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <picture>
                                                <source
                                                    data-srcset="{{ asset('storage/'.$articulo->image) }}"
                                                    srcset="{{ asset('storage/'.$articulo->image) }}"
                                                    type="image/webp"
                                                />
                                                <img
                                                    class="lazy"
                                                    data-src="{{ asset('storage/'.$articulo->image) }}"
                                                    src="{{ asset('storage/'.$articulo->image) }}"
                                                    alt="Silver puffer"
                                                />
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main">
                                <div class="main_header">
                                    <span class="label">{{$titulo}}</span>
                                    <a class="title h4">{{$articulo->name}}</a>
                                    <div class="price h4 d-flex">
                                        <span class="price_item price_item">$ @if($tipo === 1)
                                               {{$articulo->rent_price}}
                                            @elseif($tipo === 2)
                                                {{$articulo->gift_price}}
                                            @else
                                                {{$articulo->price}}
                                            @endif MXN</span>
                                    </div>
                                </div>
                                <div class="main_footer">
                                    <div class="main_footer-id"><span class="title">Descripción:</span></div>
                                    <pre class="main_footer-paragraph"></pre>
                                    <ul class="main_footer-list">
                                        <li class="main_footer-list_item">
                                            <i class="icon">-</i> {{$articulo->description}}
                                            @if($articulo->duration)
                                                <i class="icon">-</i> Duracion: {{$articulo->duration}} horas
                                            @endif
                                        </li>
                                    </ul>

                                    <div class="wrapper d-flex">
                                        <a class="btn btn--black btn--shop addToCart" href="#">
                                            <span class="text">Contratar</span>
                                            <i class="icon icon-bag"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                @endforeach
            </div>

        </div>
        <div class="shop_panel">
        </div>
    </div>

    <x-product-footer></x-product-footer>
</main>
<button class="scrollTrigger" id="scrollTrigger"><i class="icon-to-top"></i></button>
<script id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vflS50iB-/www-widgetapi.js" async=""></script>
<script src="https://www.youtube.com/player_api"></script>

<script src="{{asset('js/common.min.js')}}"></script>
<script src="{{asset('js/lottie.min.js')}}"></script>

<script src="{{asset('js/shop_list.js')}}"></script>
</body>
</html>
