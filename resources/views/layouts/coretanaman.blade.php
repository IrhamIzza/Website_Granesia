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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">


</head>


<body data-spy="scroll" data-target=".fixed-top">



    <nav class="navbar navbar-expand-lg trans-navigation1">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="images/logo.png" alt="" class="img-fluid b-logo">
                <br>
                <h7 class="Garnesia">Garnesia</h7>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-bars"></i>
                </span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="mainNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="service.html">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarWelcome" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tanaman
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarWelcome">
                            <a class="dropdown-item " href="kaktus">
                                kaktus
                            </a>
                            <a class="dropdown-item " href="oxalis">
                                Budidaya Oxalis
                            </a> 
                            <a class="dropdown-item " href="tanah" target="blank">
                                Tanah
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="service.html">Budidaya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="pricing.html">Media Tanam</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="blog.html">Belanja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="contact.html">Contact</a>
                    </li>

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
                    <center><img src="../images/logo2.png" alt="" class="img-fluid b-logo"></center>                   
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
   