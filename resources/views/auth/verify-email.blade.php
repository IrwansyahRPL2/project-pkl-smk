<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            padding: 0;
            margin: 0;
            background-image: url(/assets/images/alquran.png);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .content {
            background-color: transparent;
            backdrop-filter: blur(30px);
            border: 2px solid white;
            justify-content: center;
            height: 400px;
            width: 90%; /* Ubah dari ukuran tetap ke persentase */
            max-width: 500px; /* Tetap memberikan batas maksimal */
            padding: 10px;
            border-radius: 20px;
            display: flex; /* Menambahkan flex untuk menata isi */
            flex-direction: column; /* Mengatur kolom */
            align-items: center; /* Meratakan konten secara horizontal */
        }

        .kalimat {
            color: white;
            text-align: center; /* Rata tengah teks */
        }

        .tombol {
            margin-top:20px;
            padding: 10px 20px; /* Padding untuk tombol */
            width: 300px;
            background: transparent;
            border-radius: 20px;
            border: 1px solid white;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s; /* Transisi efek */
            margin: 10px 0; /* Jarak antara tombol */

        }

        .status {
            color: green;
            text-align:center;
        }

        .tombol:hover {
            background-color: rgba(255, 255, 255, 0.3); /* Warna latar belakang saat hover */
            color: black;
        }

        .tombol:active {
            background-color: green;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="kalimat">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="status">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div>
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit" class="tombol">
                    {{ __('Resend Verification Email') }}
                </button>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="tombol">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
</body>
</html>
