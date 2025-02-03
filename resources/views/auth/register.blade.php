<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">
      <div class="register-container">
        <h1 class="register-title fade-in">Register</h1>
        <form method="POST" action="{{ route('register') }}" class="register-form">
            @csrf
            <div class="input-container fade-in">
                <x-input-label for="name" :value="('Name')" class="label" />
                <x-text-input id="name" class="input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="error" />
            </div>
            <div class="input-container fade-in">
                <x-input-label for="email" :value="('Email')" class="label" />
                <x-text-input id="email" class="input" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="error" />
            </div>
            <div class="input-container fade-in">
                <x-input-label for="password" :value="('Password')" class="label" />
                <x-text-input id="password" class="input" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="error" />
            </div>
            <div class="input-container fade-in">
                <x-input-label for="password_confirmation" :value="('Confirm Password')" class="label" />
                <x-text-input id="password_confirmation" class="input" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="error" />
            </div>
            <div class="input-container fade-in">
                <x-input-label for="kelamin" :value="('Kelamin')" class="label" />
                <div class="radio-group">
                    <label class="radio-label">
                        <x-text-input id="kelamin_l" class="radio-input" type="radio" name="kelamin" value="Laki-laki" :checked="old('kelamin') === 'Laki-laki'" required />
                        <span class="radio-text">{{ __('Laki-laki') }}</span>
                    </label>
                    <label class="radio-label">
                        <x-text-input id="kelamin_p" class="radio-input" type="radio" name="kelamin" value="Perempuan" :checked="old('kelamin') === 'Perempuan'" required />
                        <span class="radio-text">{{ __('Perempuan') }}</span>
                    </label>
                </div>
                <x-input-error :messages="$errors->get('kelamin')" class="error" />
            </div>
            <div class="input-container fade-in">
                <x-input-label for="phone" :value="('Phone')" class="label" />
                <x-text-input id="phone" class="input" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
                <x-input-error :messages="$errors->get('phone')" class="error" />
            </div>
            <div class="input-container fade-in">
                <x-input-label for="address" :value="('Address')" class="label" />
                <x-text-input id="address" class="input" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
                <x-input-error :messages="$errors->get('address')" class="error" />
            </div>
            <div class="input-container fade-in">
                <x-input-label for="bio" :value="('Bio')" class="label" />
                <x-text-input id="bio" class="input" type="text" name="bio" :value="old('bio')" required autofocus autocomplete="bio" />
                <x-input-error :messages="$errors->get('bio')" class="error" />
            </div>
            <div class="input-container fade-in">
                <x-primary-button class="register-button">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
            <div class="actions fade-in">
                <a class="forgot-password" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>
        </form>
      </div>
    </div>

    <style>
        body {
            background-image: url(/assets/images/alquran.png);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover; /* Memastikan gambar mengisi seluruh area */
            height: 100%;
            margin: 0; /* Menghapus margin default */
            padding:20px;
        }

        .register-container {
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.2); /* Sedikit lebih transparan */
            padding: 1rem; /* Padding */
            border-radius: 12px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            max-width: 370px; /* Ukuran maksimum untuk desktop */
            width: 100%; /* Ukuran untuk perangkat kecil */
            box-sizing: border-box; /* Menghitung padding dalam ukuran total */
            position: relative; /* Memastikan kontainer tidak keluar dari batas */
            z-index: 1; /* Memastikan kontainer tetap di atas background */
        }

        .register-title {
            font-size: 1.5rem; /* Ukuran font judul */
            color: #fff;
            margin-bottom: 1rem; /* Jarak bawah judul */
            font-weight: 600;
            text-align: center;
        }

        .input-container {
            margin-bottom: 0.5rem; /* Jarak antar input */
        }

        .input {
            width: 100%;
            padding: 10px; /* Padding input */
            border: none;
            height:30px;
            background: rgba(255, 255, 255, 0.3); /* Lebih transparan */
            color: #fff;
            border-radius: 8px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.2);
            font-size: 1rem; /* Ukuran font input */
            transition: all 0.3s ease;
        }

        .input:focus {
            background: rgba(255, 255, 255, 0.4);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            outline: none;
        }

        .label {
            color: #fff;
            margin-bottom: 0.25rem; /* Jarak bawah label */
            font-size: 0.875rem; /* Ukuran font label */
            text-align: left; /* Rata kiri */
        }

        .error {
            color: red; /* Warna pesan error */
            font-size: 0.875rem; /* Ukuran font error */
        }

        .radio-group {
            display: flex;
            justify-content: space-between; /* Mengatur jarak antara radio button */
            margin-top: 0.25rem; /* Jarak atas untuk grup radio */
        }

        .radio-label {
            color: #fff; /* Warna label radio */
            font-size: 0.875rem; /* Ukuran font label radio */
        }

        .radio-input {
            margin-right: 0.5rem;
            accent-color: #4CAF50; /* Warna accent untuk radio button */
        }

        .register-button {
            background-color: transparent;
            color: #fff;
            padding: 10px; /* Padding tombol */
            font-size: 1rem; /* Ukuran font tombol */
            border-radius: 8px;
            border: 2px solid #fff;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
            width: 100%;
            display: inline-block;
        }

        .register-button:hover {
            background-color: green;
            color: black; /* Warna teks saat hover */
        }

        .actions {
            display: flex;
            justify-content: center; /* Rata tengah untuk tautan */
            margin-top: 0.5rem; /* Jarak atas untuk tautan */
        }

        .forgot-password {
            color: #fff; /* Warna tautan */
            text-decoration: none; /* Tanpa garis bawah */
            font-size: 0.875rem; /* Ukuran font tautan */
        }

        .forgot-password:hover {
            text-decoration: underline; /* Garis bawah saat hover */
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

        .fade-in:nth-child(1) { animation-delay: 0s; }
        .fade-in:nth-child(2) { animation-delay: 0.5s; }
        .fade-in:nth-child(3) { animation-delay: 1s; }
        .fade-in:nth-child(4) { animation-delay: 1.5s; }
        .fade-in:nth-child(5) { animation-delay: 2s; }
        .fade-in:nth-child(6) { animation-delay: 2.5s; }
        .fade-in:nth-child(7) { animation-delay: 3s; }
        .fade-in:nth-child(8) { animation-delay: 3.5s; }
        .fade-in:nth-child(9) { animation-delay: 4s; }
        .fade-in:nth-child(10) { animation-delay: 4.5s; }
        .fade-in:nth-child(11) { animation-delay: 5s; }
    </style>
  </body>
</html>