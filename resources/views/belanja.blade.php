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
                </div>
            </div>
        </div>
    </div>
</body>