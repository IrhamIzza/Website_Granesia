<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}" >

    <style>

    </style>
</head>

<body class="contianer-fluid">
    <div class="row g-0">
        <div class="col-md-8 mystyle">
            <div class="gambar">
                <img class="house" src="/images/farm-house 1.png" alt="">
                <h1 class="garnesia gar">Garnesia.</h1>
                <h6 class="Dapatkan dap">Dapatkan Inspirasi Kamu disini</h6>
                <!-- <img class="img-fluid" src=/images/bg.jpg alt="gambar alam">   -->
                <!-- <img class="img-fluid" src="{{ asset('images/bg.jpg') }}" alt="gambar alam">      -->
            </div>            
        </div>
        <div class="col-md-4 gx-5">
            <div class="text-center-register">
                <img class="farm" src="{{ asset('images/cyan 1.png') }}" alt="Logo farm">
                <h1 class="garnesia">Garnesia.</h1>
                <h6 class="Dapatkan">Dapatkan Inspirasi Kamu disini</h3>
            </div>
            <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-2">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                         <div class="col-md-6 offset-md-2">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-2">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-2">
                                <input id="telepon" type="telepon" class="form-control @error('telepon') is-invalid @enderror" name="telepon" placeholder="No Handphone" value="{{ old('telepon') }}" required autocomplete="telepon">
                                @error('telepon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                           <div class="col-md-6 offset-md-2">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-2">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn_reg">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>


</html>