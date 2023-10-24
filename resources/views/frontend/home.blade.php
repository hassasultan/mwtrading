@extends('layouts.app')
@section('page_title', config('app.name', 'Koupon Deals'))
@section('meta-image', asset(''.$banner[0]->banner))
@section('description', "description")
@section('content')
<style data-shopify>
    .img1 , .img2
    {
        height: 297px;
    }
    @media(max-width: 767px) {
        .img1 , .img2{
            height: 150px;
        }
    }
</style>
    <div id="shopify-section-template--15924304773376__1646205661c30791db" class="shopify-section">
        <section class="slider-content">
            <div class="home-slider swiper-container" id="home-slider">
                <div class="swiper-wrapper">
                    @foreach ($banner as $row)
                        <div class="swiper-slide slider-item-4f5c2dd7-3445-494c-9535-36efc312feda{{ $row->id }}">
                            <div class="slide-image">
                                <a href="{{ $row->link }}" class="slider-image w-100">
                                    <img class="img-fluid desk-img w-100"
                                        src="{{ asset('public/storage/' . $row->banner) }}">

                                </a>
                                @if ($row->title != NULL)
                                    <div class="container">
                                        <div class="silder-content">
                                            <div class="slider-text-info text-center">

                                                <span class="sub-title" style="color: #ffffff;">
                                                    <span>* {{ $row->price_desc }}</span>
                                                </span>


                                                <h1 style="color:#ffffff;">
                                                    <span>{{ $row->title }}</span>
                                                </h1>


                                                <a class="slider-btn w-20" href="{{ $row->link }}">
                                                    {{ $row->title }}
                                                </a>

                                            </div>
                                        </div>
                                    </div>

                                @endif
                                <style data-shopify>
                                    @media(max-width: 767px) {
                                        .slider-content .home-slider .slider-item-4f5c2dd7-3445-494c-9535-36efc312feda .slide-image img {
                                            height: 400px;
                                            object-fit: cover;
                                        }
                                    }
                                    @media(min-width: 992px) {
                                        #home-slider {
                                                height: 500px;
                                            }
                                    }
                                </style>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="container">
                <div class="swiper-buttons">
                    <span>
                        <button class="button-prev"><i class="far fa-arrow-alt-circle-left"></i></button>
                    </span>
                    <span>
                        <button class="button-next"><i class="far fa-arrow-alt-circle-right"></i></i></button>
                    </span>
                </div>
            </div>
        </section>
        <script>
            var swiper = new Swiper('#home-slider', {
                slidesPerColumn: 1,
                slidesPerView: 1,
                spaceBetween: 0,
                observer: true,
                loop: true,
                // autoplay:
                // {
                // delay: 2000,
                // },
                observeParents: true,
                navigation: {
                    prevEl: '.button-prev',
                    nextEl: '.button-next',
                },

            });
        </script>


    </div>
    <div id="shopify-section-template--15924304773376__16506938940dc69a2a" class="shopify-section">
        <!-- Browuse categoryies -->
        <section class="slider-category">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="section-capture">
                            <div class="section-title">
                                <h1>Top categories</h1>
                            </div>
                        </div>

                        <div class="category-area">
                            <div class="cat-slider swiper-container"
                                id="category-slider-template--15924304773376__16506938940dc69a2a">
                                <div class="swiper-wrapper">
                                    @foreach ($category as $row)
                                        <div class="swiper-slide">
                                            <div class="category-wrap">
                                                <a href="{{ route('collection.all', ['type'=>'category','slug'=>$row->slug]) }}">
                                                    <img src="{{ asset('public/storage/' . $row->icon) }}"
                                                        class="img-fluid" alt="" width="249px" height="187px"
                                                        style="width: 249px; height: 187px;">
                                                    <span class="cat-title">{{ $row->name }}</span>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="swiper-buttons">
                                <button class="button-prev-template--15924304773376__16506938940dc69a2a"><i
                                        class="fas fa-angle-double-left"></i></button>
                                <button class="button-next-template--15924304773376__16506938940dc69a2a"><i
                                        class="fas fa-angle-double-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script type="text/javascript">
            var swiper = new Swiper('#category-slider-template--15924304773376__16506938940dc69a2a', {
                slidesPerColumn: 2,
                slidesPerView: 4,
                spaceBetween: 30,
                observer: true,
                loop: false,
                observeParents: true,
                navigation: {
                    prevEl: '.button-prev-template--15924304773376__16506938940dc69a2a',
                    nextEl: '.button-next-template--15924304773376__16506938940dc69a2a',
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        spaceBetween: 12
                    },
                    479: {
                        slidesPerView: 2,
                        spaceBetween: 12
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 12
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 12
                    },
                    979: {
                        slidesPerView: 3,
                        spaceBetween: 12
                    },
                    1199: {
                        slidesPerView: 3
                    }
                }
            });
        </script>


    </div>
    {{-- <div id="shopify-section-template--15924304773376__165070382757d0715a" class="shopify-section">
        <section class="about-new">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-area">
                            <div class="about-title-area">
                                <div class="section-capture">
                                    <div class="section-title">

                                        <span>Electon electronics store 2022</span>


                                        <h2>Electronics design covers the required for engineers.</h2>

                                    </div>
                                </div>
                            </div>
                            <div class="about-content">

                                <p class="about-desc">Our experts cover the full spectrum on products, markets and
                                    technologies,from analog and power to embedded and automotive.</p>


                                <a href="/pages/about-us" class="btn btn-style">About store</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div> --}}
    {{-- <div id="shopify-section-template--15924304773376__1649408761a2f69460" class="shopify-section">
        <section class="banner2 banner2-template--15924304773376__1649408761a2f69460">
            <ul class="banner-block">

                <li class="banner-hover banner-133aec17-0055-4e39-925d-5f9f7a9822fe">
                    <a href="/collections/best-ratted" class="banner-img">
                        <img src="//cdn.shopify.com/s/files/1/0641/3431/6288/files/banner-1.jpg?v=1650949410"
                            class="img-fluid" alt="">
                        <div class="banner-content">
                            <div class="banner-tilte">
                                <h2 style="color: #ffffff;">
                                    <span>Music N7</span>
                                    <span>handsfree</span>
                                </h2>

                                <span class="button btn btn-style2">Shop now</span>

                            </div>
                        </div>
                    </a>
                </li>

                <li class="banner-hover banner-23af6d97-2ce6-472a-a2d5-484286dd17aa">
                    <a href="/collections/top-selling" class="banner-img">
                        <img src="//cdn.shopify.com/s/files/1/0641/3431/6288/files/banner-2.jpg?v=1650949410"
                            class="img-fluid" alt="">
                        <div class="banner-content">
                            <div class="banner-tilte">
                                <h2 style="color: #ffffff;">
                                    <span>Slim tablet</span>
                                    <span>collection</span>
                                </h2>

                                <span class="button btn btn-style2">Shop now</span>

                            </div>
                        </div>
                    </a>
                </li>

                <li class="banner-hover banner-30fd615c-5072-4f4b-b2ba-b8a98c3bf6ee">
                    <a href="/collections/camera" class="banner-img">
                        <img src="//cdn.shopify.com/s/files/1/0641/3431/6288/files/banner-3.jpg?v=1650949410"
                            class="img-fluid" alt="">
                        <div class="banner-content">
                            <div class="banner-tilte">
                                <h2 style="color: #ffffff;">
                                    <span>Mini solo</span>
                                    <span>camera</span>
                                </h2>

                                <span class="button btn btn-style2">Shop now</span>

                            </div>
                        </div>
                    </a>
                </li>

            </ul>
        </section>
    </div> --}}

    {{-- @foreach ($section as $item)
    <div id="shopify-section-template--15924304773376__1650876933ae7882f4{{ $item->id }}"
        class="shopify-section">
        <section class="new-category collection-category-template--15924304773376__1650876933ae7882f4">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="pro-area">
                            <div class="section-capture">
                                <div class="section-title">

                                    <h2>
                                        {{ $item->name }}
                                    </h2>

                                </div>
                            </div>

                            <div class="swiper-container feture_pro_tab" id="new-product-{{ $item->id }}">
                                <div class="swiper-wrapper">
                                    @foreach ($item->products as $row)
                                        <div class="swiper-slide  change-div-mod">
                                            <div class="swiper-slide">
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a class="pro-img"
                                                            href="{{ route('product.details', $row->slug) }}">
                                                            <img class="img-fluid img1"
                                                                src="{{ asset('public/storage/' . $row->fea_img) }}"
                                                                alt="Drone camera"
                                                                >

                                                            <img class="img-fluid img2"
                                                                src="@if ($row->singleImage != null) {{ asset('public/storage/' . $row->singleImage->image) }} @else {{ asset('public/storage/' . $row->fea_img) }} @endif"
                                                                alt="Drone camera"
                                                                >

                                                        </a>
                                                        <div class="product-label">
                                                            <span
                                                                class="percent-count">-{{ number_format($row->discount, 1) }}%</span>
                                                            <span class="sale">SALE</span>

                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-info">
                                                            <div class="pro-title">
                                                                <a href="{{ route('product.details', $row->slug) }}"
                                                                    title="Drone camera">{{ \Illuminate\Support\Str::limit($row->title, 35, $end = '...') }}</a>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="swiper-buttons">
                                <button
                                    class="swiper-button swiper-button-prev-template--15924304773376__1650876933ae7882f4"><i
                                        class="fas fa-angle-double-left"></i></button>
                                <button
                                    class="swiper-button swiper-button-next-template--15924304773376__1650876933ae7882f4"><i
                                        class="fas fa-angle-double-right"></i></button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            var swiper = new Swiper('#new-product-{{ $item->id }}', {
                slidesPerColumn: 1,
                slidesPerView: 4,
                spaceBetween: 30,
                observer: true,
                loop: false,
                observeParents: true,
                navigation: {
                    nextEl: '.swiper-button-next-template--15924304773376__1650876933ae7882f4',
                    prevEl: '.swiper-button-prev-template--15924304773376__1650876933ae7882f4',
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        spaceBetween: 12
                    },
                    479: {
                        slidesPerView: 2,
                        spaceBetween: 12
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 12
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 12
                    },
                    979: {
                        slidesPerView: 3,
                        spaceBetween: 12
                    },
                    1199: {
                        slidesPerView: 3
                    }
                }
            });
        </script>



    </div>
@endforeach --}}
<div class="container-fluid p-5" style="background-color: var(--font-color-primary); ">
    <div class="container text-center">
        <h2 class="text-white fw-bold">How We Do It?</h2>
        <div class="row p-5">
            <div class="col-md-4 p-2">
                <div class="card  text-center p-5" style="border-radius: 10px;">
                    <i class="fas fa-certificate mt-3 mb-3 fs-1" style="color: #127139;"></i>
                    <h4 class="mt-3 mb-3" style="color: #127139; font-weight:bold">QUALITY</h4>
                    <p class="mt-3 mb-3">We are providing you best quality of products</p>
                </div>
            </div>
            <div class="col-md-4 p-2">
                <div class="card  text-center p-5" style="border-radius: 10px;">
                    <i class="fas fa-certificate mt-3 mb-3 fs-1" style="color: #127139;"></i>
                    <h4 class="mt-3 mb-3" style="color: #127139; font-weight:bold">QUALITY</h4>
                    <p class="mt-3 mb-3">We are providing you best quality of products</p>
                </div>
            </div>
            <div class="col-md-4 p-2">
                <div class="card  text-center p-5" style="border-radius: 10px;">
                    <i class="fas fa-certificate mt-3 mb-3 fs-1" style="color: #127139;"></i>
                    <h4 class="mt-3 mb-3" style="color: #127139; font-weight:bold">QUALITY</h4>
                    <p class="mt-3 mb-3">We are providing you best quality of products</p>
                </div>
            </div>
        </div>
    </div>
