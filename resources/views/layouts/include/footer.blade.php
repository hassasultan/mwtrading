<div id="shopify-section-footer" class="shopify-section">
    <footer class="footer-area" data-section-id="footer">
        <div class="container">
            <div class="footer-list-wrap">
                <ul class="footer-list">
                    @php
                        $site =  App\Models\SiteSetting::first();
                    @endphp
                    <li class="ftlink-li logo-info text-start text-lg-start width-ac6a89ac-0ecd-4a2d-a253-57e64cccee17">
                        <div class="footer-info">

                            <a href="{{ route('index') }}" class="footer-logo">
                                <img style="max-width: 145px;"
                                    src="{{ asset('storage/'.$site->logo) }}"
                                    class="img-fluid" alt="electon6-store">
                            </a>
                            <style>
                                a.footer-logo svg {
                                    width: 100%;
                                }
                            </style>

                            <div class="rich-text store-info">
                                <i class="ri-phone-line"></i>
                                <p><a href="tel:{{ $site->phone }}" title="tel:{{ $site->phone }}">{{ $site->phone }}</a></p>
                            </div>


                            <div class="rich-text store-info">
                                <i class="ri-map-pin-line"></i>
                                <p>{{ $site->address }}</p>
                            </div>


                            <div class="rich-text store-info">
                                <i class="ri-mail-line"></i>
                                <p><a href="mailto:demo@demo.com" title="mailto:demo@demo.com">{{ $site->email }}</a></p>
                            </div>


                            <div class="footer-social">
                                <ul class="social-icon">
                                    @if ($site->fb != null)
                                        <li class="facebook">
                                            <a style="color: #ffffff" href="{{ $site->fb }}">
                                                <i class="ri-facebook-fill"></i>
                                            </a>
                                        </li>
                                    @endif

                                    @if ($site->twiter != null)

                                        <li class="twitter">
                                            <a style="color: #ffffff" href="{{ $site->twiter }}">
                                                <i class="ri-twitter-fill"></i>
                                            </a>
                                        </li>

                                    @endif


                                    @if ($site->pintrest != null)
                                        <li class="gplus">
                                            <a style="color: #ffffff" href="{{ $site->pintrest }}">
                                                <i class="ri-pinterest-fill"></i>
                                            </a>
                                        </li>
                                    @endif

                                    @if ($site->inst != null)
                                        <li class="pinterest">
                                            <a style="color: #ffffff" href="{{ $site->inst }}">
                                                <i class="ri-instagram-line"></i>
                                            </a>
                                        </li>
                                    @endif

                                    @if ($site->youtube != null)
                                        <li class="pinterest">
                                            <a style="color: #ffffff" href="{{ $site->youtube }}">
                                                <i class="ri-youtube-line"></i>
                                            </a>
                                        </li>
                                    @endif

                                    {{-- <li class="pinterest">
                                        <a style="color: #ffffff" href="https://www.tiktok.com/@koupondeals">
                                            <i class="ri-tiktok-line"></i>
                                        </a>
                                    </li> --}}

                                </ul>
                                <style>
                                    /* social icon css */
                                    ul.social-icon {

                                        margin: -5px 0px 0px -10px;

                                        line-height: 1;
                                    }

                                    ul.social-icon li {
                                        display: inline-block;

                                        margin: 5px 0px 0px 10px;

                                    }

                                    ul.social-icon li a {
                                        display: block;
                                        font-size: 16px;
                                        line-height: 1;
                                        width: 40px;
                                        height: 40px;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                        border: 1px solid #515151;
                                        border-radius: 100%;
                                    }

                                    ul.social-icon li a:hover {
                                        border-color: var(--font-color-primary);
                                        background-color: var(--font-color-primary);
                                    }
                                </style>
                            </div>

                        </div>
                        <style data-shopify>
                            .footer-list-wrap ul.footer-list li.width-ac6a89ac-0ecd-4a2d-a253-57e64cccee17 {
                                width: calc(40% - 30px);
                            }
                        </style>
                    </li>
                    <li class="ftlink-li link-list text-start text-lg-start width-20904045-e260-4468-8add-7527bb6b35e2">

                        <h2 class="ft-title md-d-none">Find categories</h2>
                        <a data-bs-toggle="collapse" href="#collapse-find-categories" class="ft-title">
                            <span>Find categories</span>
                            <i class="ri-add-line"></i>
                        </a>
                        <ul class="collapse  footer-sublist link" id="collapse-find-categories">






                        </ul>

                        <style data-shopify>
                            .footer-list-wrap ul.footer-list li.width-20904045-e260-4468-8add-7527bb6b35e2 {
                                width: calc(25% - 30px);
                            }
                        </style>
                    </li>
                    {{-- <li class="ftlink-li link-list text-start text-lg-start width-474709cb-2460-4831-8a76-4788b84bad17">

                        <h2 class="ft-title md-d-none">Customer care</h2>
                        <a data-bs-toggle="collapse" href="#collapse-customer-care" class="ft-title">
                            <span>Customer care</span>
                            <i class="ri-add-line"></i>
                        </a>
                        <ul class="collapse  footer-sublist link" id="collapse-customer-care">



                            <li class="ftsublink-li">
                                <a href="/pages/contact-us" class="ft-sublink">Contact us</a>
                            </li>



                            <li class="ftsublink-li">
                                <a href="/pages/about-us" class="ft-sublink">About us</a>
                            </li>



                            <li class="ftsublink-li">
                                <a href="/pages/faqs" class="ft-sublink">Faq's</a>
                            </li>



                            <li class="ftsublink-li">
                                <a href="/pages/privacy-policy" class="ft-sublink">Privacy policy</a>
                            </li>



                            <li class="ftsublink-li">
                                <a href="/pages/terms-condition" class="ft-sublink">Terms & condition</a>
                            </li>



                            <li class="ftsublink-li">
                                <a href="/pages/wishlist" class="ft-sublink">Wishlist</a>
                            </li>


                        </ul>

                        <style data-shopify>
                            .footer-list-wrap ul.footer-list li.width-474709cb-2460-4831-8a76-4788b84bad17 {
                                width: calc(25% - 30px);
                            }
                        </style>
                    </li> --}}
                    <li
                        class="ftlink-li newsletter text-start text-lg-start width-ce21c9f4-2317-48ae-9c1b-d8ff7c1987c1">
                        <div class="news-content">

                            <h2 class="ft-title">
                                Join our newsletter
                            </h2>


                            <div class="rich-text">
                                <p>Subscribe the newsletter for all the latest updates </p>
                            </div>

                            <form method="post" action="/contact#contact_form" id="contact_form"
                                accept-charset="UTF-8" class="contact-form"><input type="hidden" name="form_type"
                                    value="customer" /><input type="hidden" name="utf8" value="✓" />


                                <div class="news-wrap">
                                    <input type="hidden" name="contact[tags]" value="newsletter">
                                    <input class="text-start text-lg-start" type="email" name="contact[email]"
                                        class="email mail" id="E-mail" value=""
                                        placeholder="email@example.com" autocapitalize="off" required>
                                    <button type="submit" class="btn-style3" name="commit" id="Subscribe">
                                        Subscribe
                                    </button>
                                </div>
                            </form>
                        </div>
                        <style data-shopify>
                            .footer-list-wrap ul.footer-list li.width-ce21c9f4-2317-48ae-9c1b-d8ff7c1987c1 {
                                width: calc(25% - 30px);
                            }
                        </style>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <style>
        :root {
            --color-text: #999999;
            --color-heading: #219ebc;
        }

        .footer-area {

            background-color: #333333;
        }

        .footer-area {
            position: relative;
            padding-top: 100px;
            padding-bottom: 100px;
        }

        @media (max-width: 1199px) {
            .footer-area {
                padding-top: 60px;
                padding-bottom: 60px;
            }
        }

        @media (max-width: 767px) {
            .footer-area {
                padding-top: 40px;
                padding-bottom: 40px;
            }
        }

        .footer .container-col {
            padding-left: 60px;
            padding-right: 60px;
        }

        @media(max-width: 1599px) {
            .footer .container-col {
                padding-left: 30px;
                padding-right: 30px;
            }
        }

        @media(max-width: 767px) {
            .footer .container-col {
                padding-left: 15px;
                padding-right: 15px;
            }
        }

        .footer-list-wrap ul.footer-list {
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;

            margin-left: -30px;

            margin-top: -100px;
        }

        .footer-list-wrap ul.footer-list li.ftlink-li {

            margin-left: 30px;

            margin-top: 100px;
        }

        .footer-list-wrap ul.footer-list li.ftlink-li .ft-title {
            color: var(--font-color-primary);
            font-size: 18px;
            line-height: 1;
            text-transform: uppercase;
            font-weight: 700;
            padding-bottom: 50px;
        }

        .footer-list-wrap ul.footer-list li.ftlink-li a.ft-title {
            display: none;
        }

        .footer-list-wrap ul.footer-list li.ftlink-li .footer-sublist.collapse:not(.show) {
            display: block;
        }

        .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftsublink-li {
            margin-top: 20px;
        }

        .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftsublink-li:first-child {
            margin-top: 0px;
        }

        .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftsublink-li a {
            color: var(--color-text);
            font-size: 18px;
            font-weight: 500;
            line-height: normal;
        }

        .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftsublink-li a:hover {
            color: var(--font-color-primary);
        }

        /*logo info*/
        .footer-list-wrap ul.footer-list li.ftlink-li.logo-info .footer-logo {
            margin-bottom: 20px;
        }

        .footer-list-wrap ul.footer-list li.ftlink-li.logo-info .footer-info .footer-social {
            margin-top: 34px;
        }

        /*richtext*/
        .footer-list-wrap .rich-text {
            display: flex;
            align-items: center;
        }

        .footer-list-wrap .rich-text.store-info {
            margin-top: 12px;
        }

        .footer-list-wrap .rich-text a,
        .footer-list-wrap .rich-text p {
            color: var(--color-text);
            font-size: 18px;
            font-weight: 500;
            line-height: 30px;
        }

        .footer-list-wrap .rich-text i {
            color: var(--font-color-primary);
            font-size: 22px;

            margin-right: 10px;

        }

        .footer-list-wrap .rich-text a:hover {
            color: var(--color-primary);
        }

        /* custom text */
        .footer-list-wrap li.custom-text:last-of-type {
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }

        .footer-list-wrap li.custom-text:last-of-type .rich-text p {
            font-size: 16px;
        }

        .footer-list-wrap .custom-text .custom-url {
            padding-bottom: 15px;
        }

        /* newsletter */
        .footer-list-wrap .news-content .rich-text p {
            max-width: 75%;
        }

        .footer-list-wrap .news-content form {
            width: 100%;
            margin-top: 22px;
        }

        .footer-list-wrap .news-content .news-wrap {
            position: relative;
        }

        .footer-list-wrap .news-content .news-wrap input {
            font-size: 14px;
            font-weight: 500;
            width: 100%;
            padding-bottom: 10px;
            border: none;
            background-color: #ffffff;
            border-bottom: 1px solid rgba(0, 0, 0, 10%);
        }

        .footer-list-wrap .news-content .news-wrap button {
            width: 100%;
            font-size: 14px;
            font-weight: 600;
            margin-top: 15px;
            text-transform: uppercase;
        }

        .footer-list-wrap .news-content .news-wrap button:hover {
            color: var(--font-color-secondary);
        }

        /* isntagram */
        .footer-list-wrap ul.footer-list li.ftlink-li.insta-wrap .insta-block {
            display: flex;
            flex-wrap: wrap;
            margin-top: -15px;

            margin-left: -15px;

        }

        .footer-list-wrap ul.footer-list li.ftlink-li.insta-wrap .insta-block a {
            width: calc(33.33% - 15px);
            margin-top: 15px;

            margin-left: 15px;

            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .footer-list-wrap ul.footer-list li.ftlink-li.insta-wrap .insta-block a:after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            visibility: visible;
            background-color: #027ac0;
        }

        .footer-list-wrap ul.footer-list li.ftlink-li.insta-wrap .insta-block a:before {
            content: "\ee66";
            color: #fff;
            font-size: 18px;
            line-height: 1;
            position: absolute;
            z-index: 1;
            opacity: 0;
            visibility: hidden;
            font-family: viewsicon !important;
        }

        .footer-list-wrap ul.footer-list li.ftlink-li.insta-wrap .insta-block a:hover:before {
            opacity: 1;
            visibility: visible;
        }

        .footer-list-wrap ul.footer-list li.ftlink-li.insta-wrap .insta-block a:hover:after {
            opacity: .5;
            visibility: visible;
        }

        .footer-list-wrap ul.footer-list li.ftlink-li.insta-wrap .insta-block a:hover:before,
        .footer-list-wrap ul.footer-list li.ftlink-li.insta-wrap .insta-block a:before,
        .footer-list-wrap ul.footer-list li.ftlink-li.insta-wrap .insta-block a:after,
        .footer-list-wrap ul.footer-list li.ftlink-li.insta-wrap .insta-block a:hover:after {
            -webkit-transition: all .3s ease-in-out 0s;
            -o-transition: all .3s ease-in-out 0s;
            transition: all .3s ease-in-out 0s;
        }

        .footer-list-wrap ul.footer-list li.ftlink-li.insta-wrap .insta-block a img {
            width: 100%;
        }

        @media (max-width: 1199px) {
            .footer-list-wrap ul.footer-list {
                margin-top: -60px;
            }

            .footer-list-wrap ul.footer-list li.ftlink-li {
                margin-top: 60px;
            }

            .footer-list-wrap .news-content .news-wrap button {
                padding: 15px 35px;
            }
        }

        @media (max-width: 991px) {
            .footer-list-wrap ul.footer-list li.ftlink-li:not(:first-child) {
                margin-top: 15px;
            }

            .footer-list-wrap ul.footer-list {

                margin-left: 0px;

                margin-top: 0px;
            }

            .footer-list-wrap ul.footer-list li.ftlink-li {

                margin-left: 0px;

                margin-top: 0px;
            }

            .footer-list-wrap ul.footer-list li.ftlink-li {
                width: 100%;
            }

            .footer-list-wrap ul.footer-list li.ftlink-li a.ft-title {
                display: flex;
                font-size: 13px;
                align-items: center;
                justify-content: space-between;
                padding-bottom: 15px;
                border-bottom: 1px solid rgb(184 159 123 / 20%);
            }

            .footer-list-wrap .rich-text p,
            .footer-list-wrap .rich-text a,
            .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftsublink-li a,
            .footer-list-wrap ul.footer-list li.ftlink-li a.ft-title i {
                font-size: 13px;
            }

            .footer-list-wrap ul.footer-list li.ftlink-li a.ft-title[aria-expanded="true"] i:before {
                content: "\f1af";
            }

            .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftsublink-li:last-child {
                padding-bottom: 15px;
            }

            .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftsublink-li:first-child {
                padding-top: 15px;
            }

            .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftsublink-li {
                margin-top: 10px;
            }

            .footer-list-wrap ul.footer-list li.ftlink-li .footer-sublist.collapse:not(.show) {
                display: none;
            }

            .footer-list-wrap ul.footer-list li.ftlink-li .ft-title {
                padding-bottom: 15px;
                font-size: 13px;
            }

            .footer-list-wrap .rich-text p,
            .footer-list-wrap .rich-text a {
                line-height: 25px;
            }

            .footer-list-wrap ul.footer-list li.ftlink-li.logo-info .footer-logo {
                margin-bottom: 10px;
            }

            .footer-list-wrap ul.footer-list li.ftlink-li.logo-info .footer-info .footer-social {
                margin-top: 24px;
            }

            .footer-list-wrap ul.footer-list li.ftlink-li .ft-title.md-d-none {
                display: none;
            }

            .footer-list-wrap .news-content {
                align-items: flex-start;
                flex-direction: column;
            }

            .footer-list-wrap .news-content .news-wrap input {
                min-width: 100%;
                font-size: 12px;
                padding-bottom: 15px;
            }

            .footer-list-wrap .news-content .news-wrap input::placeholder {
                font-size: 13px;
            }

            .footer-list-wrap .news-content .news-wrap button {
                font-size: 14px;
            }

            .footer-list-wrap ul.footer-list li.ftlink-li.logo-info .footer-logo {
                margin-bottom: 15px;
            }

            .footer-list-wrap ul.footer-list li.ftlink-li.insta-wrap .insta-block a {
                width: auto;
            }
        }
    </style>
