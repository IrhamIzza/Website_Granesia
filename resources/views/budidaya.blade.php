@extends('layouts.core2')
@section('budidaya', 'active')
@section('title', 'Budidaya')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/budidaya.css') }}" >
    </head>
@section('contents')

<body class="contianer-fluid">
    <div class="row g-0">
        <div class="col-md-12 mystyle">
                <img class="house" src="/images/budidaya/cultivate 2.png" alt="">
                <h1 class="garnesia">FLORIKULTUR</h1>
                <h6 class="Dapatkan">Budidaya Tanaman Hias</h6>
                <button class="btn_pelajari">Pelajari lebih lanjut</button>
                <h1></h1>
                <img class="img1" src="/images/budidaya/image 28.png" alt="">
                <img class="img2" src="/images/budidaya/image 29.png" alt="">
                <img class="img3" src="/images/budidaya/image 30.png" alt="">       
        </div>
    </div>
    <h6 class="teknik">Teknik Budidaya</h6>
    <div class="row gy-5">
    @foreach($bud as $bud)
        <div class="col-md-6">
            <img class="gmb_mor" src="{{  asset('/'.$bud->image) }}" alt="">
        </div>
        <div class="col-md-6">
            <h1 class="tls_mor" style="font-size : 30px">{{$bud->judul}}</h1>
            <h4 class="tls_mor">{{$bud->diskripsi}}</h4>
            <a href="/budidaya/{{$bud->slug}}" class="btn_more">More</a>
        </div>
    @endforeach 
        <div class="col-md-6">
            <img class="gmb_mor" src="/images/budidaya/image 24.png" alt="">
        </div>
        <div class="col-md-6">
            <h1 class="tls_mor" style="font-size : 30px">Sirih Belanda</h1>
            <h4 class="tls_mor">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam est vel nisl, 
                feugiat tristique quis elit risus semper. Sed orci eu dignissim sit sit lectus eget 
                habitasse ornare. Leo, amet justo consectetur consectetur scelerisque ullamcorper nibh 
                turpis commodo. Pellentesque nulla tellus amet in sem. Pellentesque sit sollicitudin 
                ultrices leo. Odio est, vestibulum, neque porta pharetra. Dolor velit vel, accumsan 
                leo urna ultrices purus quis. Facilisis pellentesque pretium nunc ultricies fusce nisi, 
                nibh. Facilisis elit nunc, enim nunc amet.</h4>
            <button class="btn_more">More</button>
        </div>

        <div class="col-md-6">
            <img class="gmb_mor" src="/images/budidaya/image 25.png" alt="">
        </div>
        <div class="col-md-6">
            <h1 class="tls_mor" style="font-size : 30px">Oxalis</h1>
            <h4 class="tls_mor">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam est vel nisl, 
                feugiat tristique quis elit risus semper. Sed orci eu dignissim sit sit lectus eget 
                habitasse ornare. Leo, amet justo consectetur consectetur scelerisque ullamcorper nibh 
                turpis commodo. Pellentesque nulla tellus amet in sem. Pellentesque sit sollicitudin 
                ultrices leo. Odio est, vestibulum, neque porta pharetra. Dolor velit vel, accumsan 
                leo urna ultrices purus quis. Facilisis pellentesque pretium nunc ultricies fusce nisi, 
                nibh. Facilisis elit nunc, enim nunc amet.</h4>
            <button class="btn_more">More</button>
        </div>

        <div class="col-md-6 ">
            <img class="gmb_mor" src="/images/budidaya/image 26.png" alt="">
        </div>
        <div class="col-md-6" >
            <h1 class="tls_mor" style="font-size : 30px">Kuping Gajah</h1>
            <h4 class="tls_mor">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam est vel nisl, 
                feugiat tristique quis elit risus semper. Sed orci eu dignissim sit sit lectus eget 
                habitasse ornare. Leo, amet justo consectetur consectetur scelerisque ullamcorper nibh 
                turpis commodo. Pellentesque nulla tellus amet in sem. Pellentesque sit sollicitudin 
                ultrices leo. Odio est, vestibulum, neque porta pharetra. Dolor velit vel, accumsan 
                leo urna ultrices purus quis. Facilisis pellentesque pretium nunc ultricies fusce nisi, 
                nibh. Facilisis elit nunc, enim nunc amet.</h4>
            <button class="btn_more">More</button>
        </div>
        <p style="padding-bottom: 2%;"></p>
        </div>
    </div>

</body>


</html>