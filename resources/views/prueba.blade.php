<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Pollo Bollo - Contratación</title>
    <link rel="stylesheet preload" as="style" href="{{asset('css/preload.min.css')}}" />
    <link rel="stylesheet preload" as="style" href="{{asset('css/icomoon.css')}}" />
    <link rel="stylesheet preload" as="style" href="{{asset('css/libs.min.css')}}" />

    <link rel="stylesheet" href="{{asset('css/cart.css')}}" />
</head>

<body>

<x-main-header></x-main-header>
<main class="cart">
    <div class="cart_header">
        <div class="container">
            <div class="cart_header-wrapper">
                <div class="main d-flex align-items-center">
                    <img class="main_icon" src="svg/shapes/20.svg" alt="shape" />
                    <h2 class="main_title"></h2>
                </div>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div
            class="min-w-0 p-4 text-white bg-purple-600 rounded-lg shadow-xs"
        >
            <h4 class="mb-4 font-semibold">
                Error
            </h4>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="cart_content section">
        <div class="container sticky-parent">
            <div class="cart_content-table">
                <div class="cart_content-table_header d-flex align-items-center justify-content-between">
                    <span class="amount">Servicio a contratar</span>
                    <span class="col-header"></span>
                    <span class="col-header">Precio</span>
                    <span class="col-header"></span>
                    <span class="col-header"></span>
                </div>
                <div class="cart_content-table_body">
                    <div class="item">
                        <div class="item_main">
                            <div class="item_main-media">
                                <picture>
                                    <source data-srcset="{{ asset('storage/'.$botarga->image) }}" srcset="{{ asset('storage/'.$botarga->image) }}" type="image/webp" />
                                    <img
                                        class="lazy"
                                        data-src="{{ asset('storage/'.$botarga->image) }}"
                                        src="{{ asset('storage/'.$botarga->image) }}"
                                        alt="Limited Edition T-Shirt"
                                    />
                                </picture>
                            </div>
                            <div class="item_main-about">
                                <span class="label">Renta de Botarga</span>
                                <a class="title h4">{{$botarga->name}}</a>
                                <span class="price h4">$ {{$botarga->rent_price}}.00 MXN</span>
                                <ul class="details"> </ul>
                            </div>
                        </div>
                        <div class="item_price item_price--item">
                            <span class="property"></span>
                            <span class="value">$ {{$botarga->rent_price}}.00 MXN</span>
                        </div>
                        <div class="item_price item_price--total">
                            <span class="property">Total</span>
                            <span class="value"></span>
                        </div>
                    </div>
                </div>
                <div class="cart_content-table_footer d-flex align-items-center justify-content-between">
                </div>
            </div>
            <div class="sticky-wrapper" data-sticky="true">
                <div class="cart_content-summary">
                    <div class="cart_content-summary_header">
                        <span>Datos del Cliente</span>
                    </div>
                    <form method="post" action="{{route('checkout_botargas')}}">
                        @csrf
                    <div class="cart_content-summary_main">
                        <div class="wrapper">
                            <div class="optional d-flex">
                                <div class="optional_block">
                                    <label class="optional_block-label" for="promocode">Nombre</label>
                                    <input type="text" class="field" placeholder="Nombre" id="name" name="name" />
                                </div>
                                <div class="optional_block">
                                    <label class="optional_block-label" for="giftcode">Teléfono</label>
                                    <input type="text" class="field" placeholder="Telefono" id="phone" name="phone"/>
                                </div>
                            </div>
                            <br>
                            <div class="optional d-flex">
                                <div class="optional_block">
                                    <label class="optional_block-label" for="promocode">Dirección</label>
                                    <input type="text" class="field" placeholder="Direccion" id="address_client" name="address_client" />
                                </div>
                                <div class="optional_block">
                                    <label class="optional_block-label" for="giftcode">Correo Electrónico</label>
                                    <input type="email" class="field" placeholder="Correo" id="email" name="email" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cart_content-summary_header">
                        <span>Datos del Show</span>
                    </div>
                    <div class="cart_content-summary_main">
                            <div class="wrapper">
                                <div class="optional d-flex">
                                    <div class="optional_block">
                                        <label class="optional_block-label" for="date">Fecha de Recolección</label>
                                        <input type="date" class="field" placeholder="Direccion" id="returnDate" name="returnDate" />
                                    </div>
                                    <div class="optional_block">
                                        <input type="hidden" class="field" placeholder="Dirección" id="botarga_id" name="botarga_id" value="{{$botarga->id}}"/>
                                        <input type="hidden" class="field" placeholder="Direccion" id="duration" name="duration" value="24"/>
                                        <input type="hidden" class="field" placeholder="Direccion" id="price" name="price" value="{{$botarga->rent_price}}"/>
                                    </div>
                                </div>
                                <br>
                                <ul class="subtotal d-flex flex-column">
                                    <li class="subtotal_item">
                                        <span>Total</span>
                                        <span>$ {{$botarga->rent_price}}.00</span>
                                    </li>
                                </ul>
                                <button class="btn btn--accent btn--hover-black" type="submit">Proceder al pago</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<x-product-footer></x-product-footer>

<button class="scrollTrigger" id="scrollTrigger"><i class="icon-to-top"></i></button>
<script id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vflS50iB-/www-widgetapi.js" async=""></script>
<script src="{{asset('js/common.min.js')}}"></script>
<script src="{{asset('js/lottie.min.js')}}"></script>

<script src="{{asset('js/cart.min.js')}}"></script>
<script src="{{asset('js/ticker.js')}}"></script>
</body>

</html>