</div>
    <div id="shopify-section-template--15924304773376__1648468991dc771b4f" class="shopify-section mt-4">
        <!-- product-area start -->
        <section class="product-area product-tab-ptb">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="section-capture tab">
                            <div class="section-title">

                                <h2>
                                    our products
                                </h2>
                            </div>
                        </div>

                        <div class="tab-content tabs">
                            <div class="tab-pane fade active show" id="tab-5da1d9d0-c890-4438-87bc-6819abcbcf2a"
                                role="tabpanel">
                                <div class="feture_pro_tab swiper-container"
                                    id="featured-5da1d9d0-c890-4438-87bc-6819abcbcf2a">
                                    <div class="swiper-wrapper">
                                        @foreach ($product as $row)
                                            <div class="swiper-slide">
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a class="pro-img"
                                                            href="{{ route('product.details', $row->slug) }}">
                                                            <img class="img-fluid img1"
                                                                src="{{ asset('public/storage/' . $row->fea_img) }}"
                                                                alt="{{ $row->slug }}"
                                                                >

                                                            <img class="img-fluid img2"
                                                                src="@if ($row->singleImage != null) {{ asset('public/storage/' . $row->singleImage->image) }} @else {{ asset('public/storage/' . $row->fea_img) }} @endif"
                                                                alt="{{ $row->slug }}"
                                                                >

                                                        </a>
                                                        {{-- <div class="product-label">
                                                            <span
                                                                class="percent-count">-{{ number_format($row->discount, 1) }}%</span>
                                                            <span class="sale">SALE</span>

                                                        </div> --}}

                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-info">
                                                            <div class="pro-title">
                                                                <a href="{{ route('product.details', $row->slug) }}"
                                                                    title="Drone camera">{{ \Illuminate\Support\Str::limit($row->title, 55, $end = '...') }}</a>
                                                            </div>
                                                            {{-- <div class="price-box">

                                                                <span class="new-price new-price-compare"
                                                                    id="ProductPrice2">${{ $row->new_price }}</span><span
                                                                    class="old-price"
                                                                    id="ComparePrice2">${{ $row->old_price }}</span>
                                                            </div> --}}

                                                        </div>
                                                        {{-- <div class="product-info mt-3">
                                                            <div class="row">
                                                                <div class="col-3 text-center p-1">
                                                                    @if (auth()->check())
                                                                        @if ($row->wishlist == null)
                                                                            <a href="javascript:void(0)"
                                                                                class="text-start ms-2"
                                                                                onclick="liked({{ $row->id }})"
                                                                                alt="like"
                                                                                style="padding: 8px;"><i
                                                                                    class="far fa-thumbs-up  fs-5"
                                                                                    id="thumb-icon-{{ $row->id }}"></i></a>
                                                                        @else
                                                                            <a href="javascript:void(0)"
                                                                                class="text-start ms-2"
                                                                                onclick="liked({{ $row->id }})"
                                                                                alt="Unlike"
                                                                                style="padding: 8px;"><i
                                                                                    class="fas fa-thumbs-up  fs-5"
                                                                                    id="thumb-icon-{{ $row->id }}"
                                                                                    style="color: #127139;"></i></a>
                                                                        @endif
                                                                    @else
                                                                        <a href="{{ route('login') }}"
                                                                            class="text-start ms-2"
                                                                            style="padding: 8px;"><i
                                                                                class="far fa-thumbs-up  fs-5"></i></a>
                                                                    @endif
                                                                </div>
                                                                <div class="col-6 text-center p-1">
                                                                    @php
                                                                        $fdate = $row->coupon[0]->expiry;
                                                                        $tdate = \Carbon\Carbon::now();
                                                                        $datetime1 = new DateTime($fdate);
                                                                        $datetime2 = new DateTime($tdate);
                                                                        $interval = $datetime1->diff($datetime2);
                                                                        $days = $interval->format('%a');//now do whatever you like with $days
                                                                    @endphp
                                                                    <b>{{ $days }} days left</b>
                                                                </div>
                                                                <div class="col-3 flat-social text-center p-1">
                                                                    <i class="fas fa-share share_custom me-2"></i>

                                                                    {!! Share::page(route('product.details', $row->slug))->facebook()->twitter()->whatsapp()->linkedin() !!}

                                                                </div>
                                                                <div class="col-12 full-fill text-center" style="color: #127139">
                                                                    <b>Full fill by Amazon</b>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                    </div>
                                                </div>

                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="swiper-buttons">
                                    <button class="button-prev-template--15924304773376__1648468991dc771b4f"><i
                                            class="ri-arrow-left-line"></i></button>
                                    <button class="button-next-template--15924304773376__1648468991dc771b4f"><i
                                            class="ri-arrow-right-line"></i></button>
                                </div>

                            </div>
                            <script>
                                var swiper = new Swiper('#featured-5da1d9d0-c890-4438-87bc-6819abcbcf2a', {
                                    slidesPerColumn: 2,
                                    slidesPerView: 4,
                                    spaceBetween: 30,
                                    observer: true,
                                    loop: false,
                                    observeParents: true,
                                    navigation: {
                                        nextEl: '.button-next-template--15924304773376__1648468991dc771b4f',
                                        prevEl: '.button-prev-template--15924304773376__1648468991dc771b4f',
                                    },
                                    breakpoints: {
                                        0: {
                                            slidesPerView: 1,
                                            spaceBetween: 12
                                        },
                                        479: {
                                            slidesPerView: 2,
                                            spaceBetween: 12
                                        },
                                        640: {
                                            slidesPerView: 2,
                                            spaceBetween: 12
                                        },
                                        768: {
                                            slidesPerView: 3,
                                            spaceBetween: 12
                                        },
                                        979: {
                                            slidesPerView: 3,
                                            spaceBetween: 12
                                        },
                                        1199: {
                                            slidesPerView: 3
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
        </section>
        <!-- product-area end -->


    </div>



    {{-- <div id="shopify-section-template--15924304773376__1650876933ae7882f4" class="shopify-section">
        <section class="new-category collection-category-template--15924304773376__1650876933ae7882f4">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="pro-area">
                            <div class="section-capture">
                                <div class="section-title">

                                    <h2>
                                        Featured product
                                    </h2>

                                </div>
                            </div>

                            <div class="swiper-container feture_pro_tab" id="new-product-">
                                <div class="swiper-wrapper">
                                    @foreach ($featured as $row)
                                        <div class="swiper-slide">
                                            <div class="swiper-slide">
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a class="pro-img"
                                                            href="{{ route('product.details', $row->slug) }}">
                                                            <img class="img-fluid img1"
                                                                src="{{ asset('public/storage/' . $row->fea_img) }}"
                                                                alt="Drone camera"
                                                                >

                                                            <img class="img-fluid img2"
                                                                src="@if ($row->singleImage != null) {{ asset('public/storage/' . $row->singleImage->image) }} @else {{ asset('public/storage/' . $row->fea_img) }} @endif"
                                                                alt="Drone camera"
                                                                >

                                                        </a>
                                                        <div class="product-label">
                                                            <span
                                                                class="percent-count">-{{ number_format($row->discount, 1) }}%</span>
                                                            <span class="sale">SALE</span>

                                                        </div>

                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-info">
                                                            <div class="pro-title">
                                                                <a href="{{ route('product.details', $row->slug) }}"
                                                                    title="Drone camera">{{ \Illuminate\Support\Str::limit($row->title, 15, $end = '...') }}</a>
                                                            </div>
                                                            <div class="price-box">

                                                                <span class="new-price new-price-compare"
                                                                    id="ProductPrice2">${{ $row->new_price }}</span><span
                                                                    class="old-price"
                                                                    id="ComparePrice2">${{ $row->old_price }}</span>
                                                            </div>

                                                        </div>
                                                        <div class="product-info mt-3">
                                                            <div class="row">
                                                                <div class="col-3 text-center p-1">
                                                                    @if (auth()->check())
                                                                        @if ($row->wishlist == null)
                                                                            <a href="javascript:void(0)"
                                                                                class="text-start ms-2"
                                                                                onclick="liked({{ $row->id }})"
                                                                                alt="like"
                                                                                style="padding: 8px;"><i
                                                                                    class="far fa-thumbs-up  fs-5"
                                                                                    id="thumb-icon-{{ $row->id }}"></i></a>
                                                                        @else
                                                                            <a href="javascript:void(0)"
                                                                                class="text-start ms-2"
                                                                                onclick="liked({{ $row->id }})"
                                                                                alt="Unlike"
                                                                                style="padding: 8px;"><i
                                                                                    class="fas fa-thumbs-up  fs-5"
                                                                                    id="thumb-icon-{{ $row->id }}"
                                                                                    style="color: #127139;"></i></a>
                                                                        @endif
                                                                    @else
                                                                        <a href="{{ route('login') }}"
                                                                            class="text-start ms-2"
                                                                            style="padding: 8px;"><i
                                                                                class="far fa-thumbs-up  fs-5"></i></a>
                                                                    @endif
                                                                </div>
                                                                <div class="col-6 text-center p-1">
                                                                    @php
                                                                        $fdate = $row->coupon[0]->expiry;
                                                                        $tdate = \Carbon\Carbon::now();
                                                                        $datetime1 = new DateTime($fdate);
                                                                        $datetime2 = new DateTime($tdate);
                                                                        $interval = $datetime1->diff($datetime2);
                                                                        $days = $interval->format('%a');//now do whatever you like with $days
                                                                    @endphp
                                                                    <b>{{ $days }} days left</b>
                                                                </div>
                                                                <div class="col-md-3 flat-social text-center p-1">
                                                                    <i class="fas fa-share share_custom me-2"></i>

                                                                    {!! Share::page(route('product.details', $row->slug))->facebook()->twitter()->whatsapp()->linkedin() !!}

                                                                </div>
                                                                <div class="col-12 full-fill text-center" style="color: #127139">
                                                                    <b>Full fill by Amazon</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="swiper-buttons">
                                <button
                                    class="swiper-button swiper-button-prev-template--15924304773376__1650876933ae7882f4"><i
                                        class="fas fa-angle-double-left"></i></button>
                                <button
                                    class="swiper-button swiper-button-next-template--15924304773376__1650876933ae7882f4"><i
                                        class="fas fa-angle-double-right"></i></button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            var swiper = new Swiper('#new-product-', {
                slidesPerColumn: 1,
                slidesPerView: 4,
                spaceBetween: 30,
                observer: true,
                loop: false,
                observeParents: true,
                navigation: {
                    nextEl: '.swiper-button-next-template--15924304773376__1650876933ae7882f4',
                    prevEl: '.swiper-button-prev-template--15924304773376__1650876933ae7882f4',
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        spaceBetween: 12
                    },
                    479: {
                        slidesPerView: 2,
                        spaceBetween: 12
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 12
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 12
                    },
                    979: {
                        slidesPerView: 3,
                        spaceBetween: 12
                    },
                    1199: {
                        slidesPerView: 3
                    }
                }
            });
        </script>



    </div> --}}
    {{-- <div id="shopify-section-template--15924304773376__16494142729bb2b305" class="shopify-section">
        <section class="our-brand-logo">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="swiper-container" id="brand-logo">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="brand-logo-area">
                                        <a href="" class="brand-img">
                                            <img class="img-fluid"
                                                src="//cdn.shopify.com/s/files/1/0641/3431/6288/files/brand-logo-5.png?v=1650950844 ">
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="brand-logo-area">
                                        <a href="" class="brand-img">
                                            <img class="img-fluid"
                                                src="//cdn.shopify.com/s/files/1/0641/3431/6288/files/brand-logo-2.png?v=1650950844 ">
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="brand-logo-area">
                                        <a href="" class="brand-img">
                                            <img class="img-fluid"
                                                src="//cdn.shopify.com/s/files/1/0641/3431/6288/files/brand-logo-3.png?v=1650950844 ">
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="brand-logo-area">
                                        <a href="" class="brand-img">
                                            <img class="img-fluid"
                                                src="//cdn.shopify.com/s/files/1/0641/3431/6288/files/brand-logo-1.png?v=1650950844 ">
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="brand-logo-area">
                                        <a href="" class="brand-img">
                                            <img class="img-fluid"
                                                src="//cdn.shopify.com/s/files/1/0641/3431/6288/files/brand-logo-6.png?v=1650950844 ">
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="brand-logo-area">
                                        <a href="" class="brand-img">
                                            <img class="img-fluid"
                                                src="//cdn.shopify.com/s/files/1/0641/3431/6288/files/brand-logo-4.png?v=1650950844 ">
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div> --}}
    <script>
        var swiper = new Swiper('#brand-logo', {
            slidesPerColumn: 1,
            slidesPerView: 4,
            spaceBetween: 30,
            observer: true,
            loop: true,
            observeParents: true,
            navigation: {
                nextEl: '.swiper-button-next-template--15924304773376__16494142729bb2b305',
                prevEl: '.swiper-button-prev-template--15924304773376__16494142729bb2b305',
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 12
                },
                479: {
                    slidesPerView: 2,
                    spaceBetween: 12
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 12
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 12
                },
                979: {
                    slidesPerView: 3,
                    spaceBetween: 12
                },
                1199: {
                    slidesPerView: 3
                }
            }
        });
    </script>
@endsection
