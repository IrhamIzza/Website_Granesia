@extends('layouts.core2')
@section('title', 'Media Tanam')
@section('media', 'active')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
@section('contents')

<body class="contianer-fluid">
    <div class="row g-0">
        <div class="col-md-8 mystyle2">
            <h1 class="arang">ARANG</h1>
            <h5 class="salah_satu"><br> Salah satu varietas tumbuhan paling unik adalah Monstera Adansonii atau biasa dikenal juga dengan sebutan monstera topeng monyet. Adansonii merupakan tanaman merambat yang dapat tumbuh mencapai 6 meter.
                <br><br>
                Untuk perawatanya, hindari tumbuhan pada kondisi lingkungan berangin atau terlalu kering. Jenis ini juga tidak terlalu menyukai terpaan matahari langsung.
                <br><br>
                Kamu bisa menyimpan Adansonii di luar ruangan yang tertutupi kanopi. Menyemprotkan uap air juga dapat membantu daun cepat berkembang.
            </h5>
            <button class="btn_cari">Cari Tahu Sekarang</button>
        </div>
        <div class="col-md-4">
            <img class="gambar_arang" src="/images/media/raiyan-zach-p52_0Aw0Ydw-unsplash 3.png" alt="" width="550px" height="550px">
        </div>
    </div>
    <h6 class="teknik">Jenis Media Tanaman</h6>
    <div class="row gy-5">

        @foreach($med as $med)
        <div class="col-md-6">
            <img class="gmb_mor" src="{{  asset('/'.$med->image) }}" alt="">
        </div>
        <div class="col-md-6">
            <h1 class="tls_mor" style="font-size : 30px">{{$med->judul}}</h1>
            <h4 class="tls_mor">{{$med->text1}}</h4>
            <a href="/media/{{$med->judul}}" class="btn_more">More</a>
        </div>
        @endforeach
        <p style="padding-bottom: 2%;"></p>
    </div>

</body>


</html>