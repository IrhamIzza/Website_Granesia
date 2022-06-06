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

<!-- <body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif
    </div>
</body> -->

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
            <div class="text-center">
                <img class="farm" src="{{ asset('images/cyan 1.png') }}" alt="Logo farm">
                <h1 class="garnesia">Garnesia.</h1>
                <h6 class="Dapatkan">Dapatkan Inspirasi Kamu disini</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
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
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <p style="font-size : 13px" class="col-md-8 offset-md-3">Belum punya akun? <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></p>


                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button style="color:aliceblue" type="submit" class="btn_login">
                                {{ __('Masuk') }}
                            </button>

                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-3"></div>
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>


</html>