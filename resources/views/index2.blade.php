@extends('layouts.coreindex')
@section('index', 'active')
@section('title', 'Index')
@section('contents')
<!--MAIN BANNER AREA START -->
<div class="banner-area banner-3">
    <div class="overlay dark-overlay"></div>
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                        <div class="banner-content content-padding">
                            <h5 class="subtitle"></h5>
                            <h1 class="banner-title">SELAMAT DATANG DI GARNESIA</h1>
                            <p>Dapatkan Inspirasimu disini</p>

                            <a href="#" class="btn btn-white btn-circled">lets start</a>
                        </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--MAIN HEADER AREA END -->

<!--  BLOG AREA START  -->
    <section id="blog" class="section-padding bg-main">
    <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 m-auto">
                    <div class="section-heading">
                        <h3 class="section-title">Inspirasi Perkebunan Rumah</h3>
                        <div class="line"></div>
                        <h5>Layanan yang kami Berikan </h5>
                        </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6 col-md-4">
                    <div class="blog-block ">
                        <img src="images/blog/tanaman1.png" alt="" class="img-fluid">
                        <div class="blog-text">
                            <a href="blog-single.html" class="h6 my-2 d-inline-block">
                               <center>Menyediakan Informasi Tanaman Hias</center> 
                            </a>
                        </div>
                        </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-4">
                    <div class="blog-block ">
                        <img src="images/blog/tanaman2.png" alt="" class="img-fluid">
                        <div class="blog-text">
                            <a href="blog-single.html" class="h6 my-2 d-inline-block">
                                <center>Mengajari Berbudidaya Tanaman</center> 
                                </a>
                        </div>
                        </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-4">
                    <div class="blog-block ">
                        <img src="images/blog/tanaman3.png" alt="" class="img-fluid">
                        <div class="blog-text">
                            <a href="blog-single.html" class="h6 my-2 d-inline-block">
                               <center>Memberitahu  Media Tanaman</center>
                            </a>
                            
                        </div>
                        </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-4">
                    <div class="blog-block ">
                        <img src="images/blog/tanaman4.png" alt="" class="img-fluid">
                        <div class="blog-text">
                            <a href="blog-single.html" class="h6 my-2 d-inline-block">
                                <center>Menjual Kebutuhan Alat Kebun</center> 
                            </a>
                            </div>
                            </div>
                </div>
            </div>
        </div>
    </section>
    <!--  BLOG AREA END  -->
<!--  SERVICE AREA START  -->
<section id="about" class="bg-new">
    <div class="about-bg-img d-none d-lg-block d-md-block"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-sm-12 col-md-8">
                <div class="about-content">
                    <h3 class="text-white">Tentang kami</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget elit ornare nunc dis tempor, pharetra dolor, scelerisque. Amet, urna parturient enim diam in ut nam sodales vel. A, interdum sed auctor est, urna. Magna nibh turpis luctus erat sit auctor eget. Nunc et id quisque at in risus rhoncus.
                        <br><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget elit ornare nunc dis tempor, pharetra dolor, scelerisque. Amet, urna parturient enim diam in ut nam sodales vel. A, interdum sed auctor est, urna. Magna nibh turpis luctus erat sit auctor eget. Nunc et id quisque at in risus rhoncus.
                    </p>
                    </div>
            </div>
        </div>
    </div>
</section>
<!--  SERVICE AREA END  -->
@endsection 