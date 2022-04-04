@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <a class="nav-link" aria-current="page" href="{{url('admin')}}">Halaman Admin</a>
                <a class="nav-link" href="{{url('penjual')}}">Halaman Penjual</a>
                <a class="nav-link" href="{{url('pembeli')}}">Halaman Pembeli</a>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
