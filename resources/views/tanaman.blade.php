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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarWelcome" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Beranda
                        </a>
                        <!-- <div class="dropdown-menu" aria-labelledby="navbarWelcome">
                            <a class="dropdown-item " href="index.html">
                                Home-1
                            </a>
                            <a class="dropdown-item " href="index-2.html">
                                Home-2
                            </a> 
                            <a class="dropdown-item " href="index-3.html" target="blank">
                                Onepage
                            </a>
                        </div> -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="tanaman">Tanaman</a>
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

    <!--MAIN BANNER AREA START -->
        <section id="about" class="bg-hal2">
            <div class="about2-bg-img d-none d-lg-block d-md-block"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-sm-12 col-md-8">
                        <div class="about-content">
                            <h3><strong> MONSTERA ANDASONII</strong></h3>
                            <h6>Salah satu varietas tumbuhan paling unik adalah Monstera Adansonii atau biasa dikenal juga dengan sebutan monstera topeng monyet. Adansonii merupakan tanaman merambat yang dapat tumbuh mencapai 6 meter.</h6><br>
                            <h6>Untuk perawatanya, hindari tumbuhan pada kondisi lingkungan berangin atau terlalu kering. Jenis ini juga tidak terlalu menyukai terpaan matahari langsung.
                            </h6><br>
                            <h6>Kamu bisa menyimpan Adansonii di luar ruangan yang tertutupi kanopi. Menyemprotkan uap air juga dapat membantu daun cepat berkembang.</h6><br>
                            <a href="#" class="btn btn-white btn-circled">lets start</a>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--MAIN HEADER AREA END -->

        <!--  BLOG AREA START  -->
        <section id="blog" class="section-padding bg-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 m-auto">
                        <div class="section-heading">
                            <h3 class="section-title"><strong>JENIS TANAMAN HIAS</strong></h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <div class="blog-block ">
                            <img src="images/banner/tanaman/1.png" alt="" class="img-fluid">
                            <div class="blog-text2">
                                <a href="blog-single.html" class="h6 my-2 d-inline-block">
                                    <center>Kaktus</center>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <div class="blog-block ">
                            <img src="images/banner/tanaman/2.png" alt="" class="img-fluid">
                            <div class="blog-text2">
                                <a href="blog-single.html" class="h6 my-2 d-inline-block">
                                    <center>Cemara</center>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <div class="blog-block ">
                            <img src="images/banner/tanaman/3.png" alt="" class="img-fluid">
                            <div class="blog-text2">
                                <a href="blog-single.html" class="h6 my-2 d-inline-block">
                                    <center>Palem</center>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <div class="blog-block ">
                            <img src="images/banner/tanaman/4.png" alt="" class="img-fluid">
                            <div class="blog-text2">
                                <a href="blog-single.html" class="h6 my-2 d-inline-block">
                                    <center>Bunga</center>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  BLOG AREA END  -->
        <!--  SERVICE AREA START  -->
        <section id="blog" class="section-padding bg-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 m-auto">
                        <div class="section-heading">
                            <h3 class="section-title"><strong>JENIS TANAMAN HIAS</strong></h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <center><div class="blog-block ">
                            <img src="images/banner/tanaman/5.png" alt="" class="img-fluid">
                            <div class="blog-text">
                            <h8>Monstera Deliciosa</h8><br>
                            <h9>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam est vel nisl, feugiat tristique quis elit risus semper. Sed orci eu dignissim sit sit lectus eget habitasse ornare. Leo, amet justo consectetur consectetur scelerisque ullamcorper nibh turpis commodo. Pellentesque nulla tellus amet in sem. Pellentesque sit sollicitudin ultrices leo. Odio est, vestibulum, neque porta pharetra. Dolor velit vel, accumsan leo urna ultrices purus quis. Facilisis pellentesque pretium nunc ultricies fusce nisi, nibh. Facilisis elit nunc, enim nunc amet</h9>
                                
                            </div>
                        </div>
                    </center>
                        
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <center><div class="blog-block ">
                            <img src="images/banner/tanaman/6.png" alt="" class="img-fluid">
                            <div class="blog-text">
                            <h8>Sirih Belanda</h8><br>
                            <h9>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam est vel nisl, feugiat tristique quis elit risus semper. Sed orci eu dignissim sit sit lectus eget habitasse ornare. Leo, amet justo consectetur consectetur scelerisque ullamcorper nibh turpis commodo. Pellentesque nulla tellus amet in sem. Pellentesque sit sollicitudin ultrices leo. Odio est, vestibulum, neque porta pharetra. Dolor velit vel, accumsan leo urna ultrices purus quis. Facilisis pellentesque pretium nunc ultricies fusce nisi, nibh. Facilisis elit nunc, enim nunc amet</h9>
                            </div>
                        </div>
                    </center>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <center><div class="blog-block ">
                            <img src="images/banner/tanaman/7.png" alt="" class="img-fluid">
                            <div class="blog-text">
                            <h8>Sirih Belanda</h8><br>
                            <h9>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam est vel nisl, feugiat tristique quis elit risus semper. Sed orci eu dignissim sit sit lectus eget habitasse ornare. Leo, amet justo consectetur consectetur scelerisque ullamcorper nibh turpis commodo. Pellentesque nulla tellus amet in sem. Pellentesque sit sollicitudin ultrices leo. Odio est, vestibulum, neque porta pharetra. Dolor velit vel, accumsan leo urna ultrices purus quis. Facilisis pellentesque pretium nunc ultricies fusce nisi, nibh. Facilisis elit nunc, enim nunc amet</h9>
                            </div>
                        </div>
                    </center>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <center><div class="blog-block ">
                            <img src="images/banner/tanaman/8.png" alt="" class="img-fluid">
                            <div class="blog-text">
                            <h8>Sirih Belanda</h8><br>
                            <h9>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam est vel nisl, feugiat tristique quis elit risus semper. Sed orci eu dignissim sit sit lectus eget habitasse ornare. Leo, amet justo consectetur consectetur scelerisque ullamcorper nibh turpis commodo. Pellentesque nulla tellus amet in sem. Pellentesque sit sollicitudin ultrices leo. Odio est, vestibulum, neque porta pharetra. Dolor velit vel, accumsan leo urna ultrices purus quis. Facilisis pellentesque pretium nunc ultricies fusce nisi, nibh. Facilisis elit nunc, enim nunc amet</h9>
                            </div>
                        </div>
                    </center>
                    </div>

                </div>
            </div>
            
        </section>
        <!--  SERVICE AREA END  -->

        <!--  FOOTER AREA START  -->
        <section id="footer" class="section-padding">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-3 col-sm-8 col-md-8">
                        <div class="footer-widget footer-link">
                            <img src="images/logo2.png" alt="" class="img-fluid b-logo">
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