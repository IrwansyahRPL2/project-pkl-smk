<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>

    <form method="POST" action="{{ route('password.email') }}" class="content">
        @csrf
        <div class="kalimat">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="label"/>
            <br>
            <x-text-input id="email" class="email" type="email" name="email" :value="old('email')" required autofocus />
        </div>

        <div class="tombol">
            <x-primary-button class="btn">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
         <!-- Session Status -->
        <x-auth-session-status class="status" :status="session('status')" />
        <!--status error -->
        <x-input-error :messages="$errors->get('email')" class="error" />
    </form>
    <div>

  </body>
</html>
<style>
    body{
        padding:0px;
        margin:0px;
        background-image: url(/assets/images/alquran.png);
        background-size:cover;
        background-position:center;
        background-repeat:no-repeat;
        height:100vh;
        display:flex;
        justify-content:center;
        align-items:center;
        
    }
    .content{
        background-color:transparent;
        backdrop-filter:blur(30px);
        border:2px solid white;
        justify-content:center;
        height:300px;
        width: 90%; /* Ubah dari ukuran tetap ke persentase */
        max-width: 500px; /* Tetap memberikan batas maksimal */
        padding:10px;
        border-radius:20px;
    }
    .kalimat{
        color:white;
        text-align:center;
    }
    .email{
        border:2px solid white;
        border-radius:10px;
        padding:5px;
        width: 100%; /* Ubah width agar mengisi penuh parent */
        background-color:transparent;
        color:white;
    }
    .email:focus{
        outline:none;
    }
    .label{
        color:white;
        padding-top:10px;
    }
    .tombol{
        text-align:center;
        padding-top:15px;
    }
    .btn{
        border-radius:20px;
        background-color:transparent;
    }
    .btn:hover{
        background-color:blue;
    }
    .btn:active{
        background-color:red;
    }
    .status{
        padding-top:10px;
        color:blue;
        text-align:center;
    }
    .error{
        color:blue;
        text-align:center;
        padding:3px;
        list-style-type:none;
    }

</style>

