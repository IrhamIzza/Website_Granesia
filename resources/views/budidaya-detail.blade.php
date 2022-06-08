@extends('layouts.coreindex')
@section('budidaya', 'active')
<title>Budidaya {{$bud->judul}}</title>
@section('contents')
        <!--  BLOG AREA START  -->
        <section id="blog" class="section-padding bg-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 m-auto">
                        <div class="section-heading">
                            <h3 class="section-title mt-5"><strong>{{$bud->judul}}</strong></h3>
                            <img src="{{  asset('/'.$bud->image) }}" alt="" class="img-fluid" width="85%" height="100px">
                            
                            <div class="section-padding text-left">
                                <h7>{{$bud->diskripsi}}</h7>
                                <br><br>
                                <h7>Berikut cara budidaya {{$bud->judul}}</h7><br><br>
                                <h7 style="font-weight: bold;">1. {{$bud->text1}}</h7><br>
                                <h7>{{$bud->text1b}}</h7><br><br>
                                <h7 style="font-weight: bold;">2. {{$bud->text2}}</h7><br>
                                <h7>{{$bud->text2b}}</h7><br><br>
                                <h7 style="font-weight: bold;">3. {{$bud->text3}}</h7><br>
                                <h7>{{$bud->text3b}}</h7><br><br>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <!--  BLOG AREA END  -->
        </a>
@endsection