</div>
<div id="shopify-section-copy-right" class="shopify-section">
    <footer class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="ft-bottom">
                        <li class="copy-right">
                            <div class="richtext">
                                <p>Copyright © 2023 -2030  by <a href="{{route('index')}}">Soon Lee Recycle</a></p>
                            </div>
                        </li>
                        {{-- <li class="payment">
                            <a href="javascript:void(0)" class="payment-icon">


                                <svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img"
                                    width="38" height="24" aria-labelledby="pi-visa">
                                    <title id="pi-visa">Visa</title>
                                    <path opacity=".07"
                                        d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" />
                                    <path fill="#fff"
                                        d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" />
                                    <path
                                        d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z"
                                        fill="#142688" />
                                </svg>

                                <svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" width="38"
                                    height="24" role="img" aria-labelledby="pi-paypal">
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

                                <svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img"
                                    width="38" height="24" aria-labelledby="pi-master">
                                    <title id="pi-master">Mastercard</title>
                                    <path opacity=".07"
                                        d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" />
                                    <path fill="#fff"
                                        d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" />
                                    <circle fill="#EB001B" cx="15" cy="12" r="7" />
                                    <circle fill="#F79E1B" cx="23" cy="12" r="7" />
                                    <path fill="#FF5F00"
                                        d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z" />
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24"
                                    width="38" height="24" aria-labelledby="pi-american_express">
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


                            </a>
                            <style>
                                .payment-icon {
                                    display: flex;
                                    flex-wrap: wrap;
                                }

                                .payment-icon svg {
                                    width: 50px;
                                    height: 32px;

                                    margin-right: 5px;

                                }

                                .payment-icon svg:last-child {

                                    margin-right: 0px;

                                }
                            </style>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </footer>



    <style>
        .footer-bottom-area {
            padding-top: 18px;
            padding-bottom: 18px;
            background-color: #333333;

            border-top: 1px solid #515151;


        }

        .footer-bottom-area ul {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .footer-bottom-area ul li.right-block {

            text-align: right;

        }

        .footer-bottom-area .richtext p {
            color: #757375;
            font-size: 17px;
            font-weight: 600;
        }

        .footer-bottom-area .richtext a {
            color: var(--font-color-primary);
            font-size: 16px;
        }

        .footer-bottom-area .richtext a:not(:first-child) {

            margin-left: 15px;

        }

        @media (max-width: 991px) {
            .footer-bottom-area {
                padding-top: 18px;
                padding-bottom: 18px;
            }

            .footer-bottom-area .richtext a,
            .footer-bottom-area .richtext p {
                font-size: 14px;
            }
        }

        @media (max-width: 767px) {
            .footer-bottom-area ul {
                flex-direction: column;
            }

            .footer-bottom-area ul li,
            .footer-bottom-area ul li.right-block {
                width: auto;
                text-align: center;
            }

            .footer-bottom-area ul li.right-block {
                padding-top: 10px;
            }

            .footer-bottom-area ul li.payment {
                margin-top: 10px;
            }
        }
    </style>
</div>
<a href="javascript:void(0)" id="top" class="scroll">
    <span><i class="ri-arrow-up-line"></i></span>
</a>
<script>
    $(window).scroll(function() {
        if ($(this).scrollTop() > 600) {
            $('#top').addClass('show');
        } else {
            $('#top').removeClass('show');
        }
    });
    $('#top').click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
</script>
<style>
    a#top {
        position: fixed;
        bottom: 30px;

        right: 30px;

        z-index: 2;
        opacity: 0;
        visibility: hidden;
        -webkit-transition: all 0s ease-in-out 0s;
        -o-transition: all 0s ease-in-out 0s;
        transition: all 0s ease-in-out 0s;
    }

    a#top.show {
        opacity: 1;
        visibility: visible;
        -webkit-transition: all 0.3s ease-in-out 0s;
        -o-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
    }

    a.scroll span {
        color: #ffffff;
        font-size: 16px;
        height: 30px;
        width: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: var(--font-color-primary);

        box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
    }

    a.scroll span i {
        display: block;
        line-height: 0;
    }

    a.scroll:hover span {
        color: var(--font-color-primary);
        background-color: #FFFFFF;
    }

    a.scroll span,
    a.scroll:hover span {
        -webkit-transition: all 0.3s ease-in-out 0s;
        -o-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
    }

    @media (max-width : 767px) {
        a#top {
            bottom: 15px;

            right: 15px;

        }
    }
</style>
