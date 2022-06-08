<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="{{ asset('css/core.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome/css/all.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>

    </style>

</head>

<body>
    <nav class="navbar bg-white fixed-top">
        <div class="container-fluid">
            <b class="navbar-brand" href="#">
                <img src="images/Capture.PNG" alt="" width="80" style="margin-left:30% ;" style="padding:0 ;">
            </b>
            <a class="navbar-brand @yield('index')" href="/index">Beranda</a>
            <li class="nav-item dropdown">
                <a class="navbar-brand @yield('tanaman') nav-link dropdown-toggle" href="#" id="navbarWelcome" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tanaman
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarWelcome">
                    <a class="navbar @yield('kaktus')" href="/tanaman/kaktus">Kaktus</a>
                    <a class="navbar @yield('oxalis')" href="/tanaman/oxalis">Oxalis</a>
                    <a class="navbar @yield('tanah')" href="/tanaman/tanah">Tanah</a>
                </div>
            </li>
            <a class="navbar-brand @yield('budidaya')" href="/budidaya">Budidaya</a>
            <a class="navbar-brand @yield('media')" href="/media">Media Tanam</a>
            <a class="navbar-brand @yield('belanja')" href="/belanja">Belanja</a>

            <div class="">
                <ul class="top_nav_menu">
                    <!-- Currency / Language / My Account -->
                    @if(Auth::guest())
                    <li class="language">
                        <a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a>
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
    @yield('contents')

</body>