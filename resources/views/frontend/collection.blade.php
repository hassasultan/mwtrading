@extends('layouts.app')
@section('page_title', "All Products")
@section('meta-image', asset('public/storage/image/banner/2023-01-12_.64_.webp'))
@section('description', "Get All the Products from here... ")
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
    <section class="breadcrumb02-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-index">
                        <!-- breadcrumb main-title start-->
                        <div class="breadcrumb-title">
                            <h2>Products</h2>
                        </div>
                        <!-- breadcrumb main-title end-->
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item">
                                <a href="/" title="Back to the home page">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span>Products</span>
                            </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main role="main">
        <div id="shopify-section-template--15924304740608__collection-template" class="shopify-section">
            <section class="main-content-wrap shop-page section-ptb">
                <div class="container">
                    <div class="row position-left">
                        <div class="col-xl-9 col-lg-8 col-md-12 col-12 pro-grli-wrap">
                            <div class="collection-img-wrap">
                                <h6 class="st-title">Products ({{ count($products) }})</h6>
                                {{-- <div class="collection-info">
                                    <div class="collection-image"><img class="img-fluid"
                                            src="//cdn.shopify.com/s/files/1/0641/3431/6288/files/collection-pages.jpg?v=1650968334">
                                    </div>
                                    <div class="collection-description">
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen
                                            book
                                        </p>

                                    </div>
                                </div> --}}
                            </div><!-- shop-top-bar start -->
                            <div class="shop-top-bar">
                                <div class="product-filter">
                                    <button class="filter-button" type="button">
                                        <i class="ri-filter-2-line"></i>
                                        <span>Filter</span>
                                    </button>
                                </div>

                                <div class="product-view-mode">
                                    <!-- shop-item-filter-list start -->
                                    <a class="list-change-view grid-three active" data-grid-view="3"><i
                                            class="ri-function-line"></i></a>
                                    <a class="list-change-view list-one " data-grid-view="1"><i
                                            class="ri-list-unordered"></i></a>
                                    <!-- shop-item-filter-list end -->
                                </div>



                                <!-- product-short start -->
                                {{-- <div class="product-short">
                                    <label for="SortBy">Sort by:</label>
                                    <select class="nice-select" name="sortby" id="SortBy">
                                        <option value="manual">Featured</option>
                                        <option value="best-selling">Best Selling</option>
                                        <option value="title-ascending">Alphabetically, A-Z</option>
                                        <option value="title-descending">Alphabetically, Z-A</option>
                                        <option value="price-ascending">Price, low to high</option>
                                        <option value="price-descending">Price, high to low</option>
                                        <option value="created-descending">Date, new to old</option>
                                        <option value="created-ascending">Date, old to new</option>
                                    </select><a href="javascript:void(0)" class="short-title">
                                        <span class="sort-title">Alphabetically, A-Z</span>
                                        <span class="sort-icon"><i class="ri-arrow-down-s-line"></i></span>
                                    </a>
                                    <a href="javascript:void(0)" class="short-title short-title-lg">
                                        <span class="sort-title">Alphabetically, A-Z</span>
                                        <span class="sort-icon"><i class="ri-arrow-down-s-line"></i></span>
                                    </a>
                                    <ul role="list" class="collapse" id="select-wrap">
                                        <li><a href="?sort_by=manual">Featured</a></li>
                                        <li><a href="?sort_by=best-selling">Best Selling</a></li>
                                        <li class="selected"><a href="?sort_by=title-ascending">Alphabetically, A-Z</a></li>
                                        <li><a href="?sort_by=title-descending">Alphabetically, Z-A</a></li>
                                        <li><a href="?sort_by=price-ascending">Price, low to high</a></li>
                                        <li><a href="?sort_by=price-descending">Price, high to low</a></li>
                                        <li><a href="?sort_by=created-descending">Date, new to old</a></li>
                                        <li><a href="?sort_by=created-ascending">Date, old to new</a></li>
                                    </ul>
                                </div> --}}

                                <!-- product-short end -->
                            </div>
                            <!-- shop-top-bar end -->
                            <div class="get-data-products">
                                <div class="shop-grid">
                                    <div id="ProductGridContainer">
                                        <div class="product-grid-view">
                                            <div class="shop-product-wrap grid-3 collection">
                                                <div class="row">
                                                    <div class="col">
                                                        <ul class="product-view" id="product-grid"
                                                            data-id="template--15924304740608__collection-template">
                                                            @foreach ($products as $row)
                                                                <li class="st-col-item">
                                                                    <div class="single-product-wrap">
                                                                        <div class="product-image">
                                                                            <a class="pro-img"
                                                                                href="{{ route('product.details', $row->slug) }}">
                                                                                <img class="img-fluid img1"
                                                                                    src="{{ asset('public/storage/' . $row->fea_img) }}"
                                                                                    alt="{{ $row->title }}">

                                                                                <img class="img-fluid img2"
                                                                                    src="@if ($row->singleImage != null) {{ asset('public/storage/' . $row->singleImage->image) }} @else {{ asset('public/storage/' . $row->fea_img) }} @endif"
                                                                                    alt="{{ $row->title }}">

                                                                            </a>
                                                                            {{-- <div class="product-label">



                                                                                <span
                                                                                    class="percent-count">-{{ number_format($row->discount, 1) }}%</span>
                                                                                <span class="sale">SALE</span>



                                                                            </div> --}}
                                                                            {{-- <div class="product-add-cart">

                                                                                <a href="javascript:void(0);"
                                                                                    onclick="Shopify.addItem(42671428763904, 1); return false;"
                                                                                    class="add-to-cart ajax-spin-cart">
                                                                                    <span class="cart-title">+Add to
                                                                                        cart</span>
                                                                                    <span class="cart-loading load-anim"><i
                                                                                            class="ri-loader-4-line"></i></span>
                                                                                    <span class="cart-added"><i
                                                                                            class="ri-check-line"></i></span>
                                                                                    <span class="cart-unavailable"><i
                                                                                            class="ri-alert-line"></i></span>
                                                                                </a>

                                                                            </div>
                                                                            <div class="product-action"><a
                                                                                    href="javascript:void(0)"
                                                                                    class="action-wishlist tile-actions--btn wishlist-btn wishlist"
                                                                                    data-product-handle="5g-smart-phone">
                                                                                    <span class="add-wishlist"><i
                                                                                            class="ri-heart-line"></i></span>
                                                                                    <span
                                                                                        class="loading-wishlist load-anim"><i
                                                                                            class="ri-loader-4-line"></i></span>
                                                                                    <span class="remove-wishlist"><i
                                                                                            class="ri-heart-fill"></i></span>
                                                                                </a>
                                                                                <a href="javascript:void(0);"
                                                                                    onclick="quiqview('5g-smart-phone')"
                                                                                    class="quick-view">
                                                                                    <i class="ri-eye-line"></i>
                                                                                </a>
                                                                                <a href="javascript:void(0);"
                                                                                    onclick="Shopify.addItem(42671428763904, 1); return false;"
                                                                                    class="add-to-cart ajax-spin-cart">
                                                                                    <span>
                                                                                        <span class="cart-title"><i
                                                                                                class="ri-shopping-bag-3-line"></i></span>
                                                                                        <span
                                                                                            class="cart-loading load-anim"><i
                                                                                                class="ri-loader-4-line"></i></span>
                                                                                        <span class="cart-added"><i
                                                                                                class="ri-check-line"></i></span>
                                                                                        <span class="cart-unavailable"><i
                                                                                                class="ri-alert-line"></i></span>
                                                                                    </span>
                                                                                </a>

                                                                            </div> --}}
                                                                        </div>
                                                                        <div class="product-content">
                                                                            <div class="product-info">
                                                                                <div class="pro-title">
                                                                                    <a href="{{ route('product.details', $row->slug) }}"
                                                                                        title="5G smart phone">{{ \Illuminate\Support\Str::limit($row->title, 55, $end = '...') }}</a>
                                                                                </div>
                                                                                {{-- <div class="price-box">
                                                                                    <span
                                                                                        class="new-price new-price-compare"
                                                                                        id="ProductPrice">${{ $row->new_price }}</span><span
                                                                                        class="old-price"
                                                                                        id="ComparePrice">${{ $row->old_price }}</span>
                                                                                </div>

                                                                                <div class="product-ratting">
                                                                                    <span class="spr-badge"
                                                                                        id="spr_badge_7704598905088"
                                                                                        data-rating="0.0"><span
                                                                                            class="spr-starrating spr-badge-starrating"><i
                                                                                                class="spr-icon spr-icon-star-empty"
                                                                                                aria-hidden="true"></i><i
                                                                                                class="spr-icon spr-icon-star-empty"
                                                                                                aria-hidden="true"></i><i
                                                                                                class="spr-icon spr-icon-star-empty"
                                                                                                aria-hidden="true"></i><i
                                                                                                class="spr-icon spr-icon-star-empty"
                                                                                                aria-hidden="true"></i><i
                                                                                                class="spr-icon spr-icon-star-empty"
                                                                                                aria-hidden="true"></i></span><span
                                                                                            class="spr-badge-caption">No
                                                                                            reviews</span>
                                                                                    </span>

                                                                                </div> --}}

                                                                                <p class="product-description">{{ \Illuminate\Support\Str::limit($row->title, 150, $end = '...') }}</p>
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
                                                                                                        style="color: #ed1c24;"></i></a>
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
                                                                                    <div class="col-12 full-fill text-center" style="color: #ed1c24">
                                                                                        <b>Full fill by Amazon</b>
                                                                                    </div>
                                                                                </div>
                                                                            </div> --}}
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                        <div class="d-flex justify-content-center pt-5 pagination">
                                                            {!! $products->links() !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-12 col-12 pro-grli-wrap">
                            <div id="main-collection-filters" data-id="template--15924304740608__collection-template">
                                <div class="shop-sidebar-inner">
                                    <div class="shop-sidebar-wrap filter-sidebar">
                                        <button class="close-filter-sidebar" type="button"><i
                                                class="ri-close-line"></i></button>
                                        <div class="shop-sidebar sidebar-wedget shop-collection">
                                            <h6 class="title">Categories</h6>
                                            <a class="title" data-bs-toggle="collapse"
                                                href="#collapse-Categories">Categories</a>
                                            <div class="collapse filter-element" id="collapse-Categories">
                                                <ul class="scrollbar">
                                                    @foreach ($category as $row)
                                                        <li><input type="checkbox" class="cust-checkbox"
                                                                name="{{ $row->name }}"
                                                                @if ($row->slug == $slug) checked @endif><a
                                                                href="{{ route('collection.all', ['type'=>'category','slug'=>$row->slug]) }}"
                                                                class="cust-checkbox-label" title="{{ $row->name }}">
                                                                <span class="filter-name">{{ $row->name }}</span>
                                                                <span
                                                                    class="count-check">({{ count($row->products) }})</span>
                                                                <span
                                                                    class="cust-check @if ($row->slug == $slug) cust-check2 @endif"></span>
                                                            </a>
                                                            <div class="collapse filter-element ps-3" id="collapse-Categories2" style="margin-bottom: 20px;">
                                                                <ul class="scrollbar">
                                                                    @foreach ($row->subCategory as $item)
                                                                    <li>
                                                                        <input type="checkbox" class="cust-checkbox"
                                                                        name="{{ $item->name }}"
                                                                        @if ($row->slug == $slug) checked @endif>
                                                                        <a
                                                                        href="javascript:void(0);"
                                                                        class="cust-checkbox-label" title="{{ $item->name }}">
                                                                        <span class="filter-name">{{ $item->name }}</span>
                                                                        <span
                                                                            class="count-check">({{ count($item->products) }})</span>
                                                                        <span
                                                                            class="cust-check @if ($row->slug == $slug) cust-check2 @endif"></span>
                                                                        </a>
                                                                    </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        {{-- <div class="shop-sidebar sidebar-wedget shop-collection">
                                            <h6 class="title">Collections</h6>
                                            <a class="title" data-bs-toggle="collapse"
                                                href="#collapse-Categories">Collections</a>
                                            <div class="collapse filter-element" id="collapse-Categories">
                                                <ul class="scrollbar">
                                                    @foreach ($section as $row)
                                                        <li><input type="checkbox" class="cust-checkbox"
                                                                name="{{ $row->name }}"
                                                                @if ($row->slug == $slug) checked @endif><a
                                                                href="{{ route('collection.all', ['type'=>'section','slug'=>$row->slug]) }}"
                                                                class="cust-checkbox-label" title="{{ $row->name }}">
                                                                <span class="filter-name">{{ $row->name }}</span>
                                                                <span
                                                                    class="count-check">({{ count($row->products) }})</span>
                                                                <span
                                                                    class="cust-check @if ($row->slug == $slug) cust-check2 @endif"></span>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <script
                                src="//cdn.shopify.com/s/files/1/0641/3431/6288/t/2/assets/collection-sidebar.js?v=172590729733297730601650619279"
                                defer="defer"></script>
                        </div>
                    </div>
                </div>
        </div>
        </section>
        </div>
    </main>
    <script>
        Shopify.queryParams = {};
        if (location.search.length) {
            for (var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i < aCouples.length; i++) {
                aKeyValue = aCouples[i].split('=');
                if (aKeyValue.length > 1) {
                    Shopify.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(aKeyValue[1]);
                }
            }
        }

        var $select = $('#SortBy');
        $('a[href="#sort"]').click(function() {
            $select.val($(this).data('select'));
            event.preventDefault();
            Shopify.queryParams.sort_by = jQuery(this).data('select');
            location.search = jQuery.param(Shopify.queryParams);
        });

        $('.list-change-view').on("click", function() {
            event.preventDefault();
            var data_grid = $(this).attr('data-grid-view');
            if ($('.shop-product-wrap').hasClass('grid-1') || $('.shop-product-wrap').hasClass('grid-2') || $(
                    '.shop-product-wrap').hasClass('grid-3') || $('.shop-product-wrap').hasClass('grid-4')) {

                $('.shop-product-wrap').removeClass('grid-1');
                $('.shop-product-wrap').removeClass('grid-2');
                $('.shop-product-wrap').removeClass('grid-3');
                $('.shop-product-wrap').removeClass('grid-4');
                $('.shop-product-wrap').addClass('grid-' + data_grid);
            } else {
                $('.shop-product-wrap').addClass('grid-' + data_grid);
            }
        });

        $('.list-change-view').on("click", function() {
            $('.list-change-view').removeClass('active');
            $(this).addClass('active');
        });

        $(function() {
            $('#SortBy').val('title-ascending').bind('change', function() {
                Shopify.queryParams.sort_by = jQuery(this).val();
                location.search = jQuery.param(Shopify.queryParams);
            });
        });

        $('.product-short a.short-title-lg').on('click', function() {
            if ($('#select-wrap').hasClass('active')) {
                $('#select-wrap').removeClass('active');
                $(this).removeClass('active');
            } else {
                $('#select-wrap').addClass('active');
                $(this).addClass('active');
            }
        });
    </script>
@endsection
