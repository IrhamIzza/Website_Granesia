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
                    <h4 class="tulis1">{!! $product->product_detail !!}</h4>
                    <p class="tulis2">IDR {{ number_format($product->original_price) }}
                    <div class="product_details_title">
                        <span style="color:#000000;">Quantity:</span>
                        <input type="number" class="quantity" id="quantity" name="quantity" value="1"
                               style="width: 50px; margin-right: 10px; margin-bottom:5%">

                    </div>
                    </p>
                        <a class="navbar-brand active" style="margin-left: 20%;"  href="#">Masukan Keranjang</a>
                        <a class="navbar-brand active" href="{{route('basket')}}">Beli Sekarang</a>
                </div>
            </div>
        </div>
    </div>

    
    <div class="container single_product_container">
        <div class="row">
            <div class="col">
                <!-- Breadcrumbs -->
                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="/">Home</a></li>
                        @foreach($bcrumb as $bc)
                            <li><a href="/category/{{$bc->slug}}"><i class="fa fa-angle-right"
                                                                     aria-hidden="true"></i>{{ $bc->category_name }}</a>
                            </li>
                        @endforeach
                        <li class="active"><a href="{{route('product', $product->slug)}}"><i class="fa fa-angle-right"
                                                                                             aria-hidden="true"></i>{{ $product->product_name }}
                            </a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-7">
                <div class="single_product_pics">
                    <div class="row">
                        <div class="col-lg-3 thumbnails_col order-lg-1 order-2">
                            <div class="single_product_thumbnails">
                                <ul>

                                    @foreach($product->images as $image)
                                        <li class="active">
                                            <img src="{!! asset("uploads/thumb_".$image->name)!!}" alt=""
                                                 data-image="{!! asset("uploads/".$image->name)!!}">
                                        </li>
                                    @endforeach


                                </ul>
                            </div>


                        </div>

                        <div class="col-lg-9 image_col order-lg-2 order-1">
                            <div class="single_product_image">
                                @foreach($product->images as $image)
                                    <div class="single_product_image_background"
                                         style="background-image:url('{!! asset("uploads/thumb_".$image->name)!!}')"></div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="product_details">
                    <div class="product_details_title">
                        <h2>{{ $product->product_name }}</h2>
                        <p>{!! $product->product_detail !!}</p>
                    </div>

                    <div class="original_price">{{ number_format($product->original_price) }} ₺</div>
                    <div class="product_price">{{ number_format($product->product_price) }} ₺</div>

                    <div class="product_details_title">
                        <span>Quantity:</span>
                        <input type="number" class="quantity" id="quantity" name="quantity" value="1"
                               style="width: 50px; margin-right: 10px;">

                    </div>

                    <div class="red_button" style="margin-top: 30px;">
                        <a href="{{ route('basket.create', ['id' => $product->id]) }}">add to cart</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection


@section('js')


            <script>

            $('.red_button').find('a').click(function (event) {
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