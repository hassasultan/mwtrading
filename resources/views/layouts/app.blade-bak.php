<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <style>
        .content-activity-outer{
            display:flex;
            align-items:center;
            position: relative;
            top: -2px;
        }
        .content-activity-outer .content-activity-img{
            height:18px;
            width:10px;
        }
        .content-activity-outer .content-activity-bg{
            height: 18px;
            line-height:18px;
            padding-right: 3px;
            font-size: 12px !important;
            color: #ffffff;
            white-space: nowrap;
            background-color: #FEAC2E;
        }
        #is_man .modal-content .form-group-modal input, #collapseOne .panel-body .form-group input {
            display: none;
        }

        #is_man .modal-content .form-group-modal label, #collapseOne .panel-body .form-group label {
            background-color: rgba(249, 249, 249, 1);
            padding: 13px 21px;
            font-size: 16px;
            color: rgba(19, 19, 19, 1);
            line-height: 16px;
            font-weight: normal;
            cursor: pointer;
        }

        #is_man .modal-content .form-group-modal input:checked + label, #collapseOne .panel-body .form-group input:checked + label {
            background: rgba(105, 230, 236, 1);
        }
        /* 注册抽奖的小弹窗 */
        #loginActivity-minor{
            position: fixed;
            right:0;
            bottom:270px;
            width:88px;
            height:74px;
            background: url('/images/activity/loginActivityMinor.png?v=20221026')no-repeat;
            background-size: 100%;
            z-index: 1000;
            cursor: pointer;
        }
        /* 注册抽奖成功的弹窗 */
        #loginActivitySucceed {
            z-index: 1060;
            background: rgb(0,0,0,.4);
        }
        #loginActivitySucceed .modal-dialog {
            width:660px;
            margin-top:150px;
        }
        #loginActivitySucceed .bg-img{
            background-color:#fff;
            width: 660px;
            height: 520px;
            margin: 0 auto;
            position: relative;
            background: url('/images/activity/loginActivitySucceed.png')no-repeat;
            background-size: 100%;
        }
        @media (min-width: 768px){
            #loginActivitySucceed .modal-dialog {
                width: 660px;
                margin-top:150px;
                top:0;
            }
        }
        #loginActivitySucceed .bg-img img{
            width: 14px;
            height: 14px;
            position: absolute;
            top: 30px;
            right: 30px;
            cursor: pointer;
        }
        #loginActivitySucceed .conent-out{
            position: absolute;
            bottom: 0;
            padding: 30px 35px;
        }
        #loginActivitySucceed .conent-out h2{
            font-size: 14px;
            font-family: Helvetica-Bold, Helvetica;
            font-weight: bold;
            color: #333333;
            line-height: 18px;
            margin-bottom: 16px;
        }
        #loginActivitySucceed .conent-out p{
            font-size: 12px;
            font-family: Helvetica;
            color: #999999;
            line-height: 20px;
            margin-bottom: 36px;
        }
        #loginActivitySucceed .conent-out p span{
            color: #3FD6DD;
        }
        #loginActivitySucceed .but-out{
            width: 100%;
        }
        #loginActivitySucceed .but-out .but{
            width: 205px;
            height: 45px;
            background: #3FD6DD;
            font-size: 20px;
            font-family: Montreal-Bold, Montreal;
            font-weight: bold;
            color: #FFFFFF;
            line-height: 45px;
            text-align: center;
            border-radius: 45px;
            margin: 0 auto;
            cursor: pointer;
        }
    </style>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css' />
    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" inte
        grity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" /> --}}
<!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/head_foot.css') }}" />

    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KMV692H');
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ant.css') }}" />
    <script>
        /*
            *
            *   Get size settings for pictures left margin-left
            *
            * */
        function getImgSize(arrayElement,scale=1) {
            let width = parseInt($(arrayElement).css('width'));
            let height = parseInt($(arrayElement).css('height'));
            if(width>0&&height>0){
                if(width/height>=scale){
                    $(arrayElement).css({
                        'height':'100%',
                        'width':'auto'
                    });
                    let timer = setTimeout(function () {
                        clearTimeout(timer);
                        width = parseInt($(arrayElement).css('width'));
                        $(arrayElement).css({
                            'left':'-'+(width-parseInt($(arrayElement).parent().width()))/2+'px',
                            top:0
                        })
                    },500)
                }else{
                    $(arrayElement).css({
                        'width':'100%',
                        'height':'auto',
                    })
                    let timer = setTimeout(function () {
                        clearTimeout(timer);
                        height = parseInt($(arrayElement).css('height'));
                        $(arrayElement).css({
                            'top': '-' + (height - parseInt($(arrayElement).parent().height())) / 2 + 'px',
                            left: 0
                        })
                    },500)
                }
            }
        }
    </script>

</head>
<body>

    @include('layouts.include.header')
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
    @yield('content')
    @include('layouts.include.footer')
    <style>
    .footer-bottom-area{
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
    .footer-bottom-area ul li.right-block{

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
    .footer-bottom-area .richtext a:not(:first-child){

        margin-left: 15px;

    }
@media (max-width: 991px) {
    .footer-bottom-area{
        padding-top: 18px;
        padding-bottom: 18px;
    }
    .footer-bottom-area .richtext a, .footer-bottom-area .richtext p{
        font-size: 14px;
    }
}
@media (max-width: 767px) {
    .footer-bottom-area ul {
        flex-direction: column;
    }
    .footer-bottom-area ul li,
    .footer-bottom-area ul li.right-block{
        width: auto;
        text-align: center;
    }
    .footer-bottom-area ul li.right-block{
        padding-top: 10px;
    }
    .footer-bottom-area ul li.payment {
        margin-top: 10px;
    }
}
</style></div>
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
    $('#top').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
</script>
<style>
    a#top{
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
    a#top.show{
        opacity: 1;
        visibility: visible;
        -webkit-transition: all 0.3s ease-in-out 0s;
        -o-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
    }
    a.scroll span{
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
    a.scroll span i{
        display: block;
        line-height: 0;
    }
    a.scroll:hover span{
        color: var(--font-color-primary);
        background-color: #FFFFFF;
    }
    a.scroll span,
    a.scroll:hover span{
        -webkit-transition: all 0.3s ease-in-out 0s;
        -o-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
    }
    @media (max-width : 767px) {
        a#top{
            bottom: 15px;

            right: 15px;

        }
    }
</style>
    <!-- Necessary JS -->
    <script type="text/javascript" src="{{ asset('js/timber.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/cart.api.js?v=49640757207134106651650619320')}}"></script><script type="text/javascript" src="//cdn.shopify.com/s/files/1/0641/3431/6288/t/2/assets/wishlist.js?v=146372695301814466001650619301"></script>

    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('public/js/app.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="{{ asset('user_dashboard/js/sweetalert.js') }}"></script>

    <script src="{{ asset('user_dashboard/js/summernote.min.js') }}"></script>
    <script src="{{ asset('user_dashboard/js/custom.js') }}"></script>
    <script src="{{ asset('user_dashboard/js/jquery.dataTables.min.js') }}"></script>
    {{--<script src="{{ asset('user_dashboard/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('user_dashboard/js/dataTables.responsive.min.js') }}"></script>--}}
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    {{-- <script src="{{ asset('user_dashboard/js/responsive.bootstrap4.min.js') }}"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>

</body>
</html>
