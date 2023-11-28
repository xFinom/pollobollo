<header class="header" data-page="product3" data-page-parent="shop">
    <div class="header_bg">
        <picture>
            <source data-srcset="{{asset('images/assets/gradients/10.webp')}}" srcset="{{asset('images/assets/gradients/10.webp')}}" type="image/webp" />
            <img class="lazy" data-src="{{asset('images/assets/gradients/10.png')}}" src="{{asset('images/assets/gradients/10.png')}}" alt="media" />
        </picture>
    </div>
    <div class="container d-flex">
        <a class="header_logo logo" href="{{route('home')}}">
                    <span class="header_logo-wrapper">
                        <img src="{{asset('images/assets/logo.png')}}" alt="UpCreators" />
                    </span>
            <span class="text">Pollo Bollo</span>
        </a>
        <nav class="header_nav text--medium text--md collapse" id="headerMenu">
            <ul class="header_nav-list">
                <li class="header_nav-list_item">
                    <a class="nav-item nav-link" href="{{route('shows')}}" data-page="about" data-single="true">
                        <span class="nav-item_text">Shows</span>
                    </a>
                </li>
                <li class="header_nav-list_item">
                    <a class="nav-item nav-link" href="{{route('renta')}}" data-page="events" data-single="true">
                        <span class="nav-item_text">Renta de Botargas</span>
                    </a>
                </li>
                <li class="header_nav-list_item">
                    <a class="nav-item nav-link" href="{{route('regalos')}}" data-page="events" data-single="true">
                        <span class="nav-item_text">Entrega de Regalos</span>
                    </a>
                </li>
                <li class="header_nav-list_item"></li>
                <li class="header_nav-list_item"></li>
                <li class="header_nav-list_item"></li>
                <li class="header_nav-list_item"></li>
                <li class="header_nav-list_item"></li>
                <li class="header_nav-list_item"></li>
            </ul>
        </nav>
        <div class="header_user">
            <a class="header_user-account" href="{{route('login')}}">
                <i class="icon-user"></i>
            </a>
        </div>
        <button
            class="header_trigger"
            id="headerTrigger"
            data-bs-toggle="collapse"
            data-bs-target="#headerMenu"
            aria-controls="headerMenu"
            aria-expanded="false"
            type="button"
        ></button>
    </div>
</header>
