<!DOCTYPE html>
<html lang="en">
<style>
    .sidebar_dashboard .active.active-item .active-item::after {
        content: "";
        right: 0;
        top: 30px;
        width: 6px;
        height: 6px;
        background-color: #fff;
        border-radius: 100%;
        position: absolute;
        box-shadow: 0 0 0 4px #000;
    }

    .sidebar_dashboard .accordion-item {
        border: 0;
    }
</style>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="user-id" content="{{ Auth::check() ? Auth::user()->id : '' }}">

    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" inte
        grity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />



    <link href="{{ asset('user_dashboard/css/custom-style.css') }}" rel="stylesheet">

</head>

<body style="background: #fafafb;">
    <div id="app">
        {{-- <example-component/> --}}
        <header class="dashbord_header">
            @include('dashboard.admin.includes.header')
        </header>
        <div class="d-flex flex-wrap">
            <div class="sidebar_container">
                <div class="sidebar_dashboard h-100">
                    <i class="fa-solid fa-xmark side_bar_close d-lg-none"></i>
                    @php
                        $site = App\Models\SiteSetting::first();
                    @endphp
                    <div class="text-center ">
                        <a href="{{ route('home') }}"> <img src="{{ asset('public/storage/' . $site->logo) }}"
                                alt="" class="img-fluid" style="width:100px; height: 120px;"></a>
                    </div>
                    <nav class="h-100">
                        @include('dashboard.admin.includes.sidebar')
                    </nav>
                </div>
            </div>
            <div class="main_content ">
                {{-- Error/Success Message --}}


                @if (count($errors) > 0)
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif

                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible">
                        {{ session('error') }}
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Error/Success Message End --}}
                @yield('content')
            </div>
        </div>
    </div>
</body>

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('public/js/app.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="{{ asset('user_dashboard/js/sweetalert.js') }}"></script>

<script src="{{ asset('user_dashboard/js/summernote.min.js') }}"></script>
<script src="{{ asset('user_dashboard/js/custom.js') }}"></script>
<script src="{{ asset('user_dashboard/js/jquery.dataTables.min.js') }}"></script>
{{-- <script src="{{ asset('user_dashboard/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('user_dashboard/js/dataTables.responsive.min.js') }}"></script> --}}
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="{{ asset('user_dashboard/js/responsive.bootstrap4.min.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>

@yield('bottom_script')

<script>
    $(document).ready(function() {
        // Select2 Multiple
        $(".select2-multiple").select2({
            placeholder: "Select",
            allowClear: true,
        });
    });
    $(".numberfield").keydown(function(e) {
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
            (e.keyCode >= 35 && e.keyCode <= 40)) {
            return;
        }
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
    $(".notification-button").click(function() {
        $(".notification-menu").toggleClass("newshow");
        $(this).toggleClass("newshow");
    });
</script>


</html>
