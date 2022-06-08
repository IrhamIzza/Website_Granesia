@extends('layouts/main')
@section('belanja', 'active')
@section('content')

    <!-- Slider -->


    <section id="about" class="bg-halbelanja mt-5">
    <div class="about3-bg-img d-none d-lg-block d-md-block "></div>
    <div class="container ">
        <div class="row ">
            <div class="col-lg-7 col-sm-12 col-md-8  ">
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
    <!-- New Arrivals -->

    <div class="new_arrivals">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title new_arrivals_title ">
                        <h2>Category</h2>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col text-center">
                    <div class="new_arrivals_sorting">
                        <ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
                            <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked"
                                data-filter="*">all
                            </li>
                            @foreach($categoryMenu as $menu)
                                <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center mr-2 ml-3"
                                    data-filter=".{{ $menu->id }}">{{ $menu->category_name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col">
                    <div class="product-grid"
                         data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

                        
                        @foreach($products as $product)
                            <a href="/product/{{$product->slug}}">
                                <div class="product-item {{$product->category_id}} ">
                                <div class="product discount product_filter">
                                    <div class="product_image">
                                        {!! $product->thumbs !!}
                                    </div>

                                    <div class="product_info">
                                        <h6 class="product_name"><a
                                                    href="/product/{{$product->slug}}">{{ $product->product_name }}</a>
                                        </h6>

                                        <div class="product_price">IDR {{ number_format($product->product_price) }} <span>
                                                </span></div>

                                        <input type="number" class="quantity" id="quantity" name="quantity" value="1"
                                               style="width: 50px; margin-right: 10px;">
                                    </div>
                                </div>
                                <div class="add_to_cart_button red_button"><a
                                            href="{{ route('basket.create', ['id' => $product->id]) }}">add to cart</a>
                                </div>
                            </div>
                            </a>
                        @endforeach

                    </div>
                </div>
            </div>

            <!-- /////////////////// -->
        </div>
    </div>

    <div class="container">
</div>


@endsection


@section('js')


    <script>

        $('.add_to_cart_button').find('a').click(function (event) {
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

@endsection
