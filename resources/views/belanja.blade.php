<<<<<<< HEAD
@extends('layouts.coretanaman')

@section('title', 'Belanja')
@section('contents')
<!--MAIN BANNER AREA START -->
<section id="about" class="bg-halbelanja">
    <div class="about3-bg-img d-none d-lg-block d-md-block"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-sm-12 col-md-8">
                <div class="about-content">
                    <h3 class="text-white"><strong> Sekop</strong></h3>
                    <h6 class="text-white">Sekop merupakan peralatan taman yang fungsi utamanya adalah untuk menggali tanah. Sekop taman juga bisa berfungsi untuk membantu kamu memindahkan tanaman dari satu tempat ke tempat lainnya. Sekop taman sangat populer bukan hanya di kalangan tukang taman namun juga tukang lanskap dan petani. Kegunaan sekop memang banyak dan sangat vital karenanya alat yang satu ini menjadi alat utama pada saat berkebun.</h6>
                    <br>
                    <h3 class="text-white">IDR.10.000</h3>
                    <a href="#" class="btn2 btn-white btn-circled ">Masukkan keranjang</a><a href="#" class="btn btn-white btn-circled">beli sekarang</a>
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
            <div class="col-lg-4 col-sm-6 col-md-4">
                <div class="blog-block ">
                    <div class="blog-text3 bg-dark">
                        <h3>Kaktus</h3>


                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-4">
                <div class="blog-block ">
                    <div class="blog-text4 btn-circled bg-dark">
                        <h3 class="text-left">Cemara</h3>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-4">
                <div class="blog-block ">
                    <div class="blog-text5 btn-circled bg-dark">
                        <h3>Palem</h3>

                    </div>
=======
@extends('layouts.core2')
@section('title', 'Media Tanam')
@section('belanja', 'active')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/belanja.css') }}">
</head>
@section('contents')

<body>
    <h2 class="judul1">Garnesia | Belanja</h2>
    <h4 class="judul2">Tanaman Hias Oxalis</h4>
    <div class="contain">
        <div class="contain2">
            <div class="row gy-2">
                <div class="col md-6">
                    <img src="/images/image 38.png" alt="" width="520px" height="auto">
                </div>
                <div class="col md-6">
                    <h4 class="tulis1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam est vel nisl, feugiat tristique quis elit risus semper. Sed orci eu</h4>
                    <p class="tulis2">IDR 10.000 <span class="tab"></span> 651</p>
                    <!-- <h5 class="tulis2">IDR 10.000</h5>
                    <h5 class="tulis3">651</h5> -->
                        <a class="navbar-brand active" style="margin-left: 20%; "  href="#">Masukan Keranjang</a>
                        <a class="navbar-brand active" href="#">Beli Sekarang</a>
>>>>>>> 8de2ef270f8465522e9784962b2889dd0ec19b42
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
</section>
<!--  BLOG AREA END  -->
<!--  SERVICE AREA START  -->
<section id="blog" class="bg-main">
    <div class="container">

        <div class="row">
            @foreach($item as $key => $value)
            <div class="col-lg-4 ">
                <div class="bg-halbelanja2">
                    <center>
                        <div class="blog-block ">
                            <img src="images/banner/belanja/{{$value ['picture']}}" alt="" class="gambar img-fluid">
                            <div class="blog-text">
                                <h4>{{$value ['item_name']}}</h4>
                                <h5 class="text-white">{{$value ['price']}}</h5><br>
                                
                                <form method="post" action="{{url('tambahkeranjang/'. $value['id'])}}">
                                @csrf
                                <button type="submit" class="btn3 btn-white btn-circled ">Masukkan keranjang</button>
                                </form>
                                <a href="#" class="btn4 btn-white btn-circled">beli sekarang</a>
                            </div>
                        </div>
                    </center>
                </div>


            </div>
            @endforeach

        </div>
    </div>

</section>
<!--  SERVICE AREA END  -->
@endsection
=======
</body>
>>>>>>> 8de2ef270f8465522e9784962b2889dd0ec19b42
