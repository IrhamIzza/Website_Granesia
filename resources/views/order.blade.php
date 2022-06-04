@extends('layouts.core2')
@section('title', 'Cart')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/belanja.css') }}">
</head>
@section('belanja', 'active')
<h2 class="judul1">Garnesia | Belanja | Checkout</h2>
<!-- <p class="fw-bold fs-5" style="margin-left: 5%;">Alamat Pengirim</p> -->
<div class="line"></div>
<div class="row gy-5">
    @foreach($cart as $key => $value)
    <div class="col-md-12 ">
        <div class="bg-halbelanja2">
            <img src="images/banner/belanja/{{$value ->picture}}" alt="" class="gambar">
            <div class="blog-text">
                <h4 class="item">{{$value -> item_name}}</h4>
                <h5 class="harga">IDR {{$value ->price}}</h5><br>
                <p class="total">X{{$value -> quantity}}</p>
                <button href="/order" class="btn_beli">Beli Sekarang</button>
            </div>
        </div>
        
    </div>
    @endforeach
<!-- <div class="contain"> -->
    <form method="post" action="{{url('payment/'. $user ->id)}}">
        @csrf
        <p class="fw-bold">{{$user -> name}} </p>
        <p class="fw-bold">Alamat: <input type="text" name="address" value="{{$user -> address}}"></p>
        <p class="fw-bold">Nomor hp: <input type="text" name="number_telp" value="{{$user -> number_telp}}"> </p>
        <p class="fw-bold">Tanggal: {{$time}}</p>
        <!-- <p class="fw-bold">Total: {{$total}}</p>
            <p class="fw-bold">Note:<input type="text" name="note"> </p> -->
    </form>
    <!-- <div class="line" style="margin-left: 0%;"></div>
    <div class="container-fluid">
        @foreach($cart as $key => $value)
        <div class="col-md-12 ">
            <div class="bg-halbelanja2">
                <img src="images/banner/belanja/{{$value ->picture}}" alt="" class="gambar">
                <div class="blog-text">
                    <h4 class="item">{{$value -> item_name}}</h4>
                    <h5 class="harga">IDR {{$value ->price}}</h5><br>
                    <p class="quantity">X{{$value -> quantity}}</p>
                </div>
            </div>

        </div>
        @endforeach

        <h5 class="fw-bold" style="margin-top: 5%;">Sub Total : {{$total}}</h5>
        <div class="line" style="margin-left: 0%;"></div>
        <div class="line" style="margin-left: 0%;"></div>
        <button type="submit" class="fw-bold fs-5 btn_beli">Beli</button>
    </div> -->
<!-- </div> -->

</div>
</div>