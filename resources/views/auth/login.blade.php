<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* Tambahkan gaya yang sudah ada */
        /* ... */
        body {
            background-image: url(/assets/images/alquran.png);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover; /* Memastikan gambar mengisi seluruh area */
            height: 100%;
            margin: 0; /* Menghapus margin default */
        }

        .login-container {
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.2); /* Sedikit lebih transparan */
            border-radius: 20px;
            opacity: 0; /* Untuk animasi */
            animation: fadeIn 1s forwards ease-in-out; /* Menambahkan animasi */
            padding: 1rem; /* Padding */
            max-width: 400px; /* Ukuran maksimum untuk desktop */
            width: 90%; /* Ukuran untuk perangkat kecil */
        }

        .login-title {
            font-size: 1.5rem; /* Ukuran font judul */
            color: #fff;
            margin-bottom: 1rem; /* Jarak bawah judul */
            font-weight: 600;
            text-align: center;
            opacity: 0; /* Untuk animasi */
            animation: fadeInUp 0.5s forwards ease-in-out; /* Menambahkan animasi */
            animation-delay: 0.1s; /* Delay animasi */
        }

        .mb-3 {
            opacity: 0; /* Untuk animasi */
            transform: translateY(20px);
            animation: fadeInUp 0.5s forwards ease-in-out; /* Menambahkan animasi */
        }


        .input-field {
            background-color: transparent;
            border: 1px solid white;
            border-radius: 10px;
            color: white;
        }

        .input-field:focus {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            outline: none;
        }

        .login-button {
            background-color: transparent;
            color: white;
            border-radius: 10px;
            border: 1px solid white;
        }

        .login-button:hover {
            background-color: green;
            color: black;
        }

        .forgot-password {
            color: blue;
        }

        .forgot-password:hover {
            color: red;
        }

        .label {
            color: white; /* Warna label */
        }

        /* Animasi */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: slideUp 0.5s forwards; /* Menambahkan animasi */
        }

        @keyframes slideUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Atur delay untuk elemen-elemen */
        .fade-in:nth-child(1) { animation-delay: 0s; }
        .fade-in:nth-child(2) { animation-delay: 0.4s; }
        .fade-in:nth-child(3) { animation-delay: 0.8s; }
        .fade-in:nth-child(4) { animation-delay: 1.2s; }
        .fade-in:nth-child(5) { animation-delay: 1.6s; }
        .fade-in:nth-child(6) { animation-delay: 2s; }
        .fade-in:nth-child(7) { animation-delay: 2.4s; }
        .fade-in:nth-child(8) { animation-delay: 2.8s; }
    </style>
</head>
<body>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" /> 

    <div class="container-fluid d-flex justify-content-center align-items-center vh-100" style="background-image: url(/assets/images/alquran.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
        <div class="login-container col-10 col-sm-8 col-md-6 col-lg-4 p-4 shadow fade-in">
            <h1 class="login-title text-center mb-4 fade-in" style="color:white;">Login</h1>
            
            <form method="POST" action="{{ route('login') }}" class="login-form">
                @csrf

                <!-- Email Address -->
                <div class="mb-3 fade-in">
                    <x-input-label for="email" :value="__('Email')" class="label" />
                    <x-text-input id="email" class="form-control input-field" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="text-danger" />
                </div>

                <!-- Password -->
                <div class="mb-3 fade-in">
                    <x-input-label for="password" :value="__('Password')" class="label"/>
                    <x-text-input id="password" class="form-control input-field" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="text-danger" />
                </div>

                <!-- Remember Me -->
                <div class="form-check mb-3 fade-in" style="color:white;">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    <label class="form-check-label" for="remember_me">{{ __('Remember me') }}</label>
                </div>

                <!-- Login Button -->
                <div class="mb-3 fade-in">
                    <x-primary-button class="w-100 login-button">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>

                <div class="text-center fade-in">
                    @if (Route::has('password.request'))
                        <a class="text-decoration-underline forgot-password" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>

    <!-- Optional Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-1y9v+2cBY9hHp7BeGCRn95N8C7FVv49zgtU4fiA6g3H8gNx3y2F1eYhbtZgkkFnA" crossorigin="anonymous"></script>
</body>
</html>
