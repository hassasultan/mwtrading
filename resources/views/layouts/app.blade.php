<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Koupon Deals') }}</title> --}}
    <title>@yield('page_title')</title>
    @php
        $site = App\Models\SiteSetting::first();
    @endphp
    <meta name="description" content="@yield('description')">
    <link rel="icon" type="image/x-icon" href="{{ asset('public/storage/'.$site->logo) }}">
    <meta property='og:title' content='@yield('page_title')' />
    <meta property='og:image' content='@yield('meta-image')' />
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property='og:description' content='@yield('description')' />
    <meta property='og:url' content='{{ url()->current() }}' />

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" inte
        grity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/css/swiper.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/css/viewsicon.css') }}" rel="stylesheet" type="text/css" media="all" />

    <link href="{{ asset('assets/css/collection-template.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/css/theme-custom.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/css/skin-theme.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/css/swatch-color.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/css/front.style.css') }}" rel="stylesheet" type="text/css" media="all" />

    <!-- Latest compiled and minified CSS -->


    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}"> --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-2/css/all.min.css"
        integrity="sha512-61a6zi50gYXGgd/n9+ZT2/RKnXr6lkRoWlS88AjFdoUHaIDnyBAcoE0Vs/QDU3lK3nCcUowNDqmQ8WaV0yT4qw==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        *,
        ::after,
        ::before {
            box-sizing: border-box
        }

        body {
            color: var(--font-color-body);
            font-size: var(--font-size-body);
            background-color: var(--background-color-body);
            font-family: 'Manrope', sans-serif;
            font-weight: 400;
            font-style: normal;
            letter-spacing: var(--font-letter-spacing-body);
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: var(--font-color-header);
            font-family: 'Manrope', sans-serif;
            font-weight: 600;
            font-style: normal;
        }

        .section-title h2,
        .content-main-title h2,
        .my-account-page .page-title h2 {
            color: var(--font-color-section-header);
            font-family: 'Manrope', sans-serif;
            font-weight: 800;
            font-style: normal;
            text-transform: uppercase;
        }

        p {
            color: var(--font-color-paragraph);
            font-family: 'Manrope', sans-serif;
            font-weight: 400;
            font-style: normal;
            line-height: var(--font-line-height-paragraph);
        }
    </style>
    <!-- JS -->

    <script src="{{ asset('assets/js/modernizr-2.8.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-1.12.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.vticker-min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/jquery.lazyload.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/jquery.isotope.min.js') }}"></script>
    <!-- Ajax Cart js -->
    <script
        src="{{ asset('assets/js/option_selection-9f517843f664ad329c689020fb1e45d03cac979f64b9eb1651ea32858b0ff452.js') }}">
    </script>
    <script src="{{ asset('assets/js/api.jquery-e94e010e92e659b566dbc436fdfe5242764380e00398907a14955ba301a4749f.js') }}">
    </script>
    <script src="{{ asset('assets/js/counter.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script
        src="{{ asset('assets/js/shopify_common-8ea6ac3faf357236a97f5de749df4da6e8436ca107bc3a4ee805cbf08bc47392.js') }}"
        type="text/javascript"></script>

</head>

