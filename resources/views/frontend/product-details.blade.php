@extends('layouts.app')
@section('page_title', $product->meta_title)
@section('meta-image', asset('public/storage/'.$product->fea_img))
@section('description', $product->meta_description)
@section('content')
    <style>
        .modalCopiedbtn {
            background-color: var(--font-color-primary);
            color: #fff;
            font-size: 16px;
            font-weight: 500;
            padding: 18px 30px;
            line-height: 1;
            text-transform: uppercase;
        }

        .modalCopiedbtn:hover {
            background-color: #fff;
            color: var(--font-color-primary);
            border: 1px solid var(--font-color-primary);
        }
    </style>
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
    <main role="main">
        <div id="shopify-section-template--15924305166592__product-template" class="shopify-section">
            <section class="product-details-page">
                <div class="container">
                    <div class="row pro_details_pos">
                        <div class="col-xl-5 col-lg-6 col-md-12 col-12 product_details">
                            <!-- product_Prev_images start -->
                            @if ($prev != null)
                                <a class="next-prev-product prev" href="{{ route('product.details', $prev->slug) }}" title="{{ $prev->title }}">
                                    <span>Prev</span>
                                </a>
                            @endif
                            <!-- product_Next_images end -->
                            @if ($next != null)

                            <a class="next-prev-product next" href="{{ route('product.details', $next->slug) }}" title="{{ $next->title }}">
                                <span>Next</span>
                            </a>
                            @endif

                            <div class="product_detail_img">
                                <!-- product big image start -->
                                <div class="product_img_top">
                                    <button class="full-view"><i class="fas fa-expand"></i></button>
                                    <div class="slider-big">
                                        <div class="slick-slide"
                                            data-image="{{ asset('public/storage/' . $product->fea_img) }}"
                                            data-image-id="image-fea-{{ $product->id }}">
                                            <a href="{{ asset('public/storage/' . $product->fea_img) }}"
                                                class="product-single__thumbnail"
                                                data-image-id="image-fea-{{ $product->id }}">
                                                <figure class="zoom" onmousemove="zoom(event)"
                                                    style="background-image: url({{ asset('public/storage/' . $product->fea_img) }})">
                                                    <img src="{{ asset('public/storage/' . $product->fea_img) }}"
                                                        class="img-fluid product-featured-media" id=""
                                                        alt="Drone camera">
                                                </figure>
                                            </a>
                                        </div>
                                        @foreach ($product->images as $row)
                                            <div class="slick-slide"
                                                data-image="{{ asset('public/storage/' . $row->image) }}"
                                                data-image-id="image-{{ $row->id }}">
                                                <a href="{{ asset('public/storage/' . $row->image) }}"
                                                    class="product-single__thumbnail"
                                                    data-image-id="image-{{ $row->id }}">
                                                    <figure class="zoom" onmousemove="zoom(event)"
                                                        style="background-image: url({{ asset('public/storage/' . $row->image) }})">
                                                        <img src="{{ asset('public/storage/' . $row->image) }}"
                                                            class="img-fluid product-featured-media" id=""
                                                            alt="Drone camera">
                                                    </figure>
                                                </a>
                                            </div>
                                        @endforeach
                                        {{-- <div class="slick-slide"
                                            data-image="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-05-b.jpg?v=1650946971"
                                            data-image-id="29489371119872">


                                            <a href="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-05-b.jpg?v=1650946971"
                                                class="product-single__thumbnail" data-image-id="29489371119872">


                                                <figure class="zoom" onmousemove="zoom(event)"
                                                    style="background-image: url(//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-05-b.jpg?v=1650946971)">
                                                    <img src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-05-b.jpg?v=1650946971"
                                                        class="img-fluid product-featured-media" id=""
                                                        alt="Drone camera">
                                                </figure>

                                            </a>


                                        </div>
                                        <div class="slick-slide"
                                            data-image="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-05-c.jpg?v=1650946971"
                                            data-image-id="29489371152640">


                                            <a href="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-05-c.jpg?v=1650946971"
                                                class="product-single__thumbnail" data-image-id="29489371152640">


                                                <figure class="zoom" onmousemove="zoom(event)"
                                                    style="background-image: url(//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-05-c.jpg?v=1650946971)">
                                                    <img src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-05-c.jpg?v=1650946971"
                                                        class="img-fluid product-featured-media" id=""
                                                        alt="Drone camera">
                                                </figure>

                                            </a>


                                        </div>
                                        <div class="slick-slide"
                                            data-image="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-05.jpg?v=1650946970"
                                            data-image-id="29489371185408">


                                            <a href="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-05.jpg?v=1650946970"
                                                class="product-single__thumbnail" data-image-id="29489371185408">


                                                <figure class="zoom" onmousemove="zoom(event)"
                                                    style="background-image: url(//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-05.jpg?v=1650946970)">
                                                    <img src="//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-05.jpg?v=1650946970"
                                                        class="img-fluid product-featured-media" id=""
                                                        alt="Drone camera">
                                                </figure>

                                            </a>


                                        </div> --}}
                                    </div>
                                </div>
                                <!-- product big image end -->
                                <!-- product small image start -->
                                <div class="pro-slider">
                                    <div class="slider-small pro-detail-slider" id="pro-detail-slider">
                                        <div class="slick-slide"
                                            data-image="{{ asset('public/storage/' . $product->fea_img) }}"
                                            data-image-id="image-fea-{{ $product->id }}">
                                            <a href="javascript:void(0)" class="product-single__thumbnail">
                                                <img src="{{ asset('public/storage/' . $product->fea_img) }}"
                                                    class="img-fluid" alt="Drone camera"></a>
                                        </div>
                                        @foreach ($product->images as $row)
                                            <div class="slick-slide"
                                                data-image="{{ asset('public/storage/' . $row->image) }}"
                                                data-image-id="image-{{ $row->id }}">
                                                <a href="javascript:void(0)" class="product-single__thumbnail">
                                                    <img src="{{ asset('public/storage/' . $row->image) }}"
                                                        class="img-fluid" alt="Drone camera"></a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- product small image end -->
                            </div>
                        </div>

                        <div class="col-xl-7 col-lg-6 col-md-12 col-12 product_details">
                            <div class="product_details_info">
                                <div class="pro-nprist">
                                    <div class="product-info">
                                        <div class="product-title">
                                            <h2>{{ $product->title }}</h2>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="pro-prlb pro-sale">
                                            <div class="price-box">
                                                <span class="new-price"
                                                    id="ProductPrice1">${{ $product->new_price }}</span><span
                                                    class="old-price" id="ComparePrice1">${{ $product->old_price }}</span>
                                                <span class="percent-count"
                                                    id="ProductDiscount1">{{ number_format($product->discount, 1) }}</span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-ratting pro-sale">
                                            <span class="shopify-product-reviews-badge" data-id="7704599331072"></span>
                                        </div>

                                    </div>
                                    {{-- <div class="product-info">
                                        <div class="product-inventory" id="variant-inventory">


                                            <div class="product-variant">
                                                <h6>Availability:</h6>
                                                <span class="stock-qty in-stock text-success">
                                                    <span>In stock<i class="ri-check-line"></i></span>
                                                </span>
                                                <span class="stock-qty out-stock text-danger collapse">
                                                    <span>Out of stock<i class="ri-close-line"></i></span>
                                                </span>
                                            </div>
                                            <div class="stock-inventory stock-more text-success">
                                                <span>Hurry up! only</span>
                                                <span class="available-stock" id="ProductInventory">89</span>
                                                <span>products left in stock!</span>
                                            </div>
                                            <div class="stock-inventory stock-zero text-danger collapse">
                                                <span>Unfortunately</span>
                                                <span class="available-stock" id="ProductInventory">89</span>
                                                <span>products left in stock!</span>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="pro-detail-action">
                                            <form action="/cart/add" method="post" class="cart-7704599331072"
                                                enctype="multipart/form-data" id="add-item-form">
                                                <div class="product-variant-option">
                                                    <div class="select-variant">
                                                        <select name="id" id="productSelect"
                                                            class="product-single__variants">

                                                            <option data-stocks="89" selected="selected"
                                                                data-sku="abccd-16" value="42671430041856">DarkCyan /
                                                                Nitrile</option>

                                                            <option data-stocks="79" data-sku="abccd-12"
                                                                value="42671430074624">DarkCyan / Latex</option>

                                                            <option data-stocks="0" data-sku="abccd-17"
                                                                value="42671430107392">DarkGoldenRod / Nitrile</option>

                                                            <option data-stocks="14" data-sku="abccd-18"
                                                                value="42671430140160">DarkGoldenRod / Latex</option>

                                                            <option data-stocks="31" data-sku="abccd-14"
                                                                value="42671430172928">DarkKhaki / Nitrile</option>

                                                            <option data-stocks="10" data-sku="abccd-11"
                                                                value="42671430205696">DarkKhaki / Latex</option>

                                                        </select>
                                                    </div>
                                                    <div class="swatch-variant">











                                                        <script>
                                                            $(window).load(function() {
                                                                $('.selector-wrapper:eq(0)').hide();
                                                            });
                                                        </script>








                                                        <div class="swatch clearfix Color" data-option-index="0">
                                                            <h6 class="header">Color:</h6>
                                                            <div class="variant-property">







                                                                <div data-value="DarkCyan" data-stocks="89"
                                                                    class="swatch-element color darkcyan available">
                                                                    <input id="swatch-0-darkcyan" type="radio"
                                                                        name="option-0" value="DarkCyan" checked><label
                                                                        for="swatch-0-darkcyan"
                                                                        style="background-image: url(//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-05-a_small.jpg?v=1650946971;"
                                                                        title="darkcyan">

                                                                    </label>
                                                                </div>


                                                                <script>
                                                                    jQuery('.swatch[data-option-index="0"] .darkcyan').removeClass('soldout').addClass('available').find(':radio')
                                                                        .removeAttr('disabled');
                                                                </script>





                                                                <script>
                                                                    jQuery('.swatch[data-option-index="0"] .darkcyan').removeClass('soldout').addClass('available').find(':radio')
                                                                        .removeAttr('disabled');
                                                                </script>







                                                                <div data-value="DarkGoldenRod" data-stocks="0"
                                                                    class="swatch-element color darkgoldenrod soldout">
                                                                    <input id="swatch-0-darkgoldenrod" type="radio"
                                                                        name="option-0" value="DarkGoldenRod"><label
                                                                        for="swatch-0-darkgoldenrod"
                                                                        style="background-image: url(//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-05-a_small.jpg?v=1650946971;"
                                                                        title="darkgoldenrod">

                                                                    </label>
                                                                </div>






                                                                <script>
                                                                    jQuery('.swatch[data-option-index="0"] .darkgoldenrod').removeClass('soldout').addClass('available').find(':radio')
                                                                        .removeAttr('disabled');
                                                                </script>







                                                                <div data-value="DarkKhaki" data-stocks="31"
                                                                    class="swatch-element color darkkhaki available">
                                                                    <input id="swatch-0-darkkhaki" type="radio"
                                                                        name="option-0" value="DarkKhaki"><label
                                                                        for="swatch-0-darkkhaki"
                                                                        style="background-image: url(//cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-05-a_small.jpg?v=1650946971;"
                                                                        title="darkkhaki">

                                                                    </label>
                                                                </div>


                                                                <script>
                                                                    jQuery('.swatch[data-option-index="0"] .darkkhaki').removeClass('soldout').addClass('available').find(':radio')
                                                                        .removeAttr('disabled');
                                                                </script>





                                                                <script>
                                                                    jQuery('.swatch[data-option-index="0"] .darkkhaki').removeClass('soldout').addClass('available').find(':radio')
                                                                        .removeAttr('disabled');
                                                                </script>


                                                            </div>
                                                        </div>

















                                                        <script>
                                                            $(window).load(function() {
                                                                $('.selector-wrapper:eq(1)').hide();
                                                            });
                                                        </script>






                                                        <div class="swatch clearfix Material" data-option-index="1">
                                                            <h6 class="header">Material:</h6>
                                                            <div class="variant-property">







                                                                <div data-value="Nitrile" data-stocks="89"
                                                                    class="swatch-element nitrile available">
                                                                    <input id="swatch-1-nitrile" type="radio"
                                                                        name="option-1" value="Nitrile" checked><label
                                                                        for="swatch-1-nitrile" title="nitrile">
                                                                        Nitrile

                                                                    </label>
                                                                </div>


                                                                <script>
                                                                    jQuery('.swatch[data-option-index="1"] .nitrile').removeClass('soldout').addClass('available').find(':radio')
                                                                        .removeAttr('disabled');
                                                                </script>







                                                                <div data-value="Latex" data-stocks="79"
                                                                    class="swatch-element latex available">
                                                                    <input id="swatch-1-latex" type="radio"
                                                                        name="option-1" value="Latex"><label
                                                                        for="swatch-1-latex" title="latex">
                                                                        Latex

                                                                    </label>
                                                                </div>


                                                                <script>
                                                                    jQuery('.swatch[data-option-index="1"] .latex').removeClass('soldout').addClass('available').find(':radio')
                                                                        .removeAttr('disabled');
                                                                </script>









                                                                <script>
                                                                    jQuery('.swatch[data-option-index="1"] .latex').removeClass('soldout').addClass('available').find(':radio')
                                                                        .removeAttr('disabled');
                                                                </script>





                                                                <script>
                                                                    jQuery('.swatch[data-option-index="1"] .nitrile').removeClass('soldout').addClass('available').find(':radio')
                                                                        .removeAttr('disabled');
                                                                </script>





                                                                <script>
                                                                    jQuery('.swatch[data-option-index="1"] .latex').removeClass('soldout').addClass('available').find(':radio')
                                                                        .removeAttr('disabled');
                                                                </script>


                                                            </div>
                                                        </div>


                                                    </div>
                                                    <script>
                                                        jQuery(function() {
                                                            jQuery('.swatch :radio').change(function() {
                                                                var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
                                                                var optionValue = jQuery(this).val();
                                                                jQuery(this)
                                                                    .closest('form')
                                                                    .find('.single-option-selector')
                                                                    .eq(optionIndex)
                                                                    .val(optionValue)
                                                                    .trigger('change');
                                                            });
                                                        });
                                                    </script>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <form action="/cart/add" method="post" class="cart-7704599331072"
                                            enctype="multipart/form-data" id="add-item-form">
                                            <div class="product-quantity-action">
                                                <h6>Quantity:</h6>
                                                <div class="product-quantity">

                                                    <div class="cart-plus-minus">
                                                        <input value="1" type="text" name="quantity"
                                                            min="1" pattern="[0-9]*">
                                                    </div>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-actions">
                                            <div class="pro-detail-button">

                                                <button type="submit" class="btn add-to-cart ajax-spin-cart"
                                                    id="AddToCart">
                                                    <span class="cart-title" id="AddToCartText">Add to cart</span>
                                                    <span class="cart-loading load-anim"><i
                                                            class="ri-loader-4-line"></i></span>
                                                    <span class="cart-added"><i class="ri-check-line"></i></span>
                                                    <span class="cart-unavailable"></span>
                                                </button>


                                                <script>
                                                    jQuery('.ajax-spin-cart').click(function(e) {
                                                        e.preventDefault();
                                                        Shopify.addItemFromForm('add-item-form');
                                                    });
                                                </script>


                                                <a href="javascript:void(0)" class="btn btn-cart btn_theme"
                                                    onClick="instantBuy7704599331072()">
                                                    <span>Buy now</span>
                                                </a>

                                                <script type="text/javascript">
                                                    function instantBuy7704599331072() {
                                                        jQuery.post('/cart/add', $(".cart-7704599331072").serialize()).
                                                        always(function(data) {
                                                            window.location.href = '/checkout';
                                                        });
                                                    }
                                                </script>

                                            </div>
                                            <div class="pro-aff-che"><a href="javascript:void(0)" class="wishlist">
                                                    <span
                                                        class="wishlist-icon action-wishlist tile-actions--btn wishlist-btn"
                                                        data-product-handle="drone-camera">
                                                        <span class="add-wishlist"><i class="ri-heart-line"></i></span>
                                                        <span class="loading-wishlist load-anim"><i
                                                                class="ri-loader-4-line"></i></span>
                                                        <span class="remove-wishlist"><i class="ri-heart-fill"></i></span>
                                                    </span>
                                                    <span class="wishlist-text"></span>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-sku">
                                            <h6>SKU:</h6>
                                            <span class="variant-sku" id="VariantSku">abccd-16</span>
                                        </div>
                                    </div> --}}
                                    <div class="product-info">
                                        <div class="share-icons">
                                            <h6>Share:</h6>
                                            <div class="col-8 flat-social text-end">
                                                {!! Share::page(route('product.details', $product->slug))->facebook()->twitter()->whatsapp()->linkedin() !!}

                                            </div>
                                            {{-- <ul class="pro_social_link">
                                                <li>
                                                    <a target="_blank"
                                                        href="//www.facebook.com/sharer.php?u=https://electon6-store.myshopify.com/products/drone-camera"
                                                        class="facebook" title="Share on Facebook" tabindex="0"><i
                                                            class="ri-facebook-fill"></i></a>
                                                </li>
                                                <li>
                                                    <a target="_blank"
                                                        href="//twitter.com/share?text=Drone%20camera&amp;url=https://electon6-store.myshopify.com/products/drone-camera;source=webclient"
                                                        class="twitter" title="Share on Twitter" tabindex="0"><i
                                                            class="ri-twitter-line"></i></a>
                                                </li>

                                                <li>
                                                    <a target="_blank"
                                                        href="//pinterest.com/pin/create/button/?url=https://electon6-store.myshopify.com/products/drone-camera&amp;media=http://cdn.shopify.com/s/files/1/0641/3431/6288/products/electon-electronics-product-05-a_1024x1024.jpg?v=1650946971&amp;description=Drone%20camera"
                                                        class="pinterest" title="Share on Pinterest" tabindex="0"><i
                                                            class="ri-pinterest-fill"></i></a>
                                                </li>

                                            </ul> --}}

                                        </div>
                                    </div>
                                    @if ($product->coupon != "[]")
                                        <div class="product-info">
                                            <div class="product-payment-image">
                                                {{-- <a href="javascript:void(0)" class="payment-icon">


                                                    <svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg"
                                                        role="img" width="38" height="24"
                                                        aria-labelledby="pi-visa">
                                                        <title id="pi-visa">Visa</title>
                                                        <path opacity=".07"
                                                            d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" />
                                                        <path fill="#fff"
                                                            d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" />
                                                        <path
                                                            d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z"
                                                            fill="#142688" />
                                                    </svg>

                                                    <svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg"
                                                        width="38" height="24" role="img"
                                                        aria-labelledby="pi-paypal">
                                                        <title id="pi-paypal">PayPal</title>
                                                        <path opacity=".07"
                                                            d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" />
                                                        <path fill="#fff"
                                                            d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" />
                                                        <path fill="#003087"
                                                            d="M23.9 8.3c.2-1 0-1.7-.6-2.3-.6-.7-1.7-1-3.1-1h-4.1c-.3 0-.5.2-.6.5L14 15.6c0 .2.1.4.3.4H17l.4-3.4 1.8-2.2 4.7-2.1z" />
                                                        <path fill="#3086C8"
                                                            d="M23.9 8.3l-.2.2c-.5 2.8-2.2 3.8-4.6 3.8H18c-.3 0-.5.2-.6.5l-.6 3.9-.2 1c0 .2.1.4.3.4H19c.3 0 .5-.2.5-.4v-.1l.4-2.4v-.1c0-.2.3-.4.5-.4h.3c2.1 0 3.7-.8 4.1-3.2.2-1 .1-1.8-.4-2.4-.1-.5-.3-.7-.5-.8z" />
                                                        <path fill="#012169"
                                                            d="M23.3 8.1c-.1-.1-.2-.1-.3-.1-.1 0-.2 0-.3-.1-.3-.1-.7-.1-1.1-.1h-3c-.1 0-.2 0-.2.1-.2.1-.3.2-.3.4l-.7 4.4v.1c0-.3.3-.5.6-.5h1.3c2.5 0 4.1-1 4.6-3.8v-.2c-.1-.1-.3-.2-.5-.2h-.1z" />
                                                    </svg>

                                                    <svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg"
                                                        role="img" width="38" height="24"
                                                        aria-labelledby="pi-master">
                                                        <title id="pi-master">Mastercard</title>
                                                        <path opacity=".07"
                                                            d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" />
                                                        <path fill="#fff"
                                                            d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" />
                                                        <circle fill="#EB001B" cx="15" cy="12"
                                                            r="7" />
                                                        <circle fill="#F79E1B" cx="23" cy="12"
                                                            r="7" />
                                                        <path fill="#FF5F00"
                                                            d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z" />
                                                    </svg>

                                                    <svg xmlns="http://www.w3.org/2000/svg" role="img"
                                                        viewBox="0 0 38 24" width="38" height="24"
                                                        aria-labelledby="pi-american_express">
                                                        <title id="pi-american_express">American Express</title>
                                                        <g fill="none">
                                                            <path fill="#000"
                                                                d="M35,0 L3,0 C1.3,0 0,1.3 0,3 L0,21 C0,22.7 1.4,24 3,24 L35,24 C36.7,24 38,22.7 38,21 L38,3 C38,1.3 36.6,0 35,0 Z"
                                                                opacity=".07" />
                                                            <path fill="#006FCF"
                                                                d="M35,1 C36.1,1 37,1.9 37,3 L37,21 C37,22.1 36.1,23 35,23 L3,23 C1.9,23 1,22.1 1,21 L1,3 C1,1.9 1.9,1 3,1 L35,1" />
                                                            <path fill="#FFF"
                                                                d="M8.971,10.268 L9.745,12.144 L8.203,12.144 L8.971,10.268 Z M25.046,10.346 L22.069,10.346 L22.069,11.173 L24.998,11.173 L24.998,12.412 L22.075,12.412 L22.075,13.334 L25.052,13.334 L25.052,14.073 L27.129,11.828 L25.052,9.488 L25.046,10.346 L25.046,10.346 Z M10.983,8.006 L14.978,8.006 L15.865,9.941 L16.687,8 L27.057,8 L28.135,9.19 L29.25,8 L34.013,8 L30.494,11.852 L33.977,15.68 L29.143,15.68 L28.065,14.49 L26.94,15.68 L10.03,15.68 L9.536,14.49 L8.406,14.49 L7.911,15.68 L4,15.68 L7.286,8 L10.716,8 L10.983,8.006 Z M19.646,9.084 L17.407,9.084 L15.907,12.62 L14.282,9.084 L12.06,9.084 L12.06,13.894 L10,9.084 L8.007,9.084 L5.625,14.596 L7.18,14.596 L7.674,13.406 L10.27,13.406 L10.764,14.596 L13.484,14.596 L13.484,10.661 L15.235,14.602 L16.425,14.602 L18.165,10.673 L18.165,14.603 L19.623,14.603 L19.647,9.083 L19.646,9.084 Z M28.986,11.852 L31.517,9.084 L29.695,9.084 L28.094,10.81 L26.546,9.084 L20.652,9.084 L20.652,14.602 L26.462,14.602 L28.076,12.864 L29.624,14.602 L31.499,14.602 L28.987,11.852 L28.986,11.852 Z" />
                                                        </g>
                                                    </svg>


                                                </a> --}}
                                                <!-- Button trigger modal -->
                                                @if (auth()->check())
                                                    <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal"
                                                        data-bs-target="#staticBackdrop">
                                                        Get Coupon
                                                    </button>
                                                @else
                                                    <a href="{{ route('login') }}" class="btn btn-outline-dark">
                                                        Get Coupon
                                                    </a>
                                                @endif
                                            </div>
                                        </div>

                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div id="shopify-section-template--15924305166592__single-product-tab" class="shopify-section">
            <section class="product-description-tab">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="product-tab">
                                <div class="tab">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation">
                                            <a href="#pro-dec" class="active" data-bs-toggle="tab" role="tab"
                                                aria-selected="true">Description</a>
                                        </li>
                                        {{-- <li role="presentation">
                                            <a href="#pro-add-info" data-bs-toggle="tab" role="tab"
                                                aria-selected="false">Additional info</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#pro-review" data-bs-toggle="tab" role="tab"
                                                aria-selected="false">Reviews</a> --}}
                                        </li>
                                    </ul>
                                </div>

                                <div class="description-review-text tab-content">
                                    <div class="tab-pane active" id="pro-dec" role="tabpanel">
                                        <div class="more-description">
                                            <h6>More Detail</h6>
                                            {!! $product->description !!}
                                            {{-- <ul>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry</li>
                                                <li>Lorem Ipsum has been the industry's standard dummy text ever since the
                                                    1500s, when an unknown printer took a galley of type and scrambled it to
                                                    make a type specimen book</li>
                                                <li>It has survived not only five centuries, but also the leap into
                                                    electronic typesetting, remaining essentially unchanged</li>
                                                <li>It was popularised in the 1960s with the release of Letraset sheets
                                                    containing Lorem Ipsum passages, and more recently with desktop
                                                    publishing software like Aldus PageMaker including versions of Lorem
                                                    Ipsum</li>
                                                <li>Contrary to popular belief, Lorem Ipsum is not simply random text. It
                                                    has roots in a piece of classical Latin literature from 45 BC, making it
                                                    over 2000 years old</li>
                                            </ul> --}}
                                        </div>
                                        {{-- <div class="more-description">
                                            <h6>Key Specification</h6>
                                            <ul>
                                                <li>It is a long established fact that a reader will be distracted by the
                                                    readable content of a page when looking at its layout</li>
                                                <li>The point of using Lorem Ipsum is that it has a more-or-less normal
                                                    distribution of letters, as opposed to using 'Content here, content
                                                    here', making it look like readable English. Many desktop publishing
                                                    packages and web page editors now use Lorem Ipsum as their default model
                                                    text, and a search for 'lorem ipsum' will uncover many web sites still
                                                    in their infancy</li>
                                                <li>Various versions have evolved over the years, sometimes by accident,
                                                    sometimes on purpose (injected humour and the like)</li>
                                                <li>There are many variations of passages of Lorem Ipsum available, but the
                                                    majority have suffered alteration in some form, by injected humour, or
                                                    randomised words which don't look even slightly believable</li>
                                                <li>If you are going to use a passage of Lorem Ipsum, you need to be sure
                                                    there isn't anything embarrassing hidden in the middle of text</li>
                                            </ul>
                                        </div> --}}
                                    </div>
                                    {{-- <div class="tab-pane" id="pro-add-info" role="tabpanel">
                                        <table>
                                            <tbody>
                                                <tr class="product-info">
                                                    <th>Vendor</th>
                                                    <td><a href="/collections/vendors?q=Electron"
                                                            title="Electron">Electron</a></td>
                                                </tr>
                                                <tr class="product-info">
                                                    <th>Type</th>
                                                    <td><a href="/collections/types?q=Laptops" title="Laptops">Laptops</a>
                                                    </td>
                                                </tr>
                                                <tr class="product-info">
                                                    <th>Color</th>
                                                    <td>DarkCyan, DarkGoldenRod, DarkKhaki</td>
                                                </tr>
                                                <tr class="product-info">
                                                    <th>Material</th>
                                                    <td>Nitrile, Latex</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="pro-review" role="tabpanel">
                                        <div id="shopify-product-reviews" data-id="7704599331072"></div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div id="shopify-section-template--15924305166592__related-product" class="shopify-section">
            <section class="related-product">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="content-main-title">
                                <div class="section-cont-title">

                                    <h2>
                                        <span>Related product</span>
                                    </h2>


                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>

                                </div>
                            </div>
                            <div class="swiper-container" id="related-slider-template--15924305166592__related-product">
                                <div class="swiper-wrapper">
                                    @foreach ($related as $row)
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
                                                                @if(isset($row->coupon[0]))

                                                                @php
                                                                    $fdate = $row->coupon[0]->expiry;
                                                                    $tdate = \Carbon\Carbon::now();
                                                                    $datetime1 = new DateTime($fdate);
                                                                    $datetime2 = new DateTime($tdate);
                                                                    $interval = $datetime1->diff($datetime2);
                                                                    $days = $interval->format('%a');//now do whatever you like with $days
                                                                @endphp
                                                                <b>{{ $days }} days left</b>
                                                                @else
                                                                <b>Expired</b>

                                                                @endif
                                                            </div>
                                                            <div class="col-3 flat-social text-center p-1">
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
        <!-- Modal -->
        @if (auth()->check())
            @if ($product->coupon != "[]")
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content text-center">
                            <div class="modal-header">
                                <h5 class="modal-title text-center" id="staticBackdropLabel">Fullfilled by Amazon</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="col-12 text-center">
                                    <i class="fas fa-check-circle" style="font-size:5.9rem; color:#127139;"></i>
                                    <h4 class="mt-2" style="color:#127139;">You've saved
                                        ${{ $product->old_price - $product->new_price }}</h4>
                                    <p>Coupon may expire at anytime. Use it now!</p>
                                    {{-- <b>{{ $product->coupon[0]->code }}</b> --}}
                                    <input id="para" readonly value="{{ $product->coupon[0]->code }}"
                                        style="text-align:center;border: none; font-weight:bold; font-size:1.5rem; color:#000; padding:0;" />
                                </div>
                                <div class="col-12 mt-3 mb-3">
                                    <a class="modalCopiedbtn" href="javascript:void(0);" onclick="copyToClipboard('para')">
                                        Copy and Go to Amazon
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endif
    </main>
    <script>
        function copyToClipboard(elementId) {
            $("#para").select();
            // console.log($("#para").select());
            document.execCommand("Copy");
            window.open("{{ $product->link }}");
        }
    </script>
@endsection
