<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Halaman @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- 
    Stone Template
    http://www.templatemo.com/preview/templatemo_452_stone
    -->
    <!-- Bootstrap Stylesheet -->


    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/normalize.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-style.css') }}" rel="stylesheet">

    <script src="{{ asset('js/vendor/modernizr-2.6.2.min.js') }}" defer></script>

</head>

<body class="loading">
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <div class="site-header">

        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default navbar-static-top">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#main-menu">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index.html">Stone</a>
                    </div>
                    <div class="collapse navbar-collapse" id="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/home">Login</a></li>
                            <li class="nav-item"><a href="/index">Home</a></li>
                            <li>
                                <!-- dropdown -->
                                <div class="btn-group mt-3">
                                    <button type="button" class="btn btn-primary"><a href="/products">Products</a></button>
                                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="sr-only"> </span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="products/Mclaren">Mclaren</a><br>
                                        <a class="dropdown-item" href="products/Ferarri">Ferarri</a><br>
                                        <a class="dropdown-item" href="products/Audi">Audi</a>
                                    </div>
                                </div>
                                <!-- dropdown -->
                            </li>
                            <li><a href="/news">News</a></li>

                            <li>
                                <!-- dropdown -->
                                <div class="btn-group mt-3">
                                    <button type="button" class="btn btn-primary"><a href="/Program">Program</a></button>
                                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="sr-only"> </span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="/Program/Mengemudi">Mengemudi</a><br>
                                        <a class="dropdown-item" href="/Program/Balapan">Balapan</a>
                                    </div>
                                </div>
                                <!-- dropdown -->
                            </li>

                            <li>
                            <!-- dropdown -->
                            <div class="btn-group mt-4">
                                <button type="button" class="btn btn-primary"><a href="/Contact">Contact</a></button>
                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only"> </span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/messages">lihat message</a><br>
                                </div>
                            </div>
                            <!-- dropdown -->
                            </li>
                     
                            <li><a href="/about">About</a></li>
                            <li>
                            <!-- dropdown -->
                            <div class="btn-group mt-4">
                                <button type="button" class="btn btn-primary"><a href="/#">Edit</a></button>
                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only"> </span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/profile">EDIT AKUN</a><br>
                                    <a class="dropdown-item" href="/edit">EDIT CONTENT</a><br>
                                    <a class="dropdown-item" href="/data-gambar">EDIT gambar</a><br>
                                </div>
                            </div>
                            <!-- dropdown -->
                            </li>


                            <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li>
                                    @csrf

                        </ul>
                    </div>

                </nav>
            </div>
        </div>
    </div>



    @yield('contents')



    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="social">
                        <li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
                        <li class="facebook"><a href="#" class="fa fa-facebook"></a></li>
                        <li class="rss"><a href="#" class="fa fa-rss"></a></li>
                        <li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
                    </ul>
                    <p>Copyright &copy; 2084 Company Name</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/vendor/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>