<body id="electon6-store" class="template-index">
    {{-- <div class="preloader"></div> --}}
    {{-- <script>
        $(window).on('load', function() {
            $('.preloader').fadeOut('slow');
        });
    </script> --}}
    <style>
        .preloader {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #FFFFFF;
            z-index: 4;
        }
    </style>
    <div id="shopify-section-top-nocification-bar" class="shopify-section">
        @include('layouts.include.top-header')
    </div>
    <div id="shopify-section-header" class="shopify-section">
        @include('layouts.include.header')
    </div>

    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div> --}}
    <main role="main">
        @yield('content')
    </main>
    <div class="mm-fullscreen-bg"></div>
    <style>
        .mm-fullscreen-bg {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 4;
            opacity: 0;
            visibility: hidden;
        }

        .mm-fullscreen-bg.active {
            opacity: 1;
            visibility: visible;
        }

        .mm-fullscreen-bg,
        .mm-fullscreen-bg.active {
            -webkit-transition: all 0.3s ease-in-out 0s;
            -o-transition: all 0.3s ease-in-out 0s;
            transition: all 0.3s ease-in-out 0s;
        }
    </style>
    @include('layouts.include.footer')
    <script type="text/javascript" src="{{ asset('assets/js/timber.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/cart.api.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/wishlist.js') }}"></script>

    {{-- <script src="{{ asset('assets/js/app.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/public/js/app.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        var toastElList = [].slice.call(document.querySelectorAll('.toast'))
        var toastList = toastElList.map(function(toastEl) {
            return new bootstrap.Toast(toastEl)
        });
    </script>
    {{-- <script src="{{ asset('assets/user_dashboard/js/sweetalert.js') }}"></script> --}}

    {{-- <script src="{{ asset('assets/user_dashboard/js/summernote.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/user_dashboard/js/custom.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/user_dashboard/js/jquery.dataTables.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/user_dashboard/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/user_dashboard/js/dataTables.responsive.min.js') }}"></script> --}}
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    {{-- <script src="{{ asset('assets/user_dashboard/js/responsive.bootstrap4.min.js') }}"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>

    <script>
        function liked(id) {
            var url = "{{ URL('/') }}";
            url = url + "/add-to-like/" + id;
            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json', // added data type
                success: function(res) {
                    console.log(res);
                    if (res['message'] == "like") {
                        $("#thumb-icon-" + id).removeClass("far");
                        $("#thumb-icon-" + id).addClass("fas");
                        $("#thumb-icon-" + id).css("color", "#127139");
                        $("#like-count").html("(" + res['count'] + ")");
                    }
                    if (res['message'] == "unlike") {
                        $("#thumb-icon-" + id).removeClass("fas");
                        $("#thumb-icon-" + id).addClass("far");
                        $("#thumb-icon-" + id).css("color", "inherit");
                        $("#like-count").html("(" + res['count'] + ")");

                    }

                }
            });
        }

        $(document).ready(function() {
            $.ajax({
                type: "get",
                url: "{{ route('category.all') }}",

                success: function(data) {
                    console.log(data);
                    $("#main-collapse-shop").html("");
                    $("#main-collapse-shop-mob").html("");
                    var your_html = "<div class='container p-0 ul'>";
                    $.each(data['section'], function(key, val) {
                        your_html +=
                            "<li class='megamenu-li parant'><a href='/collection/section/" +
                            val['slug'] + "'><h2 class='sublink-title'>" + val['name'] +
                            "</h2></a>";
                        your_html += "<a href='/collection/section/" + val['slug'] +
                            "' class='sublink-title'>";
                        your_html += "<span class='sp-link-title'>" + val['name'] + "</span>";
                        your_html += "<i class='fas fa-chevron-circle-down'></i>";
                        your_html += "</a>";
                        your_html += "<a  href='/collection/section/" + val['slug'] + "'";
                        your_html += "class='sublink-title sublink-title-lg'>";
                        your_html += "<span class='spb-link-title'>" + val['name'] + "</span>";
                        your_html +=
                            "<button id='use-toggle' type='button' data-bs-toggle='collapse' data-bs-target='#main-collapse-" +
                            val['slug'] +
                            "' aria-expanded='false' aria-controls='main-collapse-" + val[
                                'slug'] +
                            "'><i class='fas fa-chevron-circle-down'></i></button>";
                        your_html +=
                            "</a> <ul class='dropdown-supmenu collapse' id='main-collapse-" +
                            val['slug'] + "'>";
                        $.each(val['products'], function(index, item) {
                            var text = item['title'];
                            var count = 15;
                            var result = text.slice(0, count) + (text.length > count ?
                                "..." : "");
                            your_html += "<li class='supmenu-li'>";
                            your_html += "<a href='/product/" + item['slug'] +
                                "' class='suplink-title'>";
                            your_html += "<span class='spbp-link-title'>" + result +
                                "</span>";
                            your_html += "</a>";
                            your_html += "</li>";
                        });
                        your_html += "</ul>";
                        your_html += "</li>";
                    });
                    your_html += '</div>';
                    $("#main-collapse-shop").append(your_html); //// For Append
                    $("#main-collapse-shop-mob").append(your_html); //// For Append
                    //collection
                    $("#main-collapse-collection").html("");
                    $("#main-collapse-collection2").html("");
                    $("#collapse-find-categories").html("");
                    var html_collect = "<div class='container p-0 ul'>";
                    var footer_html = "";
                    $.each(data['category'], function(key, val) {
                        if (key < 3) {
                            html_collect += "<li class='menu-banner banner-hover'>";
                            html_collect += "    <a href='/collection/category/" + val['slug'] +
                                "' class='banner-img'>";
                            html_collect +=
                                "        <img src='{{ asset('public/public/storage/') }}/" + val[
                                    'icon'] + "'";
                            html_collect += "            class='img-fluid' alt='" + val[
                                'name'] + "'>";
                            html_collect += "    </a>";
                            html_collect += "    <a href='/collection/section/" + val['slug'] +
                                "'";
                            html_collect += "        class='menu-banner-title'>";
                            html_collect += "        <span>" + val['name'] + "</span>";
                            html_collect += "    </a>";
                            html_collect += "</li>";
                        }

                        footer_html +=
                            "<li class='ftsublink-li'> <a href='/collection/category/" + val[
                                'slug'] + "' class='ft-sublink'>" + val['name'] + "</a></li>";
                    });
                    html_collect += "</div>";
                    $("#main-collapse-collection").append(html_collect); //// For Append
                    $("#main-collapse-collection2").append(html_collect); //// For Append
                    $("#collapse-find-categories").append(footer_html); //// For Append

                },
                error: function() {
                    // console.log(data);
                }
            });
        });
        $(document).ready(function() {
            $('.slider-big').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                centerMode: true,
                centerPadding: '0px',
                asNavFor: '.slider-small',


                adaptiveHeight: true,


            });
            $('.slider-small').slick({

                slidesToShow: 3,

                slidesToScroll: 1,
                arrows: true,
                prevArrow: '<button class="slick-prev"><i class="fas fa-arrow-left"></i></button>',
                nextArrow: '<button class="slick-next"><i class="fas fa-arrow-right"></i></button>',
                dots: false,

                centerMode: true,
                centerPadding: '0px',
                focusOnSelect: true,
                asNavFor: '.slider-big',

                responsive: [{
                    breakpoint: 480,
                    settings: {

                        slidesToShow: 3
                    }
                }]
            });
            $(window).resize(function() {
                $('.slider-big')[0].slick.refresh();
                $('.slider-small')[0].slick.refresh();
            });
        });

        var selectCallback = function(variant, selector) {
            timber.productPage({
                {{-- money_format: "${{ amount }}", --}}
                variant: variant,
                selector: selector
            });
            if (variant) {
                // Current variant select+
                var form = jQuery('#' + selector.domIdPrefix).closest('form');
                for (var i = 0, size = variant.options.size; i < size; i++) {
                    var val = variant.options[i].replace(/'/g, "&#039;");
                    var radioButton = form.find(".swatch[data-option-index='" + i + "'] :radio[value='" + val + "']");
                    if (radioButton.size()) {
                        radioButton.get(0).checked = true;
                    }
                }
            }
        };

        jQuery(function($) {
            new Shopify.OptionSelectors('productSelect', {
                product: {
                    "id": 7704599331072,
                    "title": "Drone camera",
                    "handle": "drone-camera",
                    "description": "\u003cdiv class=\"more-description\"\u003e\n\u003ch6\u003eMore Detail\u003c\/h6\u003e\n\u003cul\u003e\n\u003cli\u003eLorem Ipsum is simply dummy text of the printing and typesetting industry\u003c\/li\u003e\n\u003cli\u003eLorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\u003c\/li\u003e\n\u003cli\u003eIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged\u003c\/li\u003e\n\u003cli\u003eIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum\u003c\/li\u003e\n\u003cli\u003eContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003c\/div\u003e\n\u003cdiv class=\"more-description\"\u003e\n\u003ch6\u003eKey Specification\u003c\/h6\u003e\n\u003cul\u003e\n\u003cli\u003eIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout\u003c\/li\u003e\n\u003cli\u003eThe point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy\u003c\/li\u003e\n\u003cli\u003eVarious versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)\u003c\/li\u003e\n\u003cli\u003eThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable\u003c\/li\u003e\n\u003cli\u003eIf you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003c\/div\u003e",
                    "published_at": "2022-04-22T16:16:05+05:30",
                    "created_at": "2022-04-22T16:16:09+05:30",
                    "vendor": "Electron",
                    "type": "Laptops",
                    "tags": ["Vaano"],
                    "price": 6800000,
                    "price_min": 6800000,
                    "price_max": 8700000,
                    "available": true,
                    "price_varies": true,
                    "compare_at_price": 9000000,
                    "compare_at_price_min": 9000000,
                    "compare_at_price_max": 9559900,
                    "compare_at_price_varies": true,
                    "variants": [{
                        "id": 42671430041856,
                        "title": "DarkCyan \/ Nitrile",
                        "option1": "DarkCyan",
                        "option2": "Nitrile",
                        "option3": null,
                        "sku": "abccd-16",
                        "requires_shipping": true,
                        "taxable": true,
                        "featured_image": {
                            "id": 36926860689664,
                            "product_id": 7704599331072,
                            "position": 1,
                            "created_at": "2022-04-26T09:52:50+05:30",
                            "updated_at": "2022-04-26T09:52:51+05:30",
                            "alt": null,
                            "width": 630,
                            "height": 548,
                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0641\/3431\/6288\/products\/electon-electronics-product-05-a.jpg?v=1650946971",
                            "variant_ids": [42671430041856, 42671430107392, 42671430172928]
                        },
                        "available": true,
                        "name": "Drone camera - DarkCyan \/ Nitrile",
                        "public_title": "DarkCyan \/ Nitrile",
                        "options": ["DarkCyan", "Nitrile"],
                        "price": 8000000,
                        "weight": 0,
                        "compare_at_price": 9559900,
                        "inventory_management": "shopify",
                        "barcode": "",
                        "featured_media": {
                            "alt": null,
                            "id": 29489371087104,
                            "position": 1,
                            "preview_image": {
                                "aspect_ratio": 1.15,
                                "height": 548,
                                "width": 630,
                                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0641\/3431\/6288\/products\/electon-electronics-product-05-a.jpg?v=1650946971"
                            }
                        }
                    }, {
                        "id": 42671430074624,
                        "title": "DarkCyan \/ Latex",
                        "option1": "DarkCyan",
                        "option2": "Latex",
                        "option3": null,
                        "sku": "abccd-12",
                        "requires_shipping": true,
                        "taxable": true,
                        "featured_image": {
                            "id": 36926860591360,
                            "product_id": 7704599331072,
                            "position": 4,
                            "created_at": "2022-04-26T09:52:50+05:30",
                            "updated_at": "2022-04-26T09:52:50+05:30",
                            "alt": null,
                            "width": 630,
                            "height": 548,
                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0641\/3431\/6288\/products\/electon-electronics-product-05.jpg?v=1650946970",
                            "variant_ids": [42671430074624, 42671430140160, 42671430205696]
                        },
                        "available": true,
                        "name": "Drone camera - DarkCyan \/ Latex",
                        "public_title": "DarkCyan \/ Latex",
                        "options": ["DarkCyan", "Latex"],
                        "price": 7500000,
                        "weight": 0,
                        "compare_at_price": 9000000,
                        "inventory_management": "shopify",
                        "barcode": "",
                        "featured_media": {
                            "alt": null,
                            "id": 29489371185408,
                            "position": 4,
                            "preview_image": {
                                "aspect_ratio": 1.15,
                                "height": 548,
                                "width": 630,
                                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0641\/3431\/6288\/products\/electon-electronics-product-05.jpg?v=1650946970"
                            }
                        }
                    }, {
                        "id": 42671430107392,
                        "title": "DarkGoldenRod \/ Nitrile",
                        "option1": "DarkGoldenRod",
                        "option2": "Nitrile",
                        "option3": null,
                        "sku": "abccd-17",
                        "requires_shipping": true,
                        "taxable": true,
                        "featured_image": {
                            "id": 36926860689664,
                            "product_id": 7704599331072,
                            "position": 1,
                            "created_at": "2022-04-26T09:52:50+05:30",
                            "updated_at": "2022-04-26T09:52:51+05:30",
                            "alt": null,
                            "width": 630,
                            "height": 548,
                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0641\/3431\/6288\/products\/electon-electronics-product-05-a.jpg?v=1650946971",
                            "variant_ids": [42671430041856, 42671430107392, 42671430172928]
                        },
                        "available": false,
                        "name": "Drone camera - DarkGoldenRod \/ Nitrile",
                        "public_title": "DarkGoldenRod \/ Nitrile",
                        "options": ["DarkGoldenRod", "Nitrile"],
                        "price": 8600000,
                        "weight": 0,
                        "compare_at_price": 9000000,
                        "inventory_management": "shopify",
                        "barcode": "",
                        "featured_media": {
                            "alt": null,
                            "id": 29489371087104,
                            "position": 1,
                            "preview_image": {
                                "aspect_ratio": 1.15,
                                "height": 548,
                                "width": 630,
                                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0641\/3431\/6288\/products\/electon-electronics-product-05-a.jpg?v=1650946971"
                            }
                        }
                    }, {
                        "id": 42671430140160,
                        "title": "DarkGoldenRod \/ Latex",
                        "option1": "DarkGoldenRod",
                        "option2": "Latex",
                        "option3": null,
                        "sku": "abccd-18",
                        "requires_shipping": true,
                        "taxable": true,
                        "featured_image": {
                            "id": 36926860591360,
                            "product_id": 7704599331072,
                            "position": 4,
                            "created_at": "2022-04-26T09:52:50+05:30",
                            "updated_at": "2022-04-26T09:52:50+05:30",
                            "alt": null,
                            "width": 630,
                            "height": 548,
                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0641\/3431\/6288\/products\/electon-electronics-product-05.jpg?v=1650946970",
                            "variant_ids": [42671430074624, 42671430140160, 42671430205696]
                        },
                        "available": true,
                        "name": "Drone camera - DarkGoldenRod \/ Latex",
                        "public_title": "DarkGoldenRod \/ Latex",
                        "options": ["DarkGoldenRod", "Latex"],
                        "price": 6800000,
                        "weight": 0,
                        "compare_at_price": 9000000,
                        "inventory_management": "shopify",
                        "barcode": "",
                        "featured_media": {
                            "alt": null,
                            "id": 29489371185408,
                            "position": 4,
                            "preview_image": {
                                "aspect_ratio": 1.15,
                                "height": 548,
                                "width": 630,
                                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0641\/3431\/6288\/products\/electon-electronics-product-05.jpg?v=1650946970"
                            }
                        }
                    }, {
                        "id": 42671430172928,
                        "title": "DarkKhaki \/ Nitrile",
                        "option1": "DarkKhaki",
                        "option2": "Nitrile",
                        "option3": null,
                        "sku": "abccd-14",
                        "requires_shipping": true,
                        "taxable": true,
                        "featured_image": {
                            "id": 36926860689664,
                            "product_id": 7704599331072,
                            "position": 1,
                            "created_at": "2022-04-26T09:52:50+05:30",
                            "updated_at": "2022-04-26T09:52:51+05:30",
                            "alt": null,
                            "width": 630,
                            "height": 548,
                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0641\/3431\/6288\/products\/electon-electronics-product-05-a.jpg?v=1650946971",
                            "variant_ids": [42671430041856, 42671430107392, 42671430172928]
                        },
                        "available": true,
                        "name": "Drone camera - DarkKhaki \/ Nitrile",
                        "public_title": "DarkKhaki \/ Nitrile",
                        "options": ["DarkKhaki", "Nitrile"],
                        "price": 8700000,
                        "weight": 0,
                        "compare_at_price": 9000000,
                        "inventory_management": "shopify",
                        "barcode": "",
                        "featured_media": {
                            "alt": null,
                            "id": 29489371087104,
                            "position": 1,
                            "preview_image": {
                                "aspect_ratio": 1.15,
                                "height": 548,
                                "width": 630,
                                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0641\/3431\/6288\/products\/electon-electronics-product-05-a.jpg?v=1650946971"
                            }
                        }
                    }, {
                        "id": 42671430205696,
                        "title": "DarkKhaki \/ Latex",
                        "option1": "DarkKhaki",
                        "option2": "Latex",
                        "option3": null,
                        "sku": "abccd-11",
                        "requires_shipping": true,
                        "taxable": true,
                        "featured_image": {
                            "id": 36926860591360,
                            "product_id": 7704599331072,
                            "position": 4,
                            "created_at": "2022-04-26T09:52:50+05:30",
                            "updated_at": "2022-04-26T09:52:50+05:30",
                            "alt": null,
                            "width": 630,
                            "height": 548,
                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0641\/3431\/6288\/products\/electon-electronics-product-05.jpg?v=1650946970",
                            "variant_ids": [42671430074624, 42671430140160, 42671430205696]
                        },
                        "available": true,
                        "name": "Drone camera - DarkKhaki \/ Latex",
                        "public_title": "DarkKhaki \/ Latex",
                        "options": ["DarkKhaki", "Latex"],
                        "price": 7900000,
                        "weight": 0,
                        "compare_at_price": 9000000,
                        "inventory_management": "shopify",
                        "barcode": "",
                        "featured_media": {
                            "alt": null,
                            "id": 29489371185408,
                            "position": 4,
                            "preview_image": {
                                "aspect_ratio": 1.15,
                                "height": 548,
                                "width": 630,
                                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0641\/3431\/6288\/products\/electon-electronics-product-05.jpg?v=1650946970"
                            }
                        }
                    }],
                    "images": [
                        "\/\/cdn.shopify.com\/s\/files\/1\/0641\/3431\/6288\/products\/electon-electronics-product-05-a.jpg?v=1650946971",
                        "\/\/cdn.shopify.com\/s\/files\/1\/0641\/3431\/6288\/products\/electon-electronics-product-05-b.jpg?v=1650946971",
                        "\/\/cdn.shopify.com\/s\/files\/1\/0641\/3431\/6288\/products\/electon-electronics-product-05-c.jpg?v=1650946971",
                        "\/\/cdn.shopify.com\/s\/files\/1\/0641\/3431\/6288\/products\/electon-electronics-product-05.jpg?v=1650946970"
                    ],
                    "featured_image": "\/\/cdn.shopify.com\/s\/files\/1\/0641\/3431\/6288\/products\/electon-electronics-product-05-a.jpg?v=1650946971",
                    "options": ["Color", "Material"],
                    "media": [{
                        "alt": null,
                        "id": 29489371087104,
                        "position": 1,
                        "preview_image": {
                            "aspect_ratio": 1.15,
                            "height": 548,
                            "width": 630,
                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0641\/3431\/6288\/products\/electon-electronics-product-05-a.jpg?v=1650946971"
                        },
                        "aspect_ratio": 1.15,
                        "height": 548,
                        "media_type": "image",
                        "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0641\/3431\/6288\/products\/electon-electronics-product-05-a.jpg?v=1650946971",
                        "width": 630
                    }, {
                        "alt": null,
                        "id": 29489371119872,
                        "position": 2,
                        "preview_image": {
                            "aspect_ratio": 1.15,
                            "height": 548,
                            "width": 630,
                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0641\/3431\/6288\/products\/electon-electronics-product-05-b.jpg?v=1650946971"
                        },
                        "aspect_ratio": 1.15,
                        "height": 548,
                        "media_type": "image",
                        "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0641\/3431\/6288\/products\/electon-electronics-product-05-b.jpg?v=1650946971",
                        "width": 630
                    }, {
                        "alt": null,
                        "id": 29489371152640,
                        "position": 3,
                        "preview_image": {
                            "aspect_ratio": 1.15,
                            "height": 548,
                            "width": 630,
                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0641\/3431\/6288\/products\/electon-electronics-product-05-c.jpg?v=1650946971"
                        },
                        "aspect_ratio": 1.15,
                        "height": 548,
                        "media_type": "image",
                        "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0641\/3431\/6288\/products\/electon-electronics-product-05-c.jpg?v=1650946971",
                        "width": 630
                    }, {
                        "alt": null,
                        "id": 29489371185408,
                        "position": 4,
                        "preview_image": {
                            "aspect_ratio": 1.15,
                            "height": 548,
                            "width": 630,
                            "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0641\/3431\/6288\/products\/electon-electronics-product-05.jpg?v=1650946970"
                        },
                        "aspect_ratio": 1.15,
                        "height": 548,
                        "media_type": "image",
                        "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0641\/3431\/6288\/products\/electon-electronics-product-05.jpg?v=1650946970",
                        "width": 630
                    }],
                    "content": "\u003cdiv class=\"more-description\"\u003e\n\u003ch6\u003eMore Detail\u003c\/h6\u003e\n\u003cul\u003e\n\u003cli\u003eLorem Ipsum is simply dummy text of the printing and typesetting industry\u003c\/li\u003e\n\u003cli\u003eLorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\u003c\/li\u003e\n\u003cli\u003eIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged\u003c\/li\u003e\n\u003cli\u003eIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum\u003c\/li\u003e\n\u003cli\u003eContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003c\/div\u003e\n\u003cdiv class=\"more-description\"\u003e\n\u003ch6\u003eKey Specification\u003c\/h6\u003e\n\u003cul\u003e\n\u003cli\u003eIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout\u003c\/li\u003e\n\u003cli\u003eThe point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy\u003c\/li\u003e\n\u003cli\u003eVarious versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)\u003c\/li\u003e\n\u003cli\u003eThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable\u003c\/li\u003e\n\u003cli\u003eIf you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003c\/div\u003e"
                },
                onVariantSelected: selectCallback,
                enableHistoryState: true
            });

            // Add label if only one product option and it isn't 'Title'. Could be 'Size'.


            // Hide selectors if we only have 1 variant and its title contains 'Default'.


            // Auto-select first available variant on page load. Otherwise the product looks sold out.





            $('.single-option-selector:eq(0)').val("DarkCyan").trigger('change');

            $('.single-option-selector:eq(1)').val("Nitrile").trigger('change');













            $('.product-single .single-option-selector').wrap('<div class="selector-arrow">');
        });


        // product zoom
        function zoom(e) {
            var zoomer = e.currentTarget;
            e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
            e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
            x = offsetX / zoomer.offsetWidth * 100
            y = offsetY / zoomer.offsetHeight * 100
            zoomer.style.backgroundPosition = x + '% ' + y + '%';
        }


        // // product timer js
        // $('.counter-event-7704599331072').countdown($('.counter-event-7704599331072').attr("data-enddate")).on(
        //     'update.countdown',
        //     function(event) {
        //         var $this = $(this).html(event.strftime('' +
        //             '<ul class="contdown_row"><li class="countdown_section"><span id="days" class="countdown_timer">%-D</span><span class="countdown_title">Day</span></li>' +
        //             '<li class="countdown_section"><span id="hours" class="countdown_timer">%H</span><span class="countdown_title">Hour</span></li>' +
        //             '<li class="countdown_section"><span id="minutes" class="countdown_timer">%M</span><span class="countdown_title">Min</span></li>' +
        //             '<li class="countdown_section"><span id="seconds" class="countdown_timer">%S</span><span class="countdown_title">Sec</span></li></ul>'
        //             ))
        //     });

        // $(document).ready(function() {
        //     $(".pro-detail-button button.add-to-cart").on('click', function() {
        //         window.setTimeout(function() {
        //             $("#cart.mini-cart").addClass("show");
        //             $(".mm-fullscreen-bg").addClass("active");
        //             $("body").addClass("hidden");
        //         }, 1000);
        //     });
        //     $(".shopping-cart-close i").on('click', function() {
        //         if ($('#cart.mini-cart').hasClass('show')) {
        //             $('#cart.mini-cart').removeClass('show');
        //         }
        //         $(".mm-fullscreen-bg").removeClass("active");
        //         $("body").removeClass("hidden");
        //     });
        //     $(".mm-fullscreen-bg").on('click', function() {
        //         $("#cart.mini-cart").removeClass("show");
        //         $(".mm-fullscreen-bg").removeClass("active");
        //     });
        // });
    </script>

</body>

</html>
