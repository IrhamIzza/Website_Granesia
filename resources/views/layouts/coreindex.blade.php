<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="seo & digital marketing">
    <meta name="keywords" content="marketing,digital marketing,creative, agency, startup,promodise,onepage, clean, modern,seo,business, company">
    <meta name="author" content="Themefisher.com">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
   <title>Halaman @yield('title')</title>
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css') }}">
    <!-- Icofont Css -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome/css/all.css') }}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{asset('plugins/animate-css/animate.css') }}">
    <!-- Icofont -->
    <link rel="stylesheet" href="{{asset('plugins/icofont/icofont.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/style.css') }}">


</head>


<body data-spy="scroll" data-target=".fixed-top">


<nav class="navbar bg-white fixed-top">
  <div class="container-fluid">
  <b class="navbar-brand" href="#">
      <img src="images/Capture.PNG" alt="" width="80" style="margin-left:30% ;" style="padding:0 ;">
          </b>
    <a class="navbar-brand @yield('index')" href="/home2">Beranda</a>
    <li class="nav-item dropdown">
                        <a class="navbar-brand @yield('tanaman') nav-link dropdown-toggle" href="#" id="navbarWelcome" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tanaman
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarWelcome">
                            <a class="navbar-brand @yield('kaktus')" href="/tanaman/kaktus">Kaktus</a>
                            <a class="navbar-brand @yield('oxalis')" href="/tanaman/oxalis">Oxalis</a>
                            <a class="navbar-brand @yield('tanah')" href="/tanaman/tanah">Tanah</a>
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
    <!--MAIN HEADER AREA END -->
 

@yield('contents')

<!--  FOOTER AREA START  -->
<section id="footer" class="section-padding">
    <div class="container ">
        <div class="row">
            <div class="col-lg-3 col-sm-8 col-md-8">
                <div class="footer-widget footer-link">
                    <center><img src="images/logo2.png" alt="" class="img-fluid b-logo"></center>                   
                    <h1>GARNESIA</h1>
                    <p>Dapatkan Inspirasi Kamu disini</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-md-4">
                <div class="footer-widget footer-link">
                    <h4>Layanan</h4>
                    <ul>
                        <li><a href="#">Memberikan Informasi Tanaman Hias</a></li>
                        <li><a href="#">Mengajarkan Berbudidaya Tanaman Hias</a></li>
                        <li><a href="#">Memberitahu Media Tanaman</a></li>
                        <li><a href="#">Menjual Kebutuhan untuk berkebun</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-sm-4 col-md-4">
                <div class="footer-widget footer-link">
                    <h4>Profil</h4>
                    <ul>
                        <li><a href="#">Tentang Garnesia</a></li>
                        <li><a href="#">Hubungi Kami</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-4 col-md-4">
                <div class="footer-widget footer-text">
                    <h4>Tetap Terhubung</h4>
                    <p class="mail"><span>Mail:</span> promdise@gmail.com</p>
                    <!-- <p><span>Facebook :</span>+202-277-3894</p>
                    <p><span>Location:</span> 455 West Orchard Street Kings Mountain, NC 28086,NOC building</p> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="footer-copy">
                    © 2022 GARNESIA.
                </div>
            </div>
        </div>
    </div>
</section>
<!--  FOOTER AREA END  -->

   

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="plugins/bootstrap/js/popper.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
   <!-- Woow animtaion -->
    <script src="plugins/counterup/wow.min.js"></script>
    <script src="plugins/counterup/jquery.easing.1.3.js"></script>
     <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>

    <!-- Google Map -->
    <script src="plugins/google-map/gmap3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>   
    <!-- Contact Form -->
    <script src="plugins/jquery/contact.js"></script>
    <script src="js/custom.js"></script>

  </body>
  </html>
   