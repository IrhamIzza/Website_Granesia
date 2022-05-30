<div class="container">

<div class="row">
    @foreach($cart as $key => $value)
    <div class="col-lg-12 ">
        <div class="bg-halbelanja2">
            <center>
                <div class="blog-block ">
                    <img src="images/banner/belanja/{{$value ->picture}}" alt="" class="gambar img-fluid">
                    <div class="blog-text">
                        <h4>{{$value -> item_name}}</h4>
                        <h5 class="text-white">{{$value ->price}}</h5><br>
                        <p>total barang:{{$value -> quantity}}</p>
                        <a href="#" class="btn4 btn-white btn-circled">beli sekarang</a>
                    </div>
                </div>
            </center>
        </div>


    </div>
    @endforeach

</div>
</div>
