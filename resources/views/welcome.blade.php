<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Pollo Bollo</title>
    <link rel="stylesheet preload" as="style" href="{{asset('css/preload.min.css')}}" />
    <link rel="stylesheet preload" as="style" href="{{asset('css/icomoon.css')}}" />
    <link rel="stylesheet preload" as="style" href="{{asset('css/libs.min.css')}}" />

    <link rel="stylesheet" href="{{asset('css/index.css')}}" />
</head>

<body>

<x-main-header></x-main-header>

<main>
    <!--  features 1 section start  -->
    <section class="features features--1 section">
        <div class="container">
            <div class="features_media d-flex">
                <div class="features_media-item youtube laxY" data-aos="zoom-in" data-aos-duration="600">
                    <picture>
                        <source data-srcset="{{asset('images/landing/splash.png')}}" srcset="{{asset('images/landing/splash.png')}}" type="image/webp" />
                        <img class="lazy" data-src="{{asset('images/landing/splash.png')}}" src="{{asset('images/landing/splash.png')}}" alt="media" />
                    </picture>
                </div>
                <div class="features_media-item stories" data-aos="zoom-in" data-aos-duration="600">
                    <picture>
                        <source data-srcset="{{asset('images/landing/bollo.png')}}" type="image/webp" />
                        <img class="lazy" data-src="{{asset('images/landing/bollo.png')}}" src="{{asset('images/landing/bollo.png')}}" alt="media" />
                    </picture>
                </div>
                <div class="features_media-item post laxYinvert" data-aos="zoom-in" data-aos-duration="600">
                    <picture>
                        <source data-srcset="{{asset('imagenes/logo.png')}}" srcset="{{asset('imagenes/logo.png')}}" type="image/webp" />
                        <img class="lazy" data-src="{{asset('imagenes/logo.png')}}" src="{{asset('imagenes/logo.png')}}" alt="media" />
                    </picture>
                </div>
            </div>
            <div class="features_main">
                <div class="features_main-icon rotate shape">
                    <svg width="69" height="69" viewBox="0 0 69 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M42.993 69L34.5 51.2698L26.007 69L16.1104 64.9008L22.6419 46.3582L4.09932 52.8899L0 42.993L17.7302 34.5L0 26.007L4.09932 16.1103L22.6419 22.6418L16.1104 4.09921L26.007 0L34.5 17.7302L42.993 0L52.8899 4.09921L46.3582 22.6418L64.9008 16.1103L69 26.007L51.2698 34.5L69 42.993L64.9008 52.8899L46.3582 46.3582L52.8899 64.9008L42.993 69Z"
                            fill="currentColor"
                        />
                    </svg>
                </div>
                <h2 class="features_main-title h1 outlined outlined--black" data-aos="fade-left">Pollo Bollo</h2>
                <h2 class="features_main-subtitle" data-aos="fade-left" data-aos-delay="50">Lo mejor para tu fiesta</h2>
                <p class="features_main-text text--md" data-aos="fade-left" data-aos-delay="100">
                    Con más de 15 años de experiencia, el payaso Pollo Bollo es la mejor opción para amenizar tu fiesta, no importa si es para niños o adultos: ¡El entretenimiento es para todos!
                </p>
            </div>
        </div>
    </section>
    <!--  features 1 section end  -->
    <!--  cases section start  -->
    <section class="cases section">
        <div class="container">
            <div class="section_nav">
                <h3 class="section_nav-title">
                    <i class="icon-bold-cross"></i>
                    Clientes satisfechos
                </h3>
                <div class="section_nav-controls">
                    <span class="divider"></span>
                    <div class="section_nav-controls_btns">
                        <button class="link splide__arrow--prev" type="button" aria-label="Previous slide">
                            <i class="icon-angle-left"></i>
                        </button>
                        <button class="link splide__arrow--next" type="button" aria-label="Next slide">
                            <i class="icon-angle-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="cases_slider splide">
                <div class="splide__track">
                    <div class="splide__list">
                        <div class="cases_slider-slide splide__slide">
                            <div class="media">
                                <picture>
                                    <source data-srcset="{{asset('images/clientes/cliente1.jpg')}}" srcset="{{asset('images/clientes/cliente1.jpg')}}" type="image/webp" />
                                    <img class="lazy" data-src="{{asset('images/clientes/cliente1.jpg')}}" src="{{asset('images/clientes/cliente1.jpg')}}" alt="Case #1" />
                                </picture>
                            </div>
                        </div>
                        <div class="cases_slider-slide splide__slide">
                            <div class="media">
                                <a class="link">
                                    <picture>
                                        <source
                                            data-srcset="{{asset('images/clientes/cliente2.jpg')}}"
                                            srcset="{{asset('images/clientes/cliente2.jpg')}}"
                                            type="image/webp"
                                        />
                                        <img
                                            class="lazy"
                                            data-src="{{asset('images/clientes/cliente2.jpg')}}"
                                            src="{{asset('images/clientes/cliente2.jpg')}}"
                                            alt="Case #2"
                                        />
                                    </picture>
                                </a>
                            </div>
                        </div>
                        <div class="cases_slider-slide splide__slide">
                            <div class="media">
                                <a class="link">
                                    <picture>
                                        <source
                                            data-srcset="{{asset('images/clientes/cliente3.jpg')}}"
                                            srcset="{{asset('images/clientes/cliente3.jpg')}}"
                                            type="image/webp"
                                        />
                                        <img
                                            class="lazy"
                                            data-src="{{asset('images/clientes/cliente3.jpg')}}"
                                            src="{{asset('images/clientes/cliente3.jpg')}}"
                                            alt="Case #3"
                                        />
                                    </picture>
                                </a>
                            </div>
                        </div>
                        <div class="cases_slider-slide splide__slide">

                            <div class="media">
                                <a class="link">
                                    <picture>
                                        <source
                                            data-srcset="{{asset('images/clientes/cliente4.jpg')}}"
                                            srcset="{{asset('images/clientes/cliente4.jpg')}}"
                                            type="image/webp"
                                        />
                                        <img
                                            class="lazy"
                                            data-src="{{asset('images/clientes/cliente4.jpg')}}"
                                            src="{{asset('images/clientes/cliente4.jpg')}}"
                                            alt="Case #4"
                                        />
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  cases section end  -->
</main>

<x-product-footer></x-product-footer>

<button class="scrollTrigger" id="scrollTrigger"><i class="icon-to-top"></i></button>
<script id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vflS50iB-/www-widgetapi.js" async=""></script>
<script src="https://www.youtube.com/player_api"></script>
<script src="{{asset('js/common.min.js')}}"></script>
<script src="{{asset('js/lottie.min.js')}}"></script>

<script src="{{asset('js/index.min.js')}}"></script>
<script src="{{asset('js/ticker.js')}}"></script>
</body>

</html>
