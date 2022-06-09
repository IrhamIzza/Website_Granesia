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
    </div>
<br><br>

</body>


</html>