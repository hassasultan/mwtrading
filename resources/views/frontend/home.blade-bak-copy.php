@extends('layouts.app')

@section('content')
    <div id="container-body">
        <div class="container">
            <div class="banner">
                <div id="myCarousel" class="carousel slide">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <a href="https://www.myvipon.com/disclose/index?id=596140" target="_blank"
                                onclick="banner_click(1826)">
                                <img class="lag-img"
                                    src="https://vipon.s3.amazonaws.com/banner/2071139ee9fcb3e9652deae40757e6c798dec412b85d0d.jpg"
                                    alt="独立站拖把" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="featureed">
                <div class="h3-title">
                    <ul class="list-unstyled">
                        <li style="margin: 0"><i></i></li>
                        <li>FEATURED DEALS</li>
                        <li class="hover-text-f">
                            <span class="doubt-icon"></span>
                            <div class="hover-text">
                                <span class="element-icon"></span>
                                <span>Featured Deals are exceptional deals hand-picked by our editors, or limited time
                                    offers sponsored by the merchant.</span>
                                <span class="up-icon"></span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="myCarousel12" class="carousel slide">

                    <div class="carousel-inner">
                        <div class="item active">
                            {{-- <div class="more-featured">
                                <img src="https://vipon.s3.amazonaws.com/img/911576c398497cb648c9e7a934f9234a6621a7f84d6b97.svg"
                                    alt="">
                                <a href="https://play.google.com/store/apps/details?id=com.vipon" target="_blank"
                                    class="more-featured-google" rel="nofollow" onclick="app_click(15,4)">
                                    <img src="https://vipon.s3.amazonaws.com/img/133576ae40c08c5f5a9a93bc409001e6d144fcc4480d40.svg"
                                        alt="">
                                </a>
                                <a href="https://apps.apple.com/us/app/vipon-amazon-coupon/id1272023223" target="_blank"
                                    class="more-featured-ios" rel="nofollow" onclick="app_click(14,1)">
                                    <img src="https://vipon.s3.amazonaws.com/img/993101d30f027821748473e8291cfffed1296ca66d27c7.svg"
                                        alt="">
                                </a>
                            </div> --}}
                            @foreach ($featured as $row)
                                <div class="box solid" style="display: inline-block;" id="product-6557202" data-id="6557202"
                                    data-product-id="9816402" data-module="8">
                                    <div class="box-img">
                                        <img src="{{ asset('public/storage/' . $row->fea_img) }}" alt="Amazon Coupons">
                                    </div>
                                    <div class="favorites-get-code flex"><a href="account/login" onclick="stopClick()"
                                            class="btn" target="_blank">GET COUPON</a>
                                        <div class="favorites" id="product-9816402" data-id="9816402">
                                            <a title="Save to my favorites" href="#" data-id="9816402">
                                                <span class="favoritesed-icon"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="decoration">
                                        <div class="line"></div>
                                        <div class="ball">
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                    <div class="content-text">
                                        <div class="content-text-group">
                                            <span class="content-activity-outer">
                                                <span class="content-activity-img"
                                                    style="background:url(/images/activity_lable_left.png)no-repeat center /100% 100%"></span>
                                                {{-- <span class="content-activity-bg">Christmas</span> --}}
                                                <span class="content-activity-img"
                                                    style="background:url(/images/activity_lable_right.png)no-repeat center /100% 100%"></span>
                                            </span>
                                            <span class="name name-text">{{ $row->title }}</span>

                                        </div>
                                        {{-- <div class="content-text-group">
                                            <div class="name name-fba">
                                                <img class="" src="/images/flags/om.png" alt="Amazon Coupons">
                                                <span class="fba">
                                                    Fulfilled by Amazon</span>
                                            </div>
                                        </div> --}}
                                        <div class="content-text-group">
                                            <div class="content-text-group-price-discound"> <s
                                                    class="price">${{ $row->old_price }}</s>
                                                <div class="discound">-{{ $row->discount }}%</div>
                                            </div>
                                            <span class="discound-price">${{ $row->new_price }}</span>
                                        </div>
                                        {{-- <div class="content-text-group">
                                            <div class="comment-group"> <span class="thumb-group-icon"></span>
                                                <span class="comment-group-num">28</span>
                                            </div>
                                            <div class="comment-group"> <span class="comment-group-icon"></span>
                                                <span class="comment-group-num">3</span>
                                            </div>
                                        </div> --}}
                                    </div>

                                    <div class="layer">
                                        <div><a style="color:#FFF !important;" href="{{ route('product.details',$row->slug) }}">View Details</a><span></span></div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- <div class="box solid" style="display: inline-block;" id="product-6557202" data-id="6557202"
                                data-product-id="9815898" data-module="8">
                                <div class="box-img">
                                    <img src="https://m.media-amazon.com/images/I/51jzTSPWZXL._AC_.jpg"
                                        alt="Amazon Coupons">
                                </div>
                                <div class="favorites-get-code flex"><a href="account/login" onclick="stopClick()"
                                        class="btn" target="_blank">GET COUPON</a>
                                    <div class="favorites" id="product-9815898" data-id="9815898">
                                        <a title="Save to my favorites" href="#" data-id="9815898">
                                            <span class="favoritesed-icon"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="decoration">
                                    <div class="line"></div>
                                    <div class="ball">
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>
                                <div class="content-text">
                                    <div class="content-text-group">
                                        <span class="name name-text">Bath Bombs Gift Set, 12 Organic Bath Bombs for Women
                                            Girls Kids - Handmade Luxurious Colorful Bathbombs with Shea Butter Spa Shower
                                            Moisturizing Gift for Birthday Valentine’s Day Christmas</span>

                                    </div>
                                    <div class="content-text-group">
                                        <div class="name name-fba">
                                            <img class="" src="/images/flags/om.png" alt="Amazon Coupons">
                                            <span class="fba">
                                                Fulfilled by Amazon</span>
                                        </div>
                                    </div>
                                    <div class="content-text-group">
                                        <div class="content-text-group-price-discound"> <s class="price">$27.99</s>
                                            <div class="discound">-50%</div>
                                        </div>
                                        <span class="discound-price">$13.99</span>
                                    </div>
                                    <div class="content-text-group">
                                        <div class="comment-group"> <span class="thumb-group-icon"></span>
                                            <span class="comment-group-num">17</span>
                                        </div>
                                        <div class="comment-group"> <span class="comment-group-icon"></span>
                                            <span class="comment-group-num">1</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="layer"
                                    onclick="getDetail('/product/9815898-Bath-Bombs-Gift-Organic-Bath-Bombs-amazon-coupons?sl=','fd_web_detail')">
                                    <div>View Details <span></span></div>
                                </div>
                            </div>
                            <div class="box solid" style="display: inline-block;" id="product-6557202" data-id="6557202"
                                data-product-id="9816436" data-module="8">
                                <div class="box-img">
                                    <img src="https://m.media-amazon.com/images/I/41IBIvtxTqL._AC_.jpg"
                                        alt="Amazon Coupons">
                                </div>
                                <div class="favorites-get-code flex"><a href="account/login" onclick="stopClick()"
                                        class="btn" target="_blank">GET COUPON</a>
                                    <div class="favorites" id="product-9816436" data-id="9816436">
                                        <a title="Save to my favorites" href="#" data-id="9816436">
                                            <span class="favoritesed-icon"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="decoration">
                                    <div class="line"></div>
                                    <div class="ball">
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>
                                <div class="content-text">
                                    <div class="content-text-group">
                                        <span class="name name-text">WOZIFAN 10.1 Inch Digital Photo Frame, Smart WiFi
                                            Digital Picture Frame with 16GB Memory, 1280 * 800 HD Screen, Share Photos and
                                            Videos Instantly via Email or App, Auto-Rotate, Gifts for Dad - Black</span>

                                    </div>
                                    <div class="content-text-group">
                                        <div class="name name-fba">
                                            <img class="" src="/images/flags/om.png" alt="Amazon Coupons">
                                            <span class="fba">
                                                Fulfilled by Amazon</span>
                                        </div>
                                    </div>
                                    <div class="content-text-group">
                                        <div class="content-text-group-price-discound"> <s class="price">$119.99</s>
                                            <div class="discound">-50%</div>
                                        </div>
                                        <span class="discound-price">$59.99</span>
                                    </div>
                                    <div class="content-text-group">
                                        <div class="comment-group"> <span class="thumb-group-icon"></span>
                                            <span class="comment-group-num">20</span>
                                        </div>
                                        <div class="comment-group"> <span class="comment-group-icon"></span>
                                            <span class="comment-group-num">0</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="layer"
                                    onclick="getDetail('/product/9816436-WOZIFAN-Inch-Digital-Photo-Smart-WiFi-amazon-coupons?sl=','fd_web_detail')">
                                    <div>View Details <span></span></div>
                                </div>
                            </div> --}}
                        </div>
                    </div>

                    <a class="carousel-control left" href="#myCarousel12" data-slide="prev"> <span
                            class="left-icon"></span></a>
                    <a class="carousel-control right" href="#myCarousel12" data-slide="next"><span
                            class="right-icon"></span></a>
                </div>
            </div>

            <div class="give-away-modal" style="display: none;">
                <div class="h3-title">
                    <ul class="list-unstyled">
                        <li><img src="https://vipon.s3.amazonaws.com/img/50533420b9345200bb276dbe97f5d751b8f5cb98aac9e6.svg"
                                alt="Amazon Coupons"></li>
                    </ul>
                </div>
                <div class="give-away-modal-list height">
                    <div style="display: flex;justify-content: center;align-items: center;height:100px;width: 100%;"><img
                            style="width:30px;"
                            src="https://vipon.s3.amazonaws.com/img/452004003c36249b5456fb551d846eb2095ff2e8230810.gif"
                            alt="Amazon Coupons">
                    </div>
                </div>
            </div>
            <div class="trending">
                <div class="h3-title">
                    <ul class="list-unstyled">
                        <li style="margin: 0"><i></i></li>
                        <li>TRENDING DEALS</li>
                    </ul>
                </div>
                <div class="trending-list height">
                    @foreach ($product as $row)
                        <div class="box solid getpro" style="display: inline-block;" id="product-6557202" data-id="6557202"
                            data-product-id="9807214" data-module="2">
                            <div class="box-img">
                                <img class="lazy" data-original="{{ asset('public/storage/'.$row->fea_img) }}"
                                    src="{{ asset('public/storage/'.$row->fea_img) }}" alt=""
                                    style="display: block;">
                            </div>
                            <div class="favorites-get-code flex"><a href="account/login" onclick="stopClick()"
                                    class="btn" target="_blank">GET COUPON</a>
                                <div class="favorites" id="product-9807214" data-id="9807214">
                                    <a title="Save to my favorites" href="#" data-id="9807214">
                                        <span class="favoritesed-icon"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="decoration">
                                <div class="line"></div>
                                <div class="ball">
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="content-text">
                                <div class="content-text-group">
                                    <span class="name name-text">{{$row->title}}</span>

                                </div>

                                <div class="content-text-group">
                                    <div class="content-text-group-price-discound"> <s class="price">${{ $row->old_price }}</s>
                                        <div class="discound">-{{ $row->discount }}%</div>
                                    </div>
                                    <span class="discound-price">${{ $row->new_price }}</span>
                                </div>
                                {{-- <div class="content-text-group">
                                    <div class="comment-group"> <span class="thumb-group-icon"></span>
                                        <span class="comment-group-num">25</span>
                                    </div>
                                    <div class="comment-group"> <span class="comment-group-icon"></span>
                                        <span class="comment-group-num">0</span>
                                    </div>
                                </div> --}}
                            </div>

                            <div class="layer"
                                onclick="getDetail('/product/9807214-UQUI-Buffalo-Plaid-Blanket-Flannel-Fleece-amazon-coupons?sl=','hot_web_detail')">
                                <div><a style="color:#FFF !important;" href="{{ route('product.details',$row->slug) }}">View Details</a> <span></span></div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="more">
                    <button class="btn see-more">See More <span class="caret"></span></button>
                </div>
            </div>
            {{-- <div class="personalized">
                <div class="h3-title">
                    <ul class="list-unstyled">
                        <li>PERSONALIZED<i style="bottom: -8px;"></i></li>
                        <div style="position: absolute;right: 180px;display: flex;">
                            <div
                                style="background: url('https://vipon.s3.amazonaws.com/img/774252976488a9e1a3b2d3bf372dd24dcb2a151136583c.png') no-repeat;width: 257px;height: 37px;">
                                <p style="font-size: 14px;font-family: Helvetica;color: #39C3CB;line-height: 37px;">
                                    No products you like? Click refresh.
                                </p>
                            </div>
                            <div id="refresh"
                                style="cursor: pointer;width: 32px;height: 32px;background: #39C3CB;border-radius: 16px;display: flex;justify-content: center;align-items: center;margin-top: 3px;margin-left: 6px;">
                                <img
                                    src="https://vipon.s3.amazonaws.com/img/186536a2b331dd0a721b1bbc50c089a22ca51e9c3837b6.png">
                            </div>
                        </div>
                        <li class="edit-like">
                            <a class="pull-right" href="/login?ref=menu_login_mobile" style="cursor: pointer">
                                <span class="icon-edit"></span>
                                <span>Edit Category</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div id="collapseOne" class="panel-collapse collapse">
                    <div class="alert-local">
                        <div class="toast-msg">
                            <span class="glyphicon  glyphicon-exclamation-sign"
                                style="color: rgba(105, 230, 236, 1)"></span>
                            <span class="toast-text"></span>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="selection-categories-list clearfix">

                            <div class="form-group" data-value="14" data-updata="14">
                                <input type="checkbox" id="14">
                                <label for="14"> Arts, Crafts &amp; Sewing </label>
                            </div>
                            <div class="form-group" data-value="19" data-updata="19">
                                <input type="checkbox" id="19">
                                <label for="19"> Automotive &amp; Industrial </label>
                            </div>
                            <div class="form-group" data-value="16" data-updata="16">
                                <input type="checkbox" id="16">
                                <label for="16"> Baby </label>
                            </div>
                            <div class="form-group" data-value="5" data-updata="5">
                                <input type="checkbox" id="5">
                                <label for="5"> Beauty &amp; Personal Care </label>
                            </div>
                            <div class="form-group" data-value="11" data-updata="11">
                                <input type="checkbox" id="11">
                                <label for="11"> Cell Phones &amp; Accessories </label>
                            </div>
                            <div class="form-group" data-value="8" data-updata="8">
                                <input type="checkbox" id="8">
                                <label for="8"> Electronics </label>
                            </div>
                            <div class="form-group" data-value="9" data-updata="9">
                                <input type="checkbox" id="9">
                                <label for="9"> Health &amp; Household </label>
                            </div>
                            <div class="form-group" data-value="1" data-updata="1">
                                <input type="checkbox" id="1">
                                <label for="1"> Home &amp; Kitchen </label>
                            </div>
                            <div class="form-group" data-value="4" data-updata="4">
                                <input type="checkbox" id="4">
                                <label for="4"> Jewelry </label>
                            </div>
                            <div class="form-group" data-value="15" data-updata="15">
                                <input type="checkbox" id="15">
                                <label for="15"> Men Clothing, Shoes &amp; Accessories </label>
                            </div>
                            <div class="form-group" data-value="18" data-updata="18">
                                <input type="checkbox" id="18">
                                <label for="18"> Office Products </label>
                            </div>
                            <div class="form-group" data-value="13" data-updata="13">
                                <input type="checkbox" id="13">
                                <label for="13"> Patio, Lawn &amp; Garden </label>
                            </div>
                            <div class="form-group" data-value="17" data-updata="17">
                                <input type="checkbox" id="17">
                                <label for="17"> Pet Supplies </label>
                            </div>
                            <div class="form-group" data-value="12" data-updata="12">
                                <input type="checkbox" id="12">
                                <label for="12"> Sports &amp; Outdoors </label>
                            </div>
                            <div class="form-group" data-value="7" data-updata="7">
                                <input type="checkbox" id="7">
                                <label for="7"> Tools &amp; Home Improvement </label>
                            </div>
                            <div class="form-group" data-value="6" data-updata="6">
                                <input type="checkbox" id="6">
                                <label for="6"> Toys &amp; Games </label>
                            </div>
                            <div class="form-group" data-value="3" data-updata="3">
                                <input type="checkbox" id="3">
                                <label for="3"> Watches </label>
                            </div>
                            <div class="form-group" data-value="2" data-updata="2">
                                <input type="checkbox" id="2">
                                <label for="2"> Women Clothing, Shoes &amp; Accessories </label>
                            </div>
                        </div>
                        <p>Find deals that more likely interest you by selecting 1-3 categories</p>
                    </div>
                    <div class="panel-footer">
                        <button class="panel-reset">Reset</button>
                        <div>
                            <button type="button" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="false" aria-controls="collapseOne"
                                style="margin-right: 15px">Cancel</button>
                            <button class="panel-submit">Save Preferences</button>
                        </div>
                    </div>
                </div>
                <div class="personalized-list height" style="padding-top: 28px">
                    <div style="display: flex;justify-content: center;align-items: center;height:100px;width: 100%;"><img
                            style="width:30px;"
                            src="https://vipon.s3.amazonaws.com/img/452004003c36249b5456fb551d846eb2095ff2e8230810.gif"
                            alt="Amazon Coupons">
                    </div>
                </div>
                <div class="more">
                    <button class="btn see-more" onclick="clickRecord(5)">See More <span class="caret"></span></button>
                </div>
            </div> --}}
            @foreach ($section as $item)
                <div class="latest">
                    <div class="h3-title">
                        <ul class="list-unstyled">
                            <li style="margin: 0"><i></i></li>
                            <li>{{ strtoupper($item->name) }}</li>
                        </ul>
                    </div>
                    <div class="latest-list height">
                        @foreach ($item->products as $row)
                        <div class="box solid getpro" style="display: inline-block;" id="product-6557202" data-id="6557202"
                            data-product-id="9807214" data-module="2">
                            <div class="box-img">
                                <img class="lazy" data-original="{{ asset('public/storage/'.$row->fea_img) }}"
                                    src="{{ asset('public/storage/'.$row->fea_img) }}" alt=""
                                    style="display: block;">
                            </div>
                            <div class="favorites-get-code flex"><a href="account/login" onclick="stopClick()"
                                    class="btn" target="_blank">GET COUPON</a>
                                <div class="favorites" id="product-9807214" data-id="9807214">
                                    <a title="Save to my favorites" href="#" data-id="9807214">
                                        <span class="favoritesed-icon"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="decoration">
                                <div class="line"></div>
                                <div class="ball">
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="content-text">
                                <div class="content-text-group">
                                    <span class="name name-text">{{$row->title}}</span>

                                </div>

                                <div class="content-text-group">
                                    <div class="content-text-group-price-discound"> <s class="price">${{ $row->old_price }}</s>
                                        <div class="discound">-{{ $row->discount }}%</div>
                                    </div>
                                    <span class="discound-price">${{ $row->new_price }}</span>
                                </div>
                                {{-- <div class="content-text-group">
                                    <div class="comment-group"> <span class="thumb-group-icon"></span>
                                        <span class="comment-group-num">25</span>
                                    </div>
                                    <div class="comment-group"> <span class="comment-group-icon"></span>
                                        <span class="comment-group-num">0</span>
                                    </div>
                                </div> --}}
                            </div>

                            <div class="layer"
                                onclick="getDetail('/product/9807214-UQUI-Buffalo-Plaid-Blanket-Flannel-Fleece-amazon-coupons?sl=','hot_web_detail')">
                                <div><a style="color:#FFF !important;" href="{{ route('product.details',$row->slug) }}">View Details</a> <span></span></div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                    <div class="more">
                        <button class="btn see-more">See More <span class="caret"></span></button>
                        <div class="close-more">
                            <a href="/promotion/index?type=instant&sort=newest" target="_blank" class="btn">See More</a>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- <div class="under">
                <div class="h3-title">
                    <ul class="list-unstyled">
                        <li style="margin: 0"><i></i></li>
                        <li>UNDER $10</li>
                    </ul>
                </div>
                <div class="under-list height">
                    <div style="display: flex;justify-content: center;align-items: center;height:100px;width: 100%;"><img
                            style="width:30px;"
                            src="https://vipon.s3.amazonaws.com/img/452004003c36249b5456fb551d846eb2095ff2e8230810.gif"
                            alt="Amazon Coupons">
                    </div>
                </div>
                <div class="more">
                    <button class="btn see-more">See More <span class="caret"></span></button>
                    <div class="close-more">
                        <a href="/promotion/index?type=instant&price=0-10" target="_blank" class="btn">See More</a>
                    </div>
                </div>
            </div>
            <div class="best">
                <div class="h3-title">
                    <ul class="list-unstyled">
                        <li style="margin: 0"><i></i></li>
                        <li>BEST DISCOUNT</li>
                    </ul>
                </div>
                <div class="best-list">
                    <div class="sale">
                        <img src="https://vipon.s3.amazonaws.com/img/940121a9afb66f7d9adebcbdec9cc3aa5e3cb150d136cf.png"
                            alt="First slide">
                        <div style="margin-top: 10px"><a href="/promotion/index?type=instant&sort=discount"
                                target="_blank" class="btn">See More</a></div>
                    </div>
                    <div class="best-list-product">
                        <div id="myCarousel1" class="carousel slide">
                            <div class="carousel-inner">
                            </div>
                            <a class="carousel-control left" href="#myCarousel1" data-slide="prev">
                                <span class="left-icon"></span>
                            </a>
                            <a class="carousel-control right" href="#myCarousel1" data-slide="next">
                                <span class="right-icon"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-more">
                <a href="/promotion/index?type=instant">
                    <span>View All Deals</span>
                    <span class="more-icon"></span>
                </a>
            </div> --}}
        </div>
        {{-- <div class="container-right">
            <div id="activeDirector">
                <a data-href="/signup" href="javascript:;" target="_blank" style="position: relative;cursor: pointer">
                    <img src="/images/ant/newsArticles-2111.png" alt="Amazon Coupons">

                </a>
            </div>
            <div class="weekly">
                <h3><span>Weekly Hot Deals</span> <a href="/promotion/weekly-hot-deal" target="_blank"
                        class="btn pull-right">See More</a></h3>
                <div class="weekly-list">
                    <div class="ranking2" data-product-id="9798446" data-module="7">
                        <div class="content">
                            <a href="/product/9798446-Huichuiero-Airtight-Glass-Bottles-With-Lids-amazon-coupons?sl=&f=top"
                                title="Huichuiero 20 oz Airtight Glass Bottles With Lids For Vanilla Extract 6 Pack Juice Bottles With Measurement Marks Food Storage Canister Set For Beans Spice Tea Drink Milk"
                                target="_blank" class="a-left-img">
                                <img src="https://m.media-amazon.com/images/I/51ALMDiH+cL._AC_.jpg" alt="Amazon Coupons">
                            </a>
                            <div class="content-text" style="flex: 1">
                                <div class="name">
                                    <a href="/product/9798446-Huichuiero-Airtight-Glass-Bottles-With-Lids-amazon-coupons?sl=&f=top"
                                        title="Huichuiero 20 oz Airtight Glass Bottles With Lids For Vanilla Extract 6 Pack Juice Bottles With Measurement Marks Food Storage Canister Set For Beans Spice Tea Drink Milk"
                                        target="_blank">Huichuiero 20 oz Airtight Glass Bottles With Lids For Vanilla
                                        Extract, 6 Pack Juice Bottles With Measurement Marks, Food Storage Canister Set For
                                        Beans, Spice, Tea, Drink, Milk </a>
                                </div>
                                <div class="price">
                                    <span>$17.95</span>
                                    <div class="thump-num">
                                        <span class="thumb-icon"></span>
                                        <span class="thump-num-text">236</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ranking2" data-product-id="9788034" data-module="7">
                        <div class="content">
                            <a href="/product/9788034-BAVITE-Magnetic-Hooks-25LB-for-Indoor-amazon-coupons?sl=&f=top"
                                title="E BAVITE Magnetic Hooks 25LB for Cruise Grill Towel Indoor Hanging Kitchen Workplace Mikede Office and Garage  15 Pack"
                                target="_blank" class="a-left-img">
                                <img src="https://m.media-amazon.com/images/I/51ESuOvYjyL.jpg" alt="Amazon Coupons">
                            </a>
                            <div class="content-text" style="flex: 1">
                                <div class="name">
                                    <a href="/product/9788034-BAVITE-Magnetic-Hooks-25LB-for-Indoor-amazon-coupons?sl=&f=top"
                                        title="E BAVITE Magnetic Hooks 25LB for Cruise Grill Towel Indoor Hanging Kitchen Workplace Mikede Office and Garage  15 Pack"
                                        target="_blank">E BAVITE Magnetic Hooks 25LB for Cruise, Grill, Towel, Indoor
                                        Hanging, Kitchen, Workplace, Mikede Office and Garage - 15 Pack </a>
                                </div>
                                <div class="price">
                                    <span>$5.85</span>
                                    <div class="thump-num">
                                        <span class="thumb-icon"></span>
                                        <span class="thump-num-text">275</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ranking2" data-product-id="9107856" data-module="7">
                        <div class="content">
                            <a href="/product/9107856-ALLOT-Stacked-Chunky-Heel-Ankle-Boots-amazon-coupons?sl=&f=top"
                                title="ALLOT Womenamp39s Stacked Chunky Heel Ankle Boots Buckle Straps Side Zipper Bootie Fashion Closed Toe Shoes"
                                target="_blank" class="a-left-img">
                                <img src="https://m.media-amazon.com/images/I/41iJSMTrAuL._AC_.jpg" alt="Amazon Coupons">
                            </a>
                            <div class="content-text" style="flex: 1">
                                <div class="name">
                                    <a href="/product/9107856-ALLOT-Stacked-Chunky-Heel-Ankle-Boots-amazon-coupons?sl=&f=top"
                                        title="ALLOT Womenamp39s Stacked Chunky Heel Ankle Boots Buckle Straps Side Zipper Bootie Fashion Closed Toe Shoes"
                                        target="_blank">ALLOT Women&#39;s Stacked Chunky Heel Ankle Boots Buckle Straps
                                        Side Zipper Bootie Fashion Closed Toe Shoes </a>
                                </div>
                                <div class="price">
                                    <span>$15.00</span>
                                    <div class="thump-num">
                                        <span class="thumb-icon"></span>
                                        <span class="thump-num-text">935</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ranking2" data-product-id="6923242" data-module="7">
                        <div class="content">
                            <a href="/product/6923242-Pepper-Spray-Maximum-Strength-Self-Defense-amazon-coupons?sl=&f=top"
                                title="Pepper Spray Maximum Strength Self Defense Keychain for Women 12Foot Spray Range ampamp UV Dye  Glitter"
                                target="_blank" class="a-left-img">
                                <img src="https://m.media-amazon.com/images/I/41Wfqk+38oL._AC_.jpg" alt="Amazon Coupons">
                            </a>
                            <div class="content-text" style="flex: 1">
                                <div class="name">
                                    <a href="/product/6923242-Pepper-Spray-Maximum-Strength-Self-Defense-amazon-coupons?sl=&f=top"
                                        title="Pepper Spray Maximum Strength Self Defense Keychain for Women 12Foot Spray Range ampamp UV Dye  Glitter"
                                        target="_blank">Pepper Spray Maximum Strength Self Defense Keychain for Women,
                                        12-Foot Spray Range &amp; UV Dye - Glitter </a>
                                </div>
                                <div class="price">
                                    <span>$6.44</span>
                                    <div class="thump-num">
                                        <span class="thumb-icon"></span>
                                        <span class="thump-num-text">229</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ranking2" data-product-id="9214398" data-module="7">
                        <div class="content">
                            <a href="/product/9214398-Mens-Memory-Foam-House-Slippers-for-amazon-coupons?sl=&f=top"
                                title="Mens Memory Foam Slippers House Slippers for Men Comfort House Shoes Breathable Cottonblend Texture Warm Soft Flannel Lining Closed Toe Man Slides Indoor Outdoor"
                                target="_blank" class="a-left-img">
                                <img src="https://m.media-amazon.com/images/I/41Zy6QCrH9L._AC_.jpg" alt="Amazon Coupons">
                            </a>
                            <div class="content-text" style="flex: 1">
                                <div class="name">
                                    <a href="/product/9214398-Mens-Memory-Foam-House-Slippers-for-amazon-coupons?sl=&f=top"
                                        title="Mens Memory Foam Slippers House Slippers for Men Comfort House Shoes Breathable Cottonblend Texture Warm Soft Flannel Lining Closed Toe Man Slides Indoor Outdoor"
                                        target="_blank">Mens Memory Foam Slippers, House Slippers for Men, Comfort House
                                        Shoes Breathable Cotton-blend Texture Warm Soft Flannel Lining Closed Toe Man Slides
                                        Indoor Outdoor </a>
                                </div>
                                <div class="price">
                                    <span>$8.39</span>
                                    <div class="thump-num">
                                        <span class="thumb-icon"></span>
                                        <span class="thump-num-text">760</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ranking2" data-product-id="9794646" data-module="7">
                        <div class="content">
                            <a href="/product/9794646-DSNN-Colorful-Silverware-Set-Service-for-amazon-coupons?sl=&f=top"
                                title="DSNN Colorful Silverware Set Service for 6 Flatware Fork and Spoon 12 piece Modern Design Cutlery"
                                target="_blank" class="a-left-img">
                                <img src="https://m.media-amazon.com/images/I/41mUC4bLq6L._AC_.jpg" alt="Amazon Coupons">
                            </a>
                            <div class="content-text" style="flex: 1">
                                <div class="name">
                                    <a href="/product/9794646-DSNN-Colorful-Silverware-Set-Service-for-amazon-coupons?sl=&f=top"
                                        title="DSNN Colorful Silverware Set Service for 6 Flatware Fork and Spoon 12 piece Modern Design Cutlery"
                                        target="_blank">DSNN Colorful Silverware Set Service for 6, Flatware Fork and Spoon
                                        12 piece Modern Design Cutlery </a>
                                </div>
                                <div class="price">
                                    <span>$8.00</span>
                                    <div class="thump-num">
                                        <span class="thumb-icon"></span>
                                        <span class="thump-num-text">145</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ranking2" data-product-id="9796382" data-module="7">
                        <div class="content">
                            <a href="/product/9796382-Shrrie-Backpack-Purse-for-Women-Leather-amazon-coupons?sl=&f=top"
                                title="Shrrie Backpack Purse for Women Leather Backpack AntiTheft Fashion Travel Bag Shoulder Bag"
                                target="_blank" class="a-left-img">
                                <img src="https://m.media-amazon.com/images/I/41-e48SleyL._AC_.jpg" alt="Amazon Coupons">
                            </a>
                            <div class="content-text" style="flex: 1">
                                <div class="name">
                                    <a href="/product/9796382-Shrrie-Backpack-Purse-for-Women-Leather-amazon-coupons?sl=&f=top"
                                        title="Shrrie Backpack Purse for Women Leather Backpack AntiTheft Fashion Travel Bag Shoulder Bag"
                                        target="_blank">Shrrie Backpack Purse for Women Leather Backpack Anti-Theft Fashion
                                        Travel Bag Shoulder Bag </a>
                                </div>
                                <div class="price">
                                    <span>$19.74</span>
                                    <div class="thump-num">
                                        <span class="thumb-icon"></span>
                                        <span class="thump-num-text">131</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ranking2" data-product-id="9794772" data-module="7">
                        <div class="content">
                            <a href="/product/9794772-Foldable-Wireless-Almsbo-Portable-in1-Wireless-amazon-coupons?sl=&f=top"
                                title="Foldable Wireless Charger Almsbo Portable 3 in1 Wireless Charger Station for AirPods Pro2 Apple Iwatch7 6SE54321iPhone 11121314 SeriesXS MAXXRXSX88 Plus"
                                target="_blank" class="a-left-img">
                                <img src="https://m.media-amazon.com/images/I/41BJpZYTeDL._AC_.jpg" alt="Amazon Coupons">
                            </a>
                            <div class="content-text" style="flex: 1">
                                <div class="name">
                                    <a href="/product/9794772-Foldable-Wireless-Almsbo-Portable-in1-Wireless-amazon-coupons?sl=&f=top"
                                        title="Foldable Wireless Charger Almsbo Portable 3 in1 Wireless Charger Station for AirPods Pro2 Apple Iwatch7 6SE54321iPhone 11121314 SeriesXS MAXXRXSX88 Plus"
                                        target="_blank">Foldable Wireless Charger, Almsbo Portable 3 in1 Wireless Charger
                                        Station for AirPods Pro/2 Apple Iwatch7/ 6/SE/5/4/3/2/1,iPhone 11/12/13/14 Series/XS
                                        MAX/XR/XS/X/8/8 Plus </a>
                                </div>
                                <div class="price">
                                    <span>$10.79</span>
                                    <div class="thump-num">
                                        <span class="thumb-icon"></span>
                                        <span class="thump-num-text">120</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ranking2" data-product-id="9795942" data-module="7">
                        <div class="content">
                            <a href="/product/9795942-Womens-Canvas-Sneakers-Casual-Shoes-Low-amazon-coupons?sl=&f=top"
                                title="Womens Canvas Sneakers Casual Shoes Low Tops Slip Ons Classic Comfortable Tennis Walking Shoes"
                                target="_blank" class="a-left-img">
                                <img src="https://m.media-amazon.com/images/I/41ErpTQmHNL._AC_.jpg" alt="Amazon Coupons">
                            </a>
                            <div class="content-text" style="flex: 1">
                                <div class="name">
                                    <a href="/product/9795942-Womens-Canvas-Sneakers-Casual-Shoes-Low-amazon-coupons?sl=&f=top"
                                        title="Womens Canvas Sneakers Casual Shoes Low Tops Slip Ons Classic Comfortable Tennis Walking Shoes"
                                        target="_blank">Womens Canvas Sneakers Casual Shoes Low Tops Slip Ons Classic
                                        Comfortable Tennis Walking Shoes </a>
                                </div>
                                <div class="price">
                                    <span>$8.50</span>
                                    <div class="thump-num">
                                        <span class="thumb-icon"></span>
                                        <span class="thump-num-text">108</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ranking2" data-product-id="9790086" data-module="7">
                        <div class="content">
                            <a href="/product/9790086-Vickiss-Flameless-Candles-Battery-Operated-Candles-amazon-coupons?sl=&f=top"
                                title="Vickiss Flameless Candles Battery Operated Candles Ivory Real Wax Pillar LED Candles with 10Key Remote and Cycling 24 Hours Timer 2 Pack  3.25amp34 x 6amp34"
                                target="_blank" class="a-left-img">
                                <img src="https://m.media-amazon.com/images/I/41Rg6DujbhL._AC_.jpg" alt="Amazon Coupons">
                            </a>
                            <div class="content-text" style="flex: 1">
                                <div class="name">
                                    <a href="/product/9790086-Vickiss-Flameless-Candles-Battery-Operated-Candles-amazon-coupons?sl=&f=top"
                                        title="Vickiss Flameless Candles Battery Operated Candles Ivory Real Wax Pillar LED Candles with 10Key Remote and Cycling 24 Hours Timer 2 Pack  3.25amp34 x 6amp34"
                                        target="_blank">Vickiss Flameless Candles Battery Operated Candles Ivory Real Wax
                                        Pillar LED Candles with 10-Key Remote and Cycling 24 Hours Timer (2 Pack - 3.25&#34;
                                        x 6&#34;) </a>
                                </div>
                                <div class="price">
                                    <span>$8.00</span>
                                    <div class="thump-num">
                                        <span class="thumb-icon"></span>
                                        <span class="thump-num-text">155</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ranking2" data-product-id="9793116" data-module="7">
                        <div class="content">
                            <a href="/product/9793116-Bloggerlove-Rain-Jacket-Women-Lightweight-Raincoat-amazon-coupons?sl=&f=top"
                                title="Bloggerlove Rain Jacket Women Lightweight Raincoat Waterproof Windbreaker Striped Climbing Outdoor Hooded Trench Coats SXXL"
                                target="_blank" class="a-left-img">
                                <img src="https://m.media-amazon.com/images/I/41ifQy767QL._AC_.jpg" alt="Amazon Coupons">
                            </a>
                            <div class="content-text" style="flex: 1">
                                <div class="name">
                                    <a href="/product/9793116-Bloggerlove-Rain-Jacket-Women-Lightweight-Raincoat-amazon-coupons?sl=&f=top"
                                        title="Bloggerlove Rain Jacket Women Lightweight Raincoat Waterproof Windbreaker Striped Climbing Outdoor Hooded Trench Coats SXXL"
                                        target="_blank">Bloggerlove Rain Jacket Women Lightweight Raincoat Waterproof
                                        Windbreaker Striped Climbing Outdoor Hooded Trench Coats S-XXL </a>
                                </div>
                                <div class="price">
                                    <span>$18.40</span>
                                    <div class="thump-num">
                                        <span class="thumb-icon"></span>
                                        <span class="thump-num-text">123</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ranking2" data-product-id="9602578" data-module="7">
                        <div class="content">
                            <a href="/product/9602578-OCTROT-Heated-Blanket-Electric-Throw-Ultra-amazon-coupons?sl=&f=top"
                                title="OCTROT Heated Blanket Throw Electric Throw Blanket 50amp34x60amp34 Ultra Soft Cozy Sherpa Heating Blanket with 10 Heating Levels 18 Hours AutoOff Overheat Protection Machine Washable Blue Plaid"
                                target="_blank" class="a-left-img">
                                <img src="https://m.media-amazon.com/images/I/612hZOm3R2L._AC_.jpg" alt="Amazon Coupons">
                            </a>
                            <div class="content-text" style="flex: 1">
                                <div class="name">
                                    <a href="/product/9602578-OCTROT-Heated-Blanket-Electric-Throw-Ultra-amazon-coupons?sl=&f=top"
                                        title="OCTROT Heated Blanket Throw Electric Throw Blanket 50amp34x60amp34 Ultra Soft Cozy Sherpa Heating Blanket with 10 Heating Levels 18 Hours AutoOff Overheat Protection Machine Washable Blue Plaid"
                                        target="_blank">OCTROT Heated Blanket Throw, Electric Throw Blanket,
                                        50&#34;x60&#34;, Ultra Soft Cozy Sherpa Heating Blanket with 10 Heating Levels 1-8
                                        Hours Auto-Off Overheat Protection, Machine Washable (Blue Plaid) </a>
                                </div>
                                <div class="price">
                                    <span>$19.79</span>
                                    <div class="thump-num">
                                        <span class="thumb-icon"></span>
                                        <span class="thump-num-text">549</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ranking2" data-product-id="9702382" data-module="7">
                        <div class="content">
                            <a href="/product/9702382-SOCO-Solar-Meteor-Shower-Lights-Blue-amazon-coupons?sl=&f=top"
                                title="SOCO Solar Meteor Shower Lights Blue Outdoor10 Tubes 360 LED Meteor Rain Light Waterproof Solar Christmas Sting LightsSolar Cascading Icicle Lights for Holiday Party Xmas Tree Bushes Patio Decor"
                                target="_blank" class="a-left-img">
                                <img src="https://m.media-amazon.com/images/I/611U4Napj3L._AC_.jpg" alt="Amazon Coupons">
                            </a>
                            <div class="content-text" style="flex: 1">
                                <div class="name">
                                    <a href="/product/9702382-SOCO-Solar-Meteor-Shower-Lights-Blue-amazon-coupons?sl=&f=top"
                                        title="SOCO Solar Meteor Shower Lights Blue Outdoor10 Tubes 360 LED Meteor Rain Light Waterproof Solar Christmas Sting LightsSolar Cascading Icicle Lights for Holiday Party Xmas Tree Bushes Patio Decor"
                                        target="_blank">SOCO Solar Meteor Shower Lights Blue Outdoor,10 Tubes 360 LED
                                        Meteor Rain Light Waterproof, Solar Christmas Sting Lights,Solar Cascading Icicle
                                        Lights for Holiday Party Xmas Tree Bushes Patio Decor </a>
                                </div>
                                <div class="price">
                                    <span>$13.00</span>
                                    <div class="thump-num">
                                        <span class="thumb-icon"></span>
                                        <span class="thump-num-text">266</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ranking2" data-product-id="9792264" data-module="7">
                        <div class="content">
                            <a href="/product/9792264-Warmodern-Chameleon-Mica-Colors-Shift-Mica-amazon-coupons?sl=&f=top"
                                title="Warmodern Chameleon Mica Powder6 Colors Shift Mica Powder for Epoxy Resin Crafts Pearl Pigment Powder for Painting Nail Art Soap Making Bath Bombs Candle Making Slime"
                                target="_blank" class="a-left-img">
                                <img src="https://m.media-amazon.com/images/I/51GqW4y5o1L._AC_.jpg" alt="Amazon Coupons">
                            </a>
                            <div class="content-text" style="flex: 1">
                                <div class="name">
                                    <a href="/product/9792264-Warmodern-Chameleon-Mica-Colors-Shift-Mica-amazon-coupons?sl=&f=top"
                                        title="Warmodern Chameleon Mica Powder6 Colors Shift Mica Powder for Epoxy Resin Crafts Pearl Pigment Powder for Painting Nail Art Soap Making Bath Bombs Candle Making Slime"
                                        target="_blank">Warmodern Chameleon Mica Powder,6 Colors Shift Mica Powder for
                                        Epoxy Resin Crafts, Pearl Pigment Powder for Painting, Nail Art, Soap Making, Bath
                                        Bombs, Candle Making, Slime </a>
                                </div>
                                <div class="price">
                                    <span>$9.00</span>
                                    <div class="thump-num">
                                        <span class="thumb-icon"></span>
                                        <span class="thump-num-text">119</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ranking2" data-product-id="9795918" data-module="7">
                        <div class="content">
                            <a href="/product/9795918-Christmas-Gift-Alcohol-Markers-Bianyo-Primary-amazon-coupons?sl=&f=top"
                                title="Christmas Gift Alcohol Markers Set Bianyo 72 Primary Colors AlcoholBased Dual Tip Bullet ampamp Chisel Art Markers Set with Christmas Gift Bag for Anybody Who Enjoys Coloring Drawing Sketching Designing"
                                target="_blank" class="a-left-img">
                                <img src="https://m.media-amazon.com/images/I/51+zdF1IBCL._AC_.jpg" alt="Amazon Coupons">
                            </a>
                            <div class="content-text" style="flex: 1">
                                <div class="name">
                                    <a href="/product/9795918-Christmas-Gift-Alcohol-Markers-Bianyo-Primary-amazon-coupons?sl=&f=top"
                                        title="Christmas Gift Alcohol Markers Set Bianyo 72 Primary Colors AlcoholBased Dual Tip Bullet ampamp Chisel Art Markers Set with Christmas Gift Bag for Anybody Who Enjoys Coloring Drawing Sketching Designing"
                                        target="_blank">Christmas Gift Alcohol Markers Set, Bianyo 72 Primary Colors
                                        Alcohol-Based Dual Tip Bullet &amp; Chisel Art Markers Set with Christmas Gift Bag
                                        for Anybody Who Enjoys Coloring, Drawing, Sketching, Designing </a>
                                </div>
                                <div class="price">
                                    <span>$20.00</span>
                                    <div class="thump-num">
                                        <span class="thumb-icon"></span>
                                        <span class="thump-num-text">102</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="red-people">
                <div class="more-featured">
                    <img src="/images/app_back.png" alt="">
                    <a href="https://play.google.com/store/apps/details?id=com.vipon" target="_blank"
                        class="more-featured-google" rel="nofollow" onclick="app_click(15,4)">
                        <img src="/images/Google.png" alt="" widht="260px" height="60px">
                    </a>
                    <a href="https://apps.apple.com/us/app/vipon-amazon-coupon/id1272023223" target="_blank"
                        class="more-featured-ios" rel="nofollow" onclick="app_click(14,1)">
                        <img src="/images/iOS.png" alt="" widht="260px" height="60px">
                    </a>
                </div>






            </div>
        </div> --}}
    </div>
@endsection
