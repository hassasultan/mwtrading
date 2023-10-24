@extends('layouts.app')
@section('page_title', "Wish List")
@section('meta-image', asset('public/storage/image/banner/2023-01-12_.64_.webp'))
@section('description', "Get All the Products from here... ")
@section('content')
<main role="main">
    <div id="shopify-section-template--15924305166592__related-product" class="shopify-section">
        <section class="related-product">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="content-main-title">
                            <div class="section-cont-title">

                                <h2>
                                    <span>Liked product</span>
                                </h2>


                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>

                            </div>
                        </div>
                        <div class="swiper-container" id="related-slider-template--15924305166592__related-product">
                            <div class="swiper-wrapper">
                                @foreach ($wishlist as $row)
                                    <div class="swiper-slide">
                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a class="pro-img"
                                                        href="{{ route('product.details', $row->product->slug) }}">
                                                        <img class="img-fluid img1"
                                                            src="{{ asset('public/storage/' . $row->product->fea_img) }}"
                                                            alt="Drone camera" width="297px" height="297px"
                                                            style="width: 297px; height: 297px;">

                                                        <img class="img-fluid img2"
                                                            src="@if ($row->product->singleImage != null) {{ asset('public/storage/' . $row->product->singleImage->image) }} @else {{ asset('public/storage/' . $row->product->fea_img) }} @endif"
                                                            alt="Drone camera" width="297px" height="297px"
                                                            style="width: 297px; height: 297px;">

                                                    </a>
                                                    <div class="product-label">
                                                        <span
                                                            class="percent-count">-{{ number_format($row->product->discount, 1) }}%</span>
                                                        <span class="sale">SALE</span>

                                                    </div>
                                                    {{-- <div class="product-add-cart">
                                                    {!! Share::page(route('product.details', $row->slug))->facebook()->twitter()->whatsapp()->linkedin() !!}
                                                </div>
                                                <div class="product-action">
                                                    {!! Share::page(route('product.details', $row->slug))->facebook()->twitter()->whatsapp()->linkedin() !!}

                                                </div> --}}
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-info">
                                                        <div class="pro-title">
                                                            <a href="{{ route('product.details', $row->product->slug) }}"
                                                                title="Drone camera">{{ \Illuminate\Support\Str::limit($row->product->title, 15, $end = '...') }}</a>
                                                        </div>
                                                        <div class="price-box">

                                                            <span class="new-price new-price-compare"
                                                                id="ProductPrice2">${{ $row->product->new_price }}</span><span
                                                                class="old-price"
                                                                id="ComparePrice2">${{ $row->product->old_price }}</span>
                                                        </div>

                                                    </div>
                                                    <div class="product-info mt-3">
                                                        <div class="row">
                                                            <div class="col-4 text-start ps-4">
                                                                @if (auth()->check())
                                                                    @if ($row->product->wishlist == null)
                                                                        <a href="javascript:void(0)"
                                                                            class="text-start ms-2"
                                                                            onclick="liked({{ $row->product->id }})"
                                                                            alt="like" style="padding: 8px;"><i
                                                                                class="far fa-thumbs-up  fs-5"
                                                                                id="thumb-icon-{{ $row->product->id }}"></i></a>
                                                                    @else
                                                                        <a href="javascript:void(0)"
                                                                            class="text-start ms-2"
                                                                            onclick="liked({{ $row->product->id }})"
                                                                            alt="Unlike" style="padding: 8px;"><i
                                                                                class="fas fa-thumbs-up  fs-5"
                                                                                id="thumb-icon-{{ $row->product->id }}"
                                                                                style="color: #ed1c24;"></i></a>
                                                                    @endif
                                                                @else
                                                                    <a href="{{ route('login') }}"
                                                                        class="text-start ms-2"
                                                                        style="padding: 8px;"><i
                                                                            class="far fa-thumbs-up  fs-5"></i></a>
                                                                @endif
                                                            </div>
                                                            {{-- <div class="col-6 p-0">
                                                        </div> --}}
                                                            <div class="col-8 flat-social text-end">
                                                                {!! Share::page(route('product.details', $row->product->slug))->facebook()->twitter()->whatsapp()->linkedin() !!}

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
                    </div>
                </div>
            </div>
        </section>
        <script>
            var swiper = new Swiper('#related-slider-template--15924305166592__related-product', {
                slidesPerColumn: 1,
                slidesPerView: 4,
                spaceBetween: 30,
                observer: true,
                loop: true,
                observeParents: true,
                navigation: {
                    nextEl: '.swiper-button-next-template--15924305166592__related-product',
                    prevEl: '.swiper-button-prev-template--15924305166592__related-product',
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
</main>
@endsection
