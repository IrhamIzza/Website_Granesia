<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laravel 5.6 - {{ config('app.name') }} </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/bootstrap4/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/responsive.css') }}">
    <link href="{{asset("assets/styles/toastr.min.css")}}" rel="stylesheet">
    <!-- <link href="{{ asset('css/core.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    @yield('css')

    <nav class="navbar bg-white fixed-top">
        <div class="container-fluid">
            <b class="navbar-branda" href="#">
                <img src="images/Capture.PNG " alt="" width="80" style="margin-left:30% ;" style="padding:0 ;">
            </b>
            <a class="navbar-brand @yield('index')" href="/home2">Beranda</a>
            <li class="nav-item dropdown">
                <a class="navbar-brand @yield('tanaman') nav-link dropdown-toggle" href="#" id="navbarWelcome" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tanaman
                </a>
            </li>
            <a class="navbar-brand @yield('budidaya')" href="/budidaya">Budidaya</a>
            <a class="navbar-brand @yield('media')" href="/media">Media Tanam</a>
            <a class="navbar-brand @yield('belanja')" href="/cartbelanja">Belanja</a>
            <ul class="navbar_user">

                <li class="checkout">
                    <a href="{{route('basket')}}">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <span id="checkout_items" class="checkout_items">{{ Cart::count() }}</span>
                    </a>
                </li>
            </ul>
            <div class="">
                <ul class="top_nav_menu ">
                    <!-- Currency / Language / My Account -->
                    @if(Auth::guest())
                    <li class="language">
                        <a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>
                            Sign In</a>
                    </li>
                    <li class="language">
                        <a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a>
                    </li>
                    @else
                    <li class="account">
                        <a href="#">
                            {{ Auth::user()->name }}
                            <i class="fa fa-angle-down"></i>
                        </a>

                        <ul class="account_selection">
                            @if(Auth::user()->isItAuthorized("admin"))
                            <li><b>ADMIN</b></li>
                            <li><a href="{{ url('/admin-users') }}"><i class="fa fa-btn fa-users"></i>Users</a>
                            </li>
                            <li><a href="{{ url('/admin-category') }}"><i class="fa fa-btn fa-list-ul"></i>Category</a></li>
                            <li><a href="{{ url('/admin-products') }}"><i class="fa fa-btn fa-cubes"></i>Products</a>
                            </li>
                            <li><a href="{{ url('/admin-orders') }}"><i class="fa fa-btn fa-cogs"></i>Orders</a></li>
                            <li class="divider"></li>
                            @endif

                            @if(Auth::user())
                            <li><b>USER</b></li>
                            <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-user"></i>Profile</a>
                            </li>
                            <li><a href="{{ url('/orders') }}"><i class="fa fa-btn fa-list-alt"></i>Orders</a>
                            </li>
                            @endif
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
                            </li>
                        </ul>


                    </li>
                    @endif
                </ul>
            </div>
  </div>
</nav>


    </div>
    </nav>
    <script>
        window.csrfToken = "{{ csrf_token() }}"

        $(document).ready(function() {
            $(".navbar-brand").hover(function() {
                $(this).css("background-color", "#219F94").css("border-radius", "64px").css("color", "#ffffff");
            }, function() {
                $(this).css("background-color", "#ffffff").css("color", "#219F94");
            });
        });
    </script>
</head>

<body data-status="{{Session::get("status")}}">

    <div class="super_container">

        <!-- Header -->

        @yield('content')

        <!-- Footer -->



    </div>


    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/styles/bootstrap4/popper.js') }}"></script>
    <script src="{{ asset('assets/styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
    <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/Isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/plugins/easing/easing.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{asset("assets/js//toastr.min.js")}}"></script>

    @yield('js')


</body>

</html>