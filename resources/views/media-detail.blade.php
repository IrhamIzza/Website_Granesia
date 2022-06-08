@extends('layouts.coreindex')
@section('media', 'active')
<title>{{$med->judul}}</title>
@section('contents')
        <!--  BLOG AREA START  -->
        <section id="blog" class="section-padding bg-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 m-auto">
                        <div class="section-heading">
                            <h3 class="section-title mt-5"><strong>{{$med->judul}}</strong></h3>
                            <img src="{{  asset('/'.$med->image) }}" alt="" class="img-fluid" width="85%" height="100px">
                            
                            <div class="section-padding text-left">
                                <h7>{{$med->text1}}</h7>
                                <br><br>
                                <h7>{{$med->text2}}</h7><br><br>
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