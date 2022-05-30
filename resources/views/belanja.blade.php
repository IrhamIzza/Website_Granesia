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
                </div>
            </div>
        </div>
    </div>
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
