@extends('layouts.core2')
@section('title', 'Cart')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/belanja.css') }}">
</head>
@section('belanja', 'active')
</body>

<h2 class="judul1">Garnesia | Keranjang</h2>
<div class="container-fluid">
    <div class="row gy-5">
        @foreach($cart as $key => $value)
        <div class="col-md-12 ">
            <div class="bg-halbelanja2">
                <img src="images/banner/belanja/{{$value ->picture}}" alt="" class="gambar">
                <div class="blog-text">
                    <h4 class="item">{{$value -> item_name}}</h4>
                    <h5 class="harga">IDR {{$value ->price}}</h5><br>
                    <p class="total">x{{$value -> quantity}}</p>
                    <button href="/order" class="btn_beli">Beli Sekarang</button>
                </div>
            </div>


        </div>
        @endforeach

    </div>
</div>

<body>