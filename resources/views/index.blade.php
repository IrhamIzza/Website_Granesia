@extends('layouts.core')

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
                        <h4 class="section-title">Inspirasi Perkebunan Rumah</h4>
                        <div class="line"></div>
                        <p>Layanan yang kami Berikan </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6 col-md-4">
                    <div class="blog-block ">
                        <img src="images/blog/blog-1.jpg" alt="" class="img-fluid">
                        <div class="blog-text">
                            <h6 class="author-name"><span>Tips and tricks</span>john Doe</h6>
                            <a href="blog-single.html" class="h5 my-2 d-inline-block">
                               Menyediakan Informasi Tanaman Hias
                            </a>
                            <p>If you want to grow your content quality and standard you should foolow these tips properly voluptatibus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-4">
                    <div class="blog-block ">
                        <img src="images/blog/blog-2.jpg" alt="" class="img-fluid">
                        <div class="blog-text">
                            <h6 class="author-name"><span>Branding</span>john Doe</h6>
                            <a href="blog-single.html" class="h5 my-2 d-inline-block">
                                Mengajari Berbudidaya Tanaman
                            </a>
                            <p>Brand your site at top, boost your audioance corporis facilis animi voluptas alias ex saepe quo voluptatibus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-4">
                    <div class="blog-block ">
                        <img src="images/blog/blog-3.jpg" alt="" class="img-fluid">
                        <div class="blog-text">
                            <h6 class="author-name"><span>Marketing</span>john Doe</h6>
                            <a href="blog-single.html" class="h5 my-2 d-inline-block">
                                Memberitahu Media Tanaman
                            </a>
                            <p>Becomeing a best sale marketer is not easy but not impossible too.Need to follow up some proper guidance and strategy .</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-4">
                    <div class="blog-block ">
                        <img src="images/blog/blog-3.jpg" alt="" class="img-fluid">
                        <div class="blog-text">
                            <h6 class="author-name"><span>Marketing</span>john Doe</h6>
                            <a href="blog-single.html" class="h5 my-2 d-inline-block">
                                Menjual Kebutuhan Alat Kebun
                            </a>
                            <p>Becomeing a best sale marketer is not easy but not impossible too.Need to follow up some proper guidance and strategy .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  BLOG AREA END  -->
<!--  SERVICE AREA START  -->
<section id="about" class="bg-info">
    <div class="about-bg-img d-none d-lg-block d-md-block"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-sm-12 col-md-8">
                <div class="about-content">
                    <h5 class="subtitle">Tentang Kami</h5>
                    <h3>We are making beautiful <br>design layout for your business</h3>
                    <p>We craft beautiful website layout from scratch.You need not to worry about site design and other technial issue.We provide these attractive service as a bonus.Let's have atalk together for your next project.</p>

                    <ul class="about-list">
                        <li><i class="icofont icofont-check-circled"></i> Responsive site</li>

                        <li>
                            <i class="icofont icofont-check-circled"> </i> Latest bootstrap 4
                        </li>

                        <li>
                            <i class="icofont icofont-check-circled"> </i> Modern and clean design
                        </li>
                        <li>
                            <i class="icofont icofont-check-circled"> </i> Working contact form
                        </li>
                        <li>
                            <i class="icofont icofont-check-circled"> </i> Premium services and support
                        </li>
                        <li>
                            <i class="icofont icofont-check-circled"></i> Cross browser compatiabilty
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  SERVICE AREA END  -->
@endsection