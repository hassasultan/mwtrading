    <!-- header-area start -->
    <section class="header-kaj">
        <div class="header-area">
            <div class="header-main-area">
                <div class="header-main">
                    @php
                        $site =  App\Models\SiteSetting::first();
                    @endphp
                    <div class="header-element logo"><a href="{{ route('index') }}" class="theme-logo">
                            <img style="max-width: 80px;" src="{{ asset('public/storage/'.$site->logo) }}" class="img-fluid"
                                alt="electon6-store">
                        </a><a href="{{ route('index') }}" class="other-logo">
                            <img style="max-width: 30px;" src="{{ asset('public/storage/'.$site->logo) }}"
                                alt="electon6-store">
                        </a>
                        <style>
                            @media(max-width: 767px) {
                                .theme-logo img{
                                    max-width: 30px !important;
                                }
                            }
                            a.shop-name span {
                                color: var(--font-color-header);
                                font-size: 24px;
                                font-weight: 600;
                            }

                            a.theme-logo svg {
                                width: 100%;
                            }

                            .is-sticky a.theme-logo {
                                display: none;
                            }

                            a.other-logo {
                                display: none;
                            }

                            .is-sticky a.other-logo {
                                display: block;
                            }
                        </style>
                    </div>
                    <div class="header-element menu-wrap">
                        <div class="megamenu-content">
                            <a href="#main-collapse" class="browse-cat" data-bs-toggle="collapse" aria-expanded="true">
                                <span class="menu-icon"><i class="ri-menu-line"></i></span>
                                <span class="menu-title">Menu</span>
                                <span class="menu-arrow"><i class="fas fa-chevron-circle-down"></i></span>
                            </a>
                            <div class="mainwrap collapse show" id="main-collapse">
                                <ul class="main-menu">





                                    <li class="menu-link parant">
                                        <a aria-current="page" href="/" class="link-title active">
                                            <span class="sp-link-title">Home</span>
                                            <i class="far fa-home"></i>
                                        </a>
                                        <a href="#main-collapse-home" data-bs-toggle="collapse"
                                            class="link-title link-title-lg">
                                            <span class="sp-link-title">Home</span>
                                            <i class="far fa-home"></i>
                                        </a>

                                    </li>

                                    <script>
                                        $('.megamenu-li').parent('.container').parent('ul').addClass('mega-menu');
                                        $('.banner-wrap').parent('.container').parent('ul').addClass('bottom-banner');
                                        $('.menu-banner').parent('.container').parent('ul').addClass('banner-menu');
                                        $('.submenu-li').parent('.container').parent('ul').addClass('sub-menu');
                                    </script>





                                    <li class="menu-link parant">
                                        <a href="{{ route('collection.all',['type'=> "products",'slug'=>'all']) }}" class="link-title ">
                                            <span class="sp-link-title">Collection</span>
                                            {{-- <i class="fas fa-chevron-circle-down"></i> --}}
                                        </a>
                                        <a href="#main-collapse-shop" data-bs-toggle="collapse"
                                            class="link-title link-title-lg">
                                            <span class="sp-link-title">Collection</span>
                                            {{-- <i class="fas fa-chevron-circle-down"></i> --}}
                                        </a>
                                        {{-- <ul class="dropdown-submenu collapse" id="main-collapse-shop">
                                            <div class="container p-0 ul">



                                                <li class="megamenu-li parant">
                                                    <h2 class="sublink-title">Earphone</h2>
                                                    <a href="/collections/earphone" class="sublink-title">
                                                        <span class="sp-link-title">Earphone</span>
                                                        <i class="fas fa-chevron-circle-down"></i>
                                                    </a>
                                                    <a data-bs-toggle="collapse" href="#main-collapse-earphone"
                                                        class="sublink-title sublink-title-lg">
                                                        <span class="spb-link-title">Earphone</span>
                                                        <i class="fas fa-chevron-circle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-supmenu collapse" id="main-collapse-earphone">

                                                        <li class="supmenu-li">
                                                            <a href="/products/5g-smart-phone" class="suplink-title">
                                                                <span class="spbp-link-title">5G smart phone</span>
                                                            </a>
                                                        </li>

                                                        <li class="supmenu-li">
                                                            <a href="/products/bluetooth-speakers"
                                                                class="suplink-title">
                                                                <span class="spbp-link-title">Bluetooth speakers</span>
                                                            </a>
                                                        </li>

                                                        <li class="supmenu-li">
                                                            <a href="/products/dell-computer" class="suplink-title">
                                                                <span class="spbp-link-title">Dell computer</span>
                                                            </a>
                                                        </li>

                                                        <li class="supmenu-li">
                                                            <a href="/products/hp-laptop-i5" class="suplink-title">
                                                                <span class="spbp-link-title">HP laptop I5</span>
                                                            </a>
                                                        </li>

                                                        <li class="supmenu-li">
                                                            <a href="/products/portable-camera" class="suplink-title">
                                                                <span class="spbp-link-title">Portable camera</span>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </li>





                                                <li class="megamenu-li parant">
                                                    <h2 class="sublink-title">Projector</h2>
                                                    <a href="/collections/projector" class="sublink-title">
                                                        <span class="sp-link-title">Projector</span>
                                                        <i class="fas fa-chevron-circle-down"></i>
                                                    </a>
                                                    <a data-bs-toggle="collapse" href="#main-collapse-projector"
                                                        class="sublink-title sublink-title-lg">
                                                        <span class="spb-link-title">Projector</span>
                                                        <i class="fas fa-chevron-circle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-supmenu collapse"
                                                        id="main-collapse-projector">

                                                        <li class="supmenu-li">
                                                            <a href="/products/smart-watch" class="suplink-title">
                                                                <span class="spbp-link-title">Smart watch</span>
                                                            </a>
                                                        </li>

                                                        <li class="supmenu-li">
                                                            <a href="/products/racing-wheel" class="suplink-title">
                                                                <span class="spbp-link-title">Racing wheel</span>
                                                            </a>
                                                        </li>

                                                        <li class="supmenu-li">
                                                            <a href="/products/portable-camera" class="suplink-title">
                                                                <span class="spbp-link-title">Portable camera</span>
                                                            </a>
                                                        </li>

                                                        <li class="supmenu-li">
                                                            <a href="/products/hp-laptop-i5" class="suplink-title">
                                                                <span class="spbp-link-title">HP laptop I5</span>
                                                            </a>
                                                        </li>

                                                        <li class="supmenu-li">
                                                            <a href="/products/game-controller" class="suplink-title">
                                                                <span class="spbp-link-title">Game controller</span>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </li>





                                                <li class="megamenu-li parant">
                                                    <h2 class="sublink-title">Smart TV</h2>
                                                    <a href="/collections/smart-tv" class="sublink-title">
                                                        <span class="sp-link-title">Smart TV</span>
                                                        <i class="fas fa-chevron-circle-down"></i>
                                                    </a>
                                                    <a data-bs-toggle="collapse" href="#main-collapse-smart-tv"
                                                        class="sublink-title sublink-title-lg">
                                                        <span class="spb-link-title">Smart TV</span>
                                                        <i class="fas fa-chevron-circle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-supmenu collapse" id="main-collapse-smart-tv">

                                                        <li class="supmenu-li">
                                                            <a href="/products/bluetooth-speakers"
                                                                class="suplink-title">
                                                                <span class="spbp-link-title">Bluetooth speakers</span>
                                                            </a>
                                                        </li>

                                                        <li class="supmenu-li">
                                                            <a href="/products/5g-smart-tablet" class="suplink-title">
                                                                <span class="spbp-link-title">5G smart tablet</span>
                                                            </a>
                                                        </li>

                                                        <li class="supmenu-li">
                                                            <a href="/products/bluetooth-speakers"
                                                                class="suplink-title">
                                                                <span class="spbp-link-title">Bluetooth speakers</span>
                                                            </a>
                                                        </li>

                                                        <li class="supmenu-li">
                                                            <a href="/products/dell-computer" class="suplink-title">
                                                                <span class="spbp-link-title">Dell computer</span>
                                                            </a>
                                                        </li>

                                                        <li class="supmenu-li">
                                                            <a href="/products/game-controller" class="suplink-title">
                                                                <span class="spbp-link-title">Game controller</span>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </li>





                                                <li class="megamenu-li parant">
                                                    <h2 class="sublink-title">Smartphone</h2>
                                                    <a href="/collections/smartphone" class="sublink-title">
                                                        <span class="sp-link-title">Smartphone</span>
                                                        <i class="fas fa-chevron-circle-down"></i>
                                                    </a>
                                                    <a data-bs-toggle="collapse" href="#main-collapse-smartphone"
                                                        class="sublink-title sublink-title-lg">
                                                        <span class="spb-link-title">Smartphone</span>
                                                        <i class="fas fa-chevron-circle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-supmenu collapse"
                                                        id="main-collapse-smartphone">

                                                        <li class="supmenu-li">
                                                            <a href="/products/portable-camera" class="suplink-title">
                                                                <span class="spbp-link-title">Portable camera</span>
                                                            </a>
                                                        </li>

                                                        <li class="supmenu-li">
                                                            <a href="/products/drone-camera" class="suplink-title">
                                                                <span class="spbp-link-title">Drone camera</span>
                                                            </a>
                                                        </li>

                                                        <li class="supmenu-li">
                                                            <a href="/products/racing-wheel" class="suplink-title">
                                                                <span class="spbp-link-title">Racing wheel</span>
                                                            </a>
                                                        </li>

                                                        <li class="supmenu-li">
                                                            <a href="/products/bluetooth-speakers"
                                                                class="suplink-title">
                                                                <span class="spbp-link-title">Bluetooth speakers</span>
                                                            </a>
                                                        </li>

                                                        <li class="supmenu-li">
                                                            <a href="/products/wireless-headphones"
                                                                class="suplink-title">
                                                                <span class="spbp-link-title">Wireless
                                                                    headphones</span>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </li>



                                            </div>
                                        </ul> --}}
                                    </li>

                                    <script>
                                        $('.megamenu-li').parent('.container').parent('ul').addClass('mega-menu');
                                        $('.banner-wrap').parent('.container').parent('ul').addClass('bottom-banner');
                                        $('.menu-banner').parent('.container').parent('ul').addClass('banner-menu');
                                        $('.submenu-li').parent('.container').parent('ul').addClass('sub-menu');
                                    </script>





                                    <li class="menu-link parant">
                                        <a href="{{ route('collection.view') }}" class="link-title ">
                                            <span class="sp-link-title">our services</span>
                                            {{-- <i class="fas fa-chevron-circle-down"></i> --}}
                                        </a>
                                        <a href="#main-collapse-collection" data-bs-toggle="collapse"
                                            class="link-title link-title-lg">
                                            <span class="sp-link-title">our services</span>
                                            {{-- <i class="fas fa-chevron-circle-down"></i> --}}
                                        </a>
                                        {{-- <ul class="dropdown-submenu collapse" id="main-collapse-collection">
                                            <div class="container p-0 ul">

                                                <li class="menu-banner banner-hover">
                                                    <a href="/collections/laptops-notebooks" class="banner-img">
                                                        <img src="//cdn.shopify.com/s/files/1/0641/3431/6288/collections/electon-electronics-menu-banner-01.jpg?v=1650973553"
                                                            class="img-fluid" alt="Laptops & notebooks">
                                                    </a>
                                                    <a href="/collections/laptops-notebooks"
                                                        class="menu-banner-title">
                                                        <span>Laptop</span>
                                                    </a>
                                                </li>











                                                <li class="menu-banner banner-hover">
                                                    <a href="/collections/desktop" class="banner-img">
                                                        <img src="//cdn.shopify.com/s/files/1/0641/3431/6288/collections/electon-electronics-menu-banner-03.jpg?v=1650973535"
                                                            class="img-fluid" alt="Desktop">
                                                    </a>
                                                    <a href="/collections/desktop" class="menu-banner-title">
                                                        <span>Desktop</span>
                                                    </a>
                                                </li>











                                                <li class="menu-banner banner-hover">
                                                    <a href="/collections/camera" class="banner-img">
                                                        <img src="//cdn.shopify.com/s/files/1/0641/3431/6288/collections/electon-electronics-menu-banner-02.jpg?v=1650973358"
                                                            class="img-fluid" alt="Camera">
                                                    </a>
                                                    <a href="/collections/camera" class="menu-banner-title">
                                                        <span>Camera</span>
                                                    </a>
                                                </li>





                                            </div>
                                        </ul> --}}
                                    </li>

                                    <script>
                                        $('.megamenu-li').parent('.container').parent('ul').addClass('mega-menu');
                                        $('.banner-wrap').parent('.container').parent('ul').addClass('bottom-banner');
                                        $('.menu-banner').parent('.container').parent('ul').addClass('banner-menu');
                                        $('.submenu-li').parent('.container').parent('ul').addClass('sub-menu');
                                    </script>





                                    {{-- <li class="menu-link">
                                        <a href="/blogs/news" class="link-title " href="/blogs/news">
                                            <span class="sp-link-title">Blog</span>
                                        </a>
                                        <a href="/blogs/news" class="link-title link-title-lg">
                                            <span class="sp-link-title">Blog</span>
                                        </a>
                                    </li> --}}

                                    <script>
                                        $('.megamenu-li').parent('.container').parent('ul').addClass('mega-menu');
                                        $('.banner-wrap').parent('.container').parent('ul').addClass('bottom-banner');
                                        $('.menu-banner').parent('.container').parent('ul').addClass('banner-menu');
                                        $('.submenu-li').parent('.container').parent('ul').addClass('sub-menu');
                                    </script>





                                    {{-- <li class="menu-link parant">
                                        <a href="#" class="link-title ">
                                            <span class="sp-link-title">Pages</span>
                                            <i class="fas fa-chevron-circle-down"></i>
                                        </a>
                                        <a href="#main-collapse-pages" data-bs-toggle="collapse"
                                            class="link-title link-title-lg">
                                            <span class="sp-link-title">Pages</span>
                                            <i class="fas fa-chevron-circle-down"></i>
                                        </a>
                                        <ul class="dropdown-submenu collapse" id="main-collapse-pages">
                                            <div class="container p-0 ul">






                                                <li class="submenu-li parant">
                                                    <a href="/pages/about-us" class="sublink-title">
                                                        <span class="sp-link-title">About us</span>
                                                    </a>
                                                </li>








                                                <li class="submenu-li parant">
                                                    <a href="/pages/contact-us" class="sublink-title">
                                                        <span class="sp-link-title">Contact us</span>
                                                    </a>
                                                </li>








                                                <li class="submenu-li parant">
                                                    <a href="/pages/faqs" class="sublink-title">
                                                        <span class="sp-link-title">Faq's</span>
                                                    </a>
                                                </li>








                                                <li class="submenu-li parant">
                                                    <a href="https://electon6-store.myshopify.com/page/404"
                                                        class="sublink-title">
                                                        <span class="sp-link-title">Page 404</span>
                                                    </a>
                                                </li>








                                                <li class="submenu-li parant">
                                                    <a href="/pages/privacy-policy" class="sublink-title">
                                                        <span class="sp-link-title">Privacy policy</span>
                                                    </a>
                                                </li>








                                                <li class="submenu-li parant">
                                                    <a href="/pages/terms-condition" class="sublink-title">
                                                        <span class="sp-link-title">Terms & condition</span>
                                                    </a>
                                                </li>



                                            </div>
                                        </ul>
                                    </li> --}}

                                    <script>
                                        $('.megamenu-li').parent('.container').parent('ul').addClass('mega-menu');
                                        $('.banner-wrap').parent('.container').parent('ul').addClass('bottom-banner');
                                        $('.menu-banner').parent('.container').parent('ul').addClass('banner-menu');
                                        $('.submenu-li').parent('.container').parent('ul').addClass('sub-menu');
                                    </script>


                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="header-element right-block-box">
                        <ul class="shop-element">
                            <li class="side-wrap search">
                                <!-- /snippets/search-bar.liquid -->

                                {{-- <div class="search-rap">
                                    <form action="{{ route('collection.all',['type'=> "products",'slug'=>'all']) }}" method="get" class="search-bar" role="search">
                                        <div class="form-search">
                                            <input type="search" name="q" value="@if(request()->get('q')) {{ request()->get('q') }} @endif"
                                                placeholder="Find your search" id="search" class="input-text"
                                                aria-label="Search our store" required>
                                            <button class="search-btn" type="submit"><i class="fas fa-search"></i></button>
                                        </div>
                                    </form>
                                </div> --}}


                                {{-- <style>
                                    .search-rap a.search-crap {
                                        display: block;
                                        font-size: 16px;
                                        line-height: 0;
                                    }

                                    .search-rap a.search-crap[aria-expanded="false"] {
                                        color: var(--font-color-header);
                                    }

                                    .search-rap a.search-crap:hover,
                                    .search-rap a.search-crap[aria-expanded="true"] {
                                        color: var(--font-color-primary);
                                    }

                                    .search-rap a.search-crap[aria-expanded="true"] i::before {
                                        content: "\f5af"
                                    }

                                    .search-rap .form-search {
                                        position: relative;
                                        display: flex;
                                    }

                                    .search-rap .form-search input.input-text {
                                        width: 100%;
                                        padding: 16px 30px;
                                        border: none;
                                        color: #929292;
                                        background-color: #f5f5f5;
                                    }

                                    .search-rap .form-search input.input-text::placeholder {
                                        color: #929292;
                                        font-size: 16px;
                                    }

                                    .search-rap .form-search button {
                                        color: #929292;
                                        position: absolute;
                                        font-size: 22px;

                                        right: 15px;

                                        bottom: 50%;
                                        transform: translateY(50%);
                                    }

                                    .is-sticky .search-rap .form-search button,
                                    .is-sticky .search-rap .form-search input.input-text::placeholder,
                                    .is-sticky .search-rap .form-search input.input-text {
                                        color: #757375;
                                    }

                                    .search-rap .form-search button:hover {
                                        color: var(--font-color-primary);
                                    }

                                    @media(max-width: 1199px) {
                                        .search-rap {
                                            display: none;
                                        }
                                    }
                                </style> --}}
                                <!-- Button trigger modal -->
                                {{-- <a class="search-popup" data-bs-toggle="modal" href="#seachmodal">
                                    <i class="ri-search-line"></i>
                                    <span class="search-title"></span>
                                </a>
                                <style>
                                    a.search-popup {
                                        color: #929292;
                                        font-size: 18px;
                                        display: none;
                                        align-items: center;
                                    }

                                    .is-sticky a.search-popup {
                                        color: #757375;
                                    }

                                    .is-sticky a.search-popup:hover {
                                        color: var(--font-color-primary);
                                    }

                                    a.search-popup .search-title {
                                        font-size: 15px;
                                        text-transform: uppercase;

                                        padding-left: 10px;

                                    }

                                    a.search-popup i {
                                        line-height: 1;
                                    }

                                    @media(max-width: 1199px) {
                                        a.search-popup {
                                            display: flex;
                                            font-size: 18px;
                                        }

                                        a.search-popup .search-title {
                                            display: none;
                                        }
                                    }
                                </style> --}}
                            </li>
                            <li class="side-wrap toggle-wrap">
                                <button class="navbar-toggler" type="button">
                                    <i class="ri-menu-line"></i>
                                </button>
                            </li>
                            {{-- <lisp-link-title> --}}
                            @if (auth()->check())

                            <li class="side-wrap user-wrap">
                                <div class="acc-link">
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="acc-icon fs-5"><i class="far fa-user-circle"></i></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                            <li><a class="dropdown-item active" href="{{ route('user.profile') }}"><i class="fas fa-user me-2"></i>Profile</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li>
                                                <a class="acc-link-wrap dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="font-size: 1.0rem;">
                                                logout<i class="fas fa-sign-out-alt"></i></a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                        {{-- <a class="acc-link-wrap" href="{{ route('login') }}">

                                            <span class="acc-title">Account</span>

                                        </a> --}}



                                </div>
                                <div class="acc-link acc-link-lg">
                                    <div class="acc-link-wrap">
                                        <a class="acc-link-wrap" href="/account/login">
                                            <span class="acc-icon"><i class="ri-user-line"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <style>
                                    .acc-link .acc-link-wrap {
                                        color: #929292;
                                        display: flex;
                                        align-items: center;
                                        font-size: 22px;
                                        font-weight: 500;
                                        text-transform: uppercase;
                                    }

                                    .is-sticky .acc-link .acc-link-wrap {
                                        color: #757375;
                                    }

                                    .acc-link .acc-link-wrap:hover {
                                        color: var(--font-color-primary);
                                    }

                                    .acc-link .acc-link-wrap span.acc-icon i {
                                        display: block;
                                        line-height: 1;
                                    }

                                    .acc-link .acc-link-wrap .acc-title {
                                        display: none;

                                        margin-right: 10px;

                                    }

                                    .acc-link.acc-link-lg {
                                        display: none;
                                    }

                                    @media (max-width: 1199px) {
                                        .acc-link .acc-link-wrap {
                                            font-size: 18px;
                                        }

                                        .acc-link.acc-link-lg .acc-link-wrap a {
                                            display: block;
                                            line-height: 0;
                                        }

                                        .acc-link.acc-link-lg .acc-link-wrap a i {
                                            display: block;
                                            line-height: 1;
                                        }
                                    }
                                </style>
                            </li>
                            @else

                            <li class="side-wrap cart-wrap">



                                <div class="shopping-widget">
                                    <div class="shopping-cart">
                                        <a href="{{ route('login') }}" class="btn btn-outline-danger">
                                            <i class="fas fa-sign-in-alt"></i>

                                            {{-- <div class="cart-title">Bag</div>

                                            <span id="cart-total" class="bigcounter">0</span>
                                            <span id="cart-total" class="subtotal-price">$0.00</span> --}}
                                        </a>
                                    </div>
                                </div>
                                <script>
                                    $(document).ready(function() {
                                        $(".shopping-cart a.cart-count").click(function() {
                                            $(".mini-cart").addClass("show");
                                            $(".mm-fullscreen-bg").addClass("active");
                                        });
                                        $(".shopping-cart-close i").click(function() {
                                            $(".mini-cart").removeClass("show");
                                            $(".mm-fullscreen-bg").removeClass("active");
                                        });
                                        $(".mm-fullscreen-bg").click(function() {
                                            $(".mini-cart").removeClass("show");
                                            $(".mm-fullscreen-bg").removeClass("active");
                                        });
                                    });
                                </script>
                                <style>
                                    /* mini cart css */
                                    .shopping-widget .shopping-cart {
                                        position: relative;
                                    }

                                    .shopping-widget .shopping-cart a.cart-count {
                                        color: #929292;
                                        position: relative;
                                        font-size: 22px;
                                        font-weight: 500;
                                        display: flex;
                                        align-items: center;
                                        text-transform: uppercase;
                                    }

                                    .is-sticky .shopping-widget .shopping-cart a.cart-count {
                                        color: #757375;
                                    }

                                    .shopping-widget .shopping-cart a.cart-count:hover {
                                        color: var(--font-color-primary);
                                    }

                                    .shopping-widget .shopping-cart a.cart-count span.cart-icon i {
                                        display: block;
                                        line-height: 1;
                                    }

                                    .shopping-widget .shopping-cart a.cart-count .cart-title {
                                        display: none;
                                        font-size: 14px;

                                        margin-right: 10px;

                                    }

                                    .shopping-widget .shopping-cart a.cart-count .cart-title span {

                                        padding-left: 2px;

                                    }

                                    .shopping-widget .shopping-cart a.cart-count span.bigcounter {
                                        position: relative;
                                        font-size: 16px;
                                        padding: 0px 7px;
                                        line-height: 1;
                                    }

                                    .shopping-widget .shopping-cart a.cart-count span.bigcounter::after {
                                        font-size: 16px;
                                        content: '(';
                                        position: absolute;
                                        bottom: 50%;
                                        transform: translateY(50%);
                                        left: 0px;
                                    }

                                    .shopping-widget .shopping-cart a.cart-count span.bigcounter::before {
                                        font-size: 16px;
                                        content: ')';
                                        position: absolute;
                                        bottom: 50%;
                                        transform: translateY(50%);
                                        right: 0px;
                                    }

                                    .shopping-widget .shopping-cart a.cart-count span.subtotal-price {
                                        display: none;
                                    }

                                    .shopping-widget .shopping-cart a.cart-count span.cart-detail {
                                        color: var(--font-color-header);
                                        font-size: 13px;

                                        margin-left: 10px;

                                    }

                                    .shopping-widget .shopping-cart a.cart-count span.cart-detail cart-title {
                                        display: block;
                                        text-transform: capitalize;
                                    }

                                    .shopping-widget .shopping-cart a.cart-count span.cart-detail span.subtotal-price {
                                        display: block;
                                    }

                                    @media (max-width: 1599px) {
                                        .shopping-widget .shopping-cart a.cart-count .cart-title span {
                                            font-size: 14px;
                                        }
                                    }

                                    @media (max-width: 1199px) {
                                        .shopping-widget .shopping-cart a.cart-count {
                                            font-size: 18px;
                                            width: auto;
                                            height: auto;
                                            background-color: transparent;
                                        }

                                        .shopping-widget .shopping-cart a.cart-count span.bigcounter {
                                            font-size: 14px;
                                        }

                                        .shopping-widget .shopping-cart a.cart-count span.bigcounter::after {
                                            font-size: 14px;
                                        }

                                        .shopping-widget .shopping-cart a.cart-count span.bigcounter::before {
                                            font-size: 14px;
                                        }

                                        .shopping-widget .shopping-cart a.cart-count .cart-title {
                                            display: none;
                                        }

                                        .shopping-widget .shopping-cart a.cart-count span.cart-detail {
                                            display: none;
                                        }
                                    }

                                    @media (max-width: 479px) {
                                        .shopping-widget .shopping-cart a.cart-count span.bigcounter {
                                            display: none;
                                        }
                                    }
                                </style>

                            </li>
                            @endif


                        </ul>
                    </div>
                </div>
            </div>
        </div>



        <div class="shopping-widget">
            <div class="shopping-cart">
                <div class="mini-cart" id="cart">
                    <a href="javascript:void(0)" class="shopping-cart-close"><i class="ri-close-line"></i></a>
                    <div class="cart-empty-title" style="display:block;">
                        <p>No products in the cart.</p>
                        <ul class="cart-item-loop-empty">
                            <li class="cart-item-empty">
                                <span><i class="ri-shopping-bag-2-line"></i></span>
                                <a href="/collections/all" class="btn btn-style2">Continue shopping</a>
                            </li>

                        </ul>
                    </div>
                    <div class="cart-item-title" style="display:none;">
                        <p>
                            <span class="cart-count-desc">There are</span>
                            <span id="cart-total" class="cart-count-item bigcounter">0</span>
                            <span class="cart-count-desc">products</span>
                        </p>
                    </div>
                    <ul class="cart-item-loop cart-item-wrap" style="display:none;">

                    </ul>
                    <ul class="subtotal-title-area" style="display:none;">
                        <li class="subtotal-info">
                            <div class="subtotal-titles">
                                <h6>Sub Total:</h6>
                                <span id="cart-total" class="subtotal-price">$0.00</span>
                            </div>
                        </li>
                        <li class="mini-cart-btns">
                            <div class="read-agree">
                                <label>
                                    <span class="agree-text">I have read and agree with the <a
                                            href="/pages/terms-condition">terms & condition.</a></span>
                                    <input type="checkbox" class="cust-checkbox">
                                    <span class="cust-check"></span>
                                </label>
                            </div>
                            <div class="cart-btns">
                                <a href="/cart" class="btn btn-style3">View cart</a>
                                <a href="/checkout" class="btn btn-style3 checkout" disabled="disabled">Checkout</a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $(".shopping-cart a.cart-count").click(function() {
                    $(".mini-cart").addClass("show");
                    $(".mm-fullscreen-bg").addClass("active");
                });
                $(".shopping-cart-close").click(function() {
                    $(".mini-cart").removeClass("show");
                    $(".mm-fullscreen-bg").removeClass("active");
                });
                $(".mm-fullscreen-bg").click(function() {
                    $(".mini-cart").removeClass("show");
                    $(".mm-fullscreen-bg").removeClass("active");
                });

                // read & agree
                $('.read-agree').on('click', function() {
                    if ($('.cust-checkbox').is(':checked')) {
                        $('.checkout').removeAttr('disabled');
                    } else {
                        $('.checkout').attr('disabled', 'disabled');
                    }
                });
            });
        </script>
        <style>
            /* minicart item css */
            .shopping-cart .mini-cart {
                position: fixed;

                right: calc(0% - 320px);

                top: 0;
                height: 100%;
                width: 320px;
                background-color: #ffffff;
                z-index: 5;
                opacity: 0;
                visibility: hidden;
            }

            .shopping-cart .mini-cart.show {

                right: 0%;

                opacity: 1;
                visibility: visible;
            }

            .shopping-cart .mini-cart,
            .shopping-cart .mini-cart.show {
                -webkit-transition: all 0.3s ease-in-out 0s;
                -o-transition: all 0.3s ease-in-out 0s;
                transition: all 0.3s ease-in-out 0s;
            }

            .shopping-cart .mini-cart a.shopping-cart-close {
                display: block;
                font-size: 24px;
                position: absolute;
                top: 9px;

                right: 10px;

                line-height: 1;
            }

            .shopping-cart .mini-cart a.shopping-cart-close {
                display: block;
                line-height: 1;
            }

            .cart-empty-title {
                display: none;
            }

            .shopping-cart .mini-cart .cart-empty-title p,
            .shopping-cart .mini-cart .cart-item-title p {
                padding: 0 15px;
                margin: 10px 0;
                line-height: normal;
            }

            .shopping-cart .mini-cart .cart-item-title p span.cart-count-item {
                color: var(--font-color-primary);
                font-weight: 600;
            }

            /* minicart empty css */
            .mini-cart .cart-empty-title ul.cart-item-loop-empty {
                text-align: center;
                border-top: 1px solid #e2e2e2;
            }

            .mini-cart .cart-empty-title ul.cart-item-loop-empty li.cart-item-empty {
                padding: 30px 15px;
                position: absolute;
                bottom: 50%;
                transform: translateY(50%);
                width: 100%;
            }

            .mini-cart .cart-empty-title ul.cart-item-loop-empty li.cart-item-empty span {
                display: block;
                font-size: 60px;
                opacity: 0.65;
            }

            .mini-cart .cart-empty-title ul.cart-item-loop-empty li.cart-item-empty span i {
                display: block;
                line-height: 1;
            }

            .mini-cart .cart-empty-title ul.cart-item-loop-empty li.cart-item-empty a {
                margin-top: 30px;
            }

            .mini-cart .cart-empty-title ul.cart-item-loop-empty li.mini-cart-payment {
                padding: 15px;
                position: absolute;
                bottom: 0;
                width: 100%;
                border-top: 1px solid #e2e2e2;
            }

            .mini-cart .cart-empty-title ul.cart-item-loop-empty li.mini-cart-payment .cart-payment-icon .payment-icon {
                justify-content: center;
            }

            /* minicart item css */
            .mini-cart ul.cart-item-loop {
                max-height: calc(100% - 318px);
                overflow-y: auto;
                border-top: 1px solid #e2e2e2;
            }

            .mini-cart ul.cart-item-loop li.cart-item {
                display: flex;
                padding: 15px;
                border-top: 1px solid #e2e2e2;
            }

            .mini-cart ul.cart-item-loop li.cart-item:first-child {
                border-top: none;
            }

            .mini-cart ul.cart-item-loop li.cart-item .cart-image {
                width: 65px;
            }

            .mini-cart ul.cart-item-loop li.cart-item .cart-image a img {
                backface-visibility: hidden;
            }

            .mini-cart ul.cart-item-loop li.cart-item .cart-title {
                width: calc(100% - 80px);

                margin-left: 15px;

            }

            .mini-cart ul.cart-item-loop li.cart-item .cart-title a {
                display: block;
                font-weight: 500;
            }

            .mini-cart ul.cart-item-loop li.cart-item .cart-title .cart-pro-info {
                margin-top: 5px;
            }

            .mini-cart ul.cart-item-loop li.cart-item .cart-title .product-quantity-action {
                margin-top: 10px;
            }

            .mini-cart ul.cart-item-loop li.cart-item .cart-title .cart-pro-info .delete-item-cart {
                padding-top: 5px;
            }

            .mini-cart ul.cart-item-loop li.cart-item .cart-title .cart-pro-info .delete-item-cart a {
                font-size: 12px;
            }

            .mini-cart ul.cart-item-loop li.cart-item .cart-title .cart-pro-info .price-box .new-price {
                font-size: 14px;
            }

            /* minicart subtotal css */
            .mini-cart ul.subtotal-title-area {
                position: absolute;
                bottom: 0;

                left: 0;

                width: 100%;
                display: flex;
                flex-direction: column;
                background-color: #fff;
            }

            .mini-cart ul.subtotal-title-area li {
                padding: 10px 15px 15px;
                border-top: 1px solid #e2e2e2;
            }

            .mini-cart ul.subtotal-title-area li.subtotal-info {
                padding: 10px 15px;
            }

            .mini-cart ul.subtotal-title-area li .subtotal-titles {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .mini-cart ul.subtotal-title-area li .subtotal-titles h6 {
                font-size: 14px;
            }

            .mini-cart ul.subtotal-title-area li .subtotal-titles .subtotal-price {
                color: var(--font-color-primary);
                font-weight: 600;
            }

            /* minicart checkbox css */
            .mini-cart ul.subtotal-title-area li .read-agree label {
                position: relative;

                padding-left: 25px;

                margin-bottom: 0;
                cursor: pointer;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            .mini-cart ul.subtotal-title-area li .read-agree label span.agree-text {
                font-size: 13px;
            }

            .mini-cart ul.subtotal-title-area li .read-agree label span.agree-text a {
                color: var(--font-color-primary);
            }

            .mini-cart ul.subtotal-title-area li .read-agree label span.agree-text a:hover {
                text-decoration: underline;
            }

            .mini-cart ul.subtotal-title-area li .read-agree label input.cust-checkbox {
                position: absolute;
                opacity: 0;
                cursor: pointer;
                height: 0;
                width: 0;
            }

            .mini-cart ul.subtotal-title-area li .read-agree label span.cust-check {
                position: absolute;
                top: 2px;

                left: 0;

                width: 17px;
                height: 17px;
                background-color: #fff;
                display: flex;
                align-items: center;
                justify-content: center;
                border: 1px solid #e2e2e2;

                overflow: hidden;
            }

            .mini-cart ul.subtotal-title-area li .read-agree:hover label span.cust-check,
            .mini-cart ul.subtotal-title-area li .read-agree label input.cust-checkbox:checked~span.cust-check {
                box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.15);
            }

            .mini-cart ul.subtotal-title-area li .read-agree label span.cust-check::after {
                display: none;
                content: "\eb7b";
                font-family: viewsicon !important;
                color: var(--font-color-body);
                font-size: 16px;
            }

            /* Show the checkmark when checked */
            .mini-cart ul.subtotal-title-area li .read-agree label input.cust-checkbox:checked~span.cust-check::after {
                display: block;
            }

            /* minicart button css */
            .mini-cart ul.subtotal-title-area li .cart-btns {
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                flex-direction: column;

                margin-left: -15px;

            }

            .mini-cart ul.subtotal-title-area li .cart-btns a {
                width: calc(100% - 15px);
                margin-top: 15px;

                margin-left: 15px;

            }

            .mini-cart ul.subtotal-title-area li .cart-btns a:first-child {
                margin-top: 9px;
            }

            /* minicart payment img css */
        </style>

        <!-- Modal -->
        <div class="modal fade" id="seachmodal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="crap-search">
                                        <button type="button" class="pop-close" data-bs-dismiss="modal"
                                            aria-label="Close"><i class="ri-close-line"></i></button>
                                        {{-- <form action="/search" method="get" class="search-bar" role="search">
                                            <div class="form-search">
                                                <input type="hidden" name="type" value="product">
                                                <input type="hidden" name="options[unavailable_products]"
                                                    value="show">
                                                <input type="hidden" name="options[prefix]" value="last">
                                                <input type="search" name="q" value=""
                                                    placeholder="Find your search" id="search" class="input-text"
                                                    aria-label="Search our store" required>
                                                <button class="search-btn" type="submit"><i
                                                        class="ri-search-line"></i></button>
                                            </div>
                                        </form> --}}
                                        <form action="{{ route('collection.all',['type'=> "products",'slug'=>'all']) }}" method="get" class="search-bar" role="search">
                                            <div class="form-search">
                                                {{-- <input type="hidden" name="type" value="product">
                                                <input type="hidden" name="options[unavailable_products]"
                                                    value="show">
                                                <input type="hidden" name="options[prefix]" value="last"> --}}
                                                <input type="search" name="q" value="@if(request()->get('q')) {{ request()->get('q') }} @endif"
                                                    placeholder="Find your search" id="search" class="input-text"
                                                    aria-label="Search our store" required>
                                                <button class="search-btn" type="submit"><i class="fas fa-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            #seachmodal .modal-dialog {
                margin: 0px;
                padding: 15px 0px;
                max-width: 100%;
                background-color: #FFFFFF;
            }

            #seachmodal .modal-content {
                border: none;
            }

            #seachmodal .modal-body {
                padding: 0px;
            }

            #seachmodal .crap-search {
                display: flex;
                flex-direction: column;
            }

            #seachmodal button.pop-close {
                color: var(--font-color-header);
                font-size: 17px;

                text-align: right;

                line-height: 1;
            }

            #seachmodal button.pop-close:hover {
                color: var(--font-color-primary);
            }

            #seachmodal .crap-search .search-bar {
                margin: 0px;
            }

            #seachmodal .crap-search .form-search {
                position: relative;
                display: flex;
                align-items: center;
                margin-top: 15px;

            }
            #seachmodal .crap-search .form-search input {
                background-color: #cccccc;
                padding: 10px !important;
            }
            #seachmodal .crap-search .form-search input.input-text {
                padding: 10px 0px;
                width: 100%;
                border: none;
                border-radius: 0;
                border-bottom: 1px solid #e2e2e2;
            }

            #seachmodal .crap-search .form-search button {
                color: var(--font-color-header);
                font-size: 16px;
                position: absolute;

                right: 10px;

            }

            #seachmodal .crap-search .form-search button:hover {
                color: var(--font-color-primary);
            }

            #seachmodal .crap-search .form-search button i {
                display: block;
                line-height: 0;
            }
        </style>
        <div class="header-bottom-area">
            <div class="container header-bottom-container">
                <div class="row header-bottom-container">
                    <div class="col header-bottom-container">
                        <div class="main-menu-area">
                            <nav class="main-navigation navbar-expand-xl">
                                <div class="box-header">
                                    <button class="close-box" type="button"><i class="ri-close-line"></i></button>
                                </div>
                                <div class="navbar-collapse" id="navbarContent">
                                    <div class="megamenu-content">
                                        <a href="#main-collapse" class="browse-cat" data-bs-toggle="collapse"
                                            aria-expanded="true">
                                            <span class="menu-icon"><i class="ri-menu-line"></i></span>
                                            <span class="menu-title">Menu</span>
                                            <span class="menu-arrow"><i class="fas fa-chevron-circle-down"></i></span>
                                        </a>
                                        <div class="mainwrap collapse show" id="main-collapse">
                                            <ul class="main-menu">





                                                <li class="menu-link parant">
                                                    <a aria-current="page" href="{{ route('index') }}" class="link-title active">
                                                        <span class="sp-link-title">Home</span>
                                                        {{-- <i class="fas fa-chevron-circle-down"></i> --}}
                                                    </a>
                                                    <a href="{{ route('index') }}"
                                                        class="link-title link-title-lg">
                                                        <span class="sp-link-title">Home</span>
                                                        {{-- <i class="fas fa-chevron-circle-down"></i> --}}
                                                    </a>

                                                </li>

                                                <script>
                                                    $('.megamenu-li').parent('.container').parent('ul').addClass('mega-menu');
                                                    $('.banner-wrap').parent('.container').parent('ul').addClass('bottom-banner');
                                                    $('.menu-banner').parent('.container').parent('ul').addClass('banner-menu');
                                                    $('.submenu-li').parent('.container').parent('ul').addClass('sub-menu');
                                                </script>





                                                <li class="menu-link parant">
                                                    <a href="{{ route('collection.all',['type'=> "products",'slug'=>'all']) }}" class="link-title ">
                                                        <span class="sp-link-title">Collection</span>
                                                        {{-- <i class="fas fa-chevron-circle-down"></i> --}}
                                                    </a>
                                                    <a href="#main-collapse-shop-mob" data-bs-toggle="collapse"
                                                        class="link-title link-title-lg">
                                                        <span class="sp-link-title">Collection</span>
                                                        {{-- <i class="fas fa-chevron-circle-down"></i> --}}
                                                    </a>
                                                    {{-- <ul class="dropdown-submenu collapse" id="main-collapse-shop-mob">
                                                        <div class="container p-0 ul">



                                                            <li class="megamenu-li parant">
                                                                <h2 class="sublink-title">Earphone</h2>
                                                                <a href="/collections/earphone" class="sublink-title">
                                                                    <span class="sp-link-title">Earphone</span>
                                                                    <i class="fas fa-chevron-circle-down"></i>
                                                                </a>
                                                                <a data-bs-toggle="collapse"
                                                                    href="#main-collapse-earphone"
                                                                    class="sublink-title sublink-title-lg">
                                                                    <span class="spb-link-title">Earphone</span>
                                                                    <i class="fas fa-chevron-circle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse"
                                                                    id="main-collapse-earphone">

                                                                    <li class="supmenu-li">
                                                                        <a href="/products/5g-smart-phone"
                                                                            class="suplink-title">
                                                                            <span class="spbp-link-title">5G smart
                                                                                phone</span>
                                                                        </a>
                                                                    </li>

                                                                    <li class="supmenu-li">
                                                                        <a href="/products/bluetooth-speakers"
                                                                            class="suplink-title">
                                                                            <span class="spbp-link-title">Bluetooth
                                                                                speakers</span>
                                                                        </a>
                                                                    </li>

                                                                    <li class="supmenu-li">
                                                                        <a href="/products/dell-computer"
                                                                            class="suplink-title">
                                                                            <span class="spbp-link-title">Dell
                                                                                computer</span>
                                                                        </a>
                                                                    </li>

                                                                    <li class="supmenu-li">
                                                                        <a href="/products/hp-laptop-i5"
                                                                            class="suplink-title">
                                                                            <span class="spbp-link-title">HP laptop
                                                                                I5</span>
                                                                        </a>
                                                                    </li>

                                                                    <li class="supmenu-li">
                                                                        <a href="/products/portable-camera"
                                                                            class="suplink-title">
                                                                            <span class="spbp-link-title">Portable
                                                                                camera</span>
                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </li>





                                                            <li class="megamenu-li parant">
                                                                <h2 class="sublink-title">Projector</h2>
                                                                <a href="/collections/projector"
                                                                    class="sublink-title">
                                                                    <span class="sp-link-title">Projector</span>
                                                                    <i class="fas fa-chevron-circle-down"></i>
                                                                </a>
                                                                <a data-bs-toggle="collapse"
                                                                    href="#main-collapse-projector"
                                                                    class="sublink-title sublink-title-lg">
                                                                    <span class="spb-link-title">Projector</span>
                                                                    <i class="fas fa-chevron-circle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse"
                                                                    id="main-collapse-projector">

                                                                    <li class="supmenu-li">
                                                                        <a href="/products/smart-watch"
                                                                            class="suplink-title">
                                                                            <span class="spbp-link-title">Smart
                                                                                watch</span>
                                                                        </a>
                                                                    </li>

                                                                    <li class="supmenu-li">
                                                                        <a href="/products/racing-wheel"
                                                                            class="suplink-title">
                                                                            <span class="spbp-link-title">Racing
                                                                                wheel</span>
                                                                        </a>
                                                                    </li>

                                                                    <li class="supmenu-li">
                                                                        <a href="/products/portable-camera"
                                                                            class="suplink-title">
                                                                            <span class="spbp-link-title">Portable
                                                                                camera</span>
                                                                        </a>
                                                                    </li>

                                                                    <li class="supmenu-li">
                                                                        <a href="/products/hp-laptop-i5"
                                                                            class="suplink-title">
                                                                            <span class="spbp-link-title">HP laptop
                                                                                I5</span>
                                                                        </a>
                                                                    </li>

                                                                    <li class="supmenu-li">
                                                                        <a href="/products/game-controller"
                                                                            class="suplink-title">
                                                                            <span class="spbp-link-title">Game
                                                                                controller</span>
                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </li>





                                                            <li class="megamenu-li parant">
                                                                <h2 class="sublink-title">Smart TV</h2>
                                                                <a href="/collections/smart-tv" class="sublink-title">
                                                                    <span class="sp-link-title">Smart TV</span>
                                                                    <i class="fas fa-chevron-circle-down"></i>
                                                                </a>
                                                                <a data-bs-toggle="collapse"
                                                                    href="#main-collapse-smart-tv"
                                                                    class="sublink-title sublink-title-lg">
                                                                    <span class="spb-link-title">Smart TV</span>
                                                                    <i class="fas fa-chevron-circle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse"
                                                                    id="main-collapse-smart-tv">

                                                                    <li class="supmenu-li">
                                                                        <a href="/products/bluetooth-speakers"
                                                                            class="suplink-title">
                                                                            <span class="spbp-link-title">Bluetooth
                                                                                speakers</span>
                                                                        </a>
                                                                    </li>

                                                                    <li class="supmenu-li">
                                                                        <a href="/products/5g-smart-tablet"
                                                                            class="suplink-title">
                                                                            <span class="spbp-link-title">5G smart
                                                                                tablet</span>
                                                                        </a>
                                                                    </li>

                                                                    <li class="supmenu-li">
                                                                        <a href="/products/bluetooth-speakers"
                                                                            class="suplink-title">
                                                                            <span class="spbp-link-title">Bluetooth
                                                                                speakers</span>
                                                                        </a>
                                                                    </li>

                                                                    <li class="supmenu-li">
                                                                        <a href="/products/dell-computer"
                                                                            class="suplink-title">
                                                                            <span class="spbp-link-title">Dell
                                                                                computer</span>
                                                                        </a>
                                                                    </li>

                                                                    <li class="supmenu-li">
                                                                        <a href="/products/game-controller"
                                                                            class="suplink-title">
                                                                            <span class="spbp-link-title">Game
                                                                                controller</span>
                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </li>





                                                            <li class="megamenu-li parant">
                                                                <h2 class="sublink-title">Smartphone</h2>
                                                                <a href="/collections/smartphone"
                                                                    class="sublink-title">
                                                                    <span class="sp-link-title">Smartphone</span>
                                                                    <i class="fas fa-chevron-circle-down"></i>
                                                                </a>
                                                                <a data-bs-toggle="collapse"
                                                                    href="#main-collapse-smartphone"
                                                                    class="sublink-title sublink-title-lg">
                                                                    <span class="spb-link-title">Smartphone</span>
                                                                    <i class="fas fa-chevron-circle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse"
                                                                    id="main-collapse-smartphone">

                                                                    <li class="supmenu-li">
                                                                        <a href="/products/portable-camera"
                                                                            class="suplink-title">
                                                                            <span class="spbp-link-title">Portable
                                                                                camera</span>
                                                                        </a>
                                                                    </li>

                                                                    <li class="supmenu-li">
                                                                        <a href="/products/drone-camera"
                                                                            class="suplink-title">
                                                                            <span class="spbp-link-title">Drone
                                                                                camera</span>
                                                                        </a>
                                                                    </li>

                                                                    <li class="supmenu-li">
                                                                        <a href="/products/racing-wheel"
                                                                            class="suplink-title">
                                                                            <span class="spbp-link-title">Racing
                                                                                wheel</span>
                                                                        </a>
                                                                    </li>

                                                                    <li class="supmenu-li">
                                                                        <a href="/products/bluetooth-speakers"
                                                                            class="suplink-title">
                                                                            <span class="spbp-link-title">Bluetooth
                                                                                speakers</span>
                                                                        </a>
                                                                    </li>

                                                                    <li class="supmenu-li">
                                                                        <a href="/products/wireless-headphones"
                                                                            class="suplink-title">
                                                                            <span class="spbp-link-title">Wireless
                                                                                headphones</span>
                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </li>



                                                        </div>
                                                    </ul> --}}
                                                </li>

                                                <script>
                                                    $('.megamenu-li').parent('.container').parent('ul').addClass('mega-menu');
                                                    $('.banner-wrap').parent('.container').parent('ul').addClass('bottom-banner');
                                                    $('.menu-banner').parent('.container').parent('ul').addClass('banner-menu');
                                                    $('.submenu-li').parent('.container').parent('ul').addClass('sub-menu');
                                                </script>





                                                <li class="menu-link parant">
                                                    <a href="{{ route('collection.view') }}" class="link-title ">
                                                        <span class="sp-link-title">Shop</span>
                                                        {{-- <i class="fas fa-chevron-circle-down"></i> --}}
                                                    </a>
                                                    <a href="#main-collapse-collection2" data-bs-toggle="collapse"
                                                        class="link-title link-title-lg">
                                                        <span class="sp-link-title">Shop</span>
                                                        {{-- <i class="fas fa-chevron-circle-down"></i> --}}
                                                    </a>
                                                    {{-- <ul class="dropdown-submenu collapse"
                                                        id="main-collapse-collection2">
                                                        <div class="container p-0 ul">







                                                            <li class="menu-banner banner-hover">
                                                                <a href="/collections/laptops-notebooks"
                                                                    class="banner-img">
                                                                    <img src="//cdn.shopify.com/s/files/1/0641/3431/6288/collections/electon-electronics-menu-banner-01.jpg?v=1650973553"
                                                                        class="img-fluid" alt="Laptops & notebooks">
                                                                </a>
                                                                <a href="/collections/laptops-notebooks"
                                                                    class="menu-banner-title">
                                                                    <span>Laptop</span>
                                                                </a>
                                                            </li>











                                                            <li class="menu-banner banner-hover">
                                                                <a href="/collections/desktop" class="banner-img">
                                                                    <img src="//cdn.shopify.com/s/files/1/0641/3431/6288/collections/electon-electronics-menu-banner-03.jpg?v=1650973535"
                                                                        class="img-fluid" alt="Desktop">
                                                                </a>
                                                                <a href="/collections/desktop"
                                                                    class="menu-banner-title">
                                                                    <span>Desktop</span>
                                                                </a>
                                                            </li>











                                                            <li class="menu-banner banner-hover">
                                                                <a href="/collections/camera" class="banner-img">
                                                                    <img src="//cdn.shopify.com/s/files/1/0641/3431/6288/collections/electon-electronics-menu-banner-02.jpg?v=1650973358"
                                                                        class="img-fluid" alt="Camera">
                                                                </a>
                                                                <a href="/collections/camera"
                                                                    class="menu-banner-title">
                                                                    <span>Camera</span>
                                                                </a>
                                                            </li>





                                                        </div>
                                                    </ul> --}}
                                                </li>

                                                <script>
                                                    $('.megamenu-li').parent('.container').parent('ul').addClass('mega-menu');
                                                    $('.banner-wrap').parent('.container').parent('ul').addClass('bottom-banner');
                                                    $('.menu-banner').parent('.container').parent('ul').addClass('banner-menu');
                                                    $('.submenu-li').parent('.container').parent('ul').addClass('sub-menu');
                                                </script>





                                                {{-- <li class="menu-link">
                                                    <a href="/blogs/news" class="link-title " href="/blogs/news">
                                                        <span class="sp-link-title">Blog</span>
                                                    </a>
                                                    <a href="/blogs/news" class="link-title link-title-lg">
                                                        <span class="sp-link-title">Blog</span>
                                                    </a>
                                                </li> --}}

                                                <script>
                                                    $('.megamenu-li').parent('.container').parent('ul').addClass('mega-menu');
                                                    $('.banner-wrap').parent('.container').parent('ul').addClass('bottom-banner');
                                                    $('.menu-banner').parent('.container').parent('ul').addClass('banner-menu');
                                                    $('.submenu-li').parent('.container').parent('ul').addClass('sub-menu');
                                                </script>





                                                {{-- <li class="menu-link parant">
                                                    <a href="#" class="link-title ">
                                                        <span class="sp-link-title">Pages</span>
                                                        <i class="fas fa-chevron-circle-down"></i>
                                                    </a>
                                                    <a href="#main-collapse-pages" data-bs-toggle="collapse"
                                                        class="link-title link-title-lg">
                                                        <span class="sp-link-title">Pages</span>
                                                        <i class="fas fa-chevron-circle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-submenu collapse" id="main-collapse-pages">
                                                        <div class="container p-0 ul">






                                                            <li class="submenu-li parant">
                                                                <a href="/pages/about-us" class="sublink-title">
                                                                    <span class="sp-link-title">About us</span>
                                                                </a>
                                                            </li>








                                                            <li class="submenu-li parant">
                                                                <a href="/pages/contact-us" class="sublink-title">
                                                                    <span class="sp-link-title">Contact us</span>
                                                                </a>
                                                            </li>








                                                            <li class="submenu-li parant">
                                                                <a href="/pages/faqs" class="sublink-title">
                                                                    <span class="sp-link-title">Faq's</span>
                                                                </a>
                                                            </li>








                                                            <li class="submenu-li parant">
                                                                <a href="https://electon6-store.myshopify.com/page/404"
                                                                    class="sublink-title">
                                                                    <span class="sp-link-title">Page 404</span>
                                                                </a>
                                                            </li>








                                                            <li class="submenu-li parant">
                                                                <a href="/pages/privacy-policy" class="sublink-title">
                                                                    <span class="sp-link-title">Privacy policy</span>
                                                                </a>
                                                            </li>








                                                            <li class="submenu-li parant">
                                                                <a href="/pages/terms-condition"
                                                                    class="sublink-title">
                                                                    <span class="sp-link-title">Terms &
                                                                        condition</span>
                                                                </a>
                                                            </li>



                                                        </div>
                                                    </ul>
                                                </li> --}}

                                                <script>
                                                    $('.megamenu-li').parent('.container').parent('ul').addClass('mega-menu');
                                                    $('.banner-wrap').parent('.container').parent('ul').addClass('bottom-banner');
                                                    $('.menu-banner').parent('.container').parent('ul').addClass('banner-menu');
                                                    $('.submenu-li').parent('.container').parent('ul').addClass('sub-menu');
                                                </script>


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- header-area end -->
    <script>
        $(window).scroll(function() {
            var sticky = $('.header-area'),
                scroll = $(window).scrollTop();
            if (scroll >= 150) {
                sticky.addClass('is-sticky');
            } else {
                sticky.removeClass('is-sticky');
            }
        });
    </script>

    <style>
        .header-kaj .header-area {
            padding-left: 40px;
            padding-right: 40px;
        }

        @media(max-width: 1199px) {
            .header-kaj .header-area {
                padding-left: 12px;
                padding-right: 12px;
            }
        }

        .header-area {}



        /* sticky menu css */
        .is-sticky {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 3;
            background-color: #ffffff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.15);
        }

        .header-area.is-sticky {
            animation: smoothScroll 1s forwards;
            border-bottom: none;
        }

        @keyframes smoothScroll {
            0% {
                transform: translateY(-200px);
            }

            100% {
                transform: translateY(0px);
            }
        }




        button.navbar-toggler {
            color: #929292;
        }
    </style>
