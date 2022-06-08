@extends('layouts.main')
<head>
    
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/single_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/single_responsive.css') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/belanja.css') }}">
</head>

@section('content')
<h2 class="judul1">Garnesia | Belanja</h2>
@foreach($bcrumb as $bc)
<h4 class="judul2">
        <a  class="judul2" href="/category/{{$bc->slug}}">{{ $bc->category_name }}</a>
    </h4>
@endforeach
    <div class="contain">
        <div class="contain2">
            <div class="row gy-2">
                <div class="col md-6">
                    @foreach($product->images as $image)
                        <div class="single_product_image_background"
                            style="background-image:url('{!! asset("uploads/thumb_".$image->name)!!}')"></div>
                    @endforeach
                </div>
                <div class="col md-6">
                    <h2>{{ $product->product_name }}</h2>
                    <h4 class="tulis1">{!! $product->product_detail !!}</h4>
                    <p class="tulis2">IDR {{ number_format($product->original_price) }}
                    <div class="product_details_title">
                        <span style="color:#000000;">Quantity:</span>
                        <input type="number" class="quantity" id="quantity" name="quantity" value="1"
                               style="width: 50px; margin-right: 10px;">

                    </div>

                    <div class="red_buttona" style="margin-top: 30px; position: initial;">
                    <a class="navbar-brand active" style="margin-left: 20%;"  href="{{ route('basket.create', ['id' => $product->id]) }}">Masukan Keranjang</a>       
                </div>
                        <!-- <a class="navbar-brand active" style="margin-left: 20%;"  href="{{ route('basket.create', ['id' => $product->id]) }}">Masukan Keranjang</a>        -->
                            <a style="margin-left:70%; margin-top:-8%;" class="navbar-brand active" href="{{route('basket')}}">Beli Sekarang</a>
                        
                </div>
            </div>
        </div>
    </div>


@endsection


@section('js')


            <script>

            $('.red_buttona').find('a').click(function (event) {
                event.preventDefault();
                var quantity = $(this).parent().prev().find('input').val();
                $.ajax({
                    type: "POST",
                    url: $(this).attr('href'),
                    data: {quantity: quantity}
                    , success: function (data) {
                        console.log(data);
                        $('#checkout_items').html(data.cartCount);
                    }
                });
                return false; //for good measure
            });
            </script>


    <script src="{{ asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/single_custom.js') }}"></script>
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
@endsection