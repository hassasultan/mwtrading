<ul class="accordion accordion-flush position-relative h-100" id="accordionFlushExample">
    <li class="nav-item {{ Route::is('home') ? 'active active-item' : '' }}">
        <a href="{{route('home')}}"><img src="{{ asset('user_dashboard/images/dashboard.png') }}" alt="" class="me-3">Admin Dashboard</a>
    </li>
    <li class="nav-item {{ Route::is('admin.customers') ? 'active active-item' : '' }}">
        <a href="{{route('admin.customers')}}"><img src="{{ asset('user_dashboard/images/dashboard.png') }}" alt="" class="me-3">Customers Management</a>
    </li>
    <li class="{{ Request::routeIs('banner.index') ? 'active active-item' : '' }}">
        <a href="{{route('banner.index')}}"><img src="{{ asset('user_dashboard/images/payment.png') }}" alt="" class="me-3"> Banner</a>
    </li>
    <li class="{{ Request::routeIs('category.index') ? 'active active-item' : '' }}">
        <a href="{{route('category.index')}}"><img src="{{ asset('user_dashboard/images/payment.png') }}" alt="" class="me-3"> Category</a>
    </li>
    <li class="{{ Request::routeIs('subcategory.index') ? 'active active-item' : '' }}">
        <a href="{{route('subcategory.index')}}"><img src="{{ asset('user_dashboard/images/payment.png') }}" alt="" class="me-3"> SubCategory</a>
    </li>
    <li class="{{ Request::routeIs('product.index') ? 'active active-item' : '' }}">
        <a href="{{route('product.index')}}"><img src="{{ asset('user_dashboard/images/payment.png') }}" alt="" class="me-3"> Product</a>
    </li>
    {{-- <li class="{{ Request::routeIs('brand.index') ? 'active active-item' : '' }}">
        <a href="{{route('brand.index')}}"><img src="{{ asset('user_dashboard/images/payment.png') }}" alt="" class="me-3"> Brand</a>
    </li> --}}
    {{-- <li class="{{ Request::routeIs('section.index') ? 'active active-item' : '' }}">
        <a href="{{route('section.index')}}"><img src="{{ asset('user_dashboard/images/payment.png') }}" alt="" class="me-3"> Sections</a>
    </li> --}}
    {{-- <li class="{{ Request::routeIs('coupen.index') ? 'active active-item' : '' }}">
        <a href="{{route('coupen.index')}}"><img src="{{ asset('user_dashboard/images/payment.png') }}" alt="" class="me-3"> Coupens</a>
    </li> --}}
    <li class="{{ Request::routeIs('site.setting') ? 'active active-item' : '' }}">
        <a href="{{route('site.setting')}}"><img src="{{ asset('user_dashboard/images/payment.png') }}" alt="" class="me-3"> Site Setting</a>
    </li>
    {{-- <li @if (Route::is('admin.allcourses') || Route::is('admin.allcategories')  || Route::is('user.mycourses') ) class="accordion-item active active-item" @else class="accordion-item" @endif >
        <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne" aria-expanded="false"
                aria-controls="flush-collapseOne">
                <img src="{{ asset('user_dashboard/images/courses.png') }}" alt="" class="me-3"> Classes
            </button>
        </h2>
        <div  @if (Route::is('admin.allcourses') || Route::is('admin.allcategories')) class="accordion-collapse collapse show" @else   @endif id="flush-collapseOne" class="accordion-collapse collapse"
            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <ul class="accordion_inner">
                <li class="{{ Request::routeIs('admin.allcourses') ? 'active active-item' : '' }}">
                    <a href="{{route('admin.allcourses')}}">
                        <img src="{{ asset('user_dashboard/images/my-courses.png') }}" alt="" class="me-3"> All Classes
                    </a>
                </li>
                <li class="{{ Request::routeIs('admin.allcategories') ? 'active active-item' : '' }}">
                    <a href="{{route('admin.allcategories')}}">
                        <img src="{{ asset('user_dashboard/images/my-courses.png') }}" alt="" class="me-3"> Classes Categories
                    </a>
                </li>
            </ul>
        </div>
    </li> --}}


    <li class="w-100 logout_nav">
        <a href="{{ route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <img src="{{ asset('user_dashboard/images/logout.png') }}" alt="" class="me-3"> Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>
    </ul>
