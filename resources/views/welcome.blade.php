<!doctype html>
<html lang="en">
  <head>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Welcome to Al-Quran App</title>
    <style>
      body {
        background: #f3f6f9;
        font-family: 'Poppins', sans-serif;
        color: #2c3e50;
      }
      .hero {
        background-image: url(/assets/images/alquran.png);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height:100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        text-align: center;
        overflow: hidden; /* Untuk menjaga konten agar tidak keluar dari area hero */
      }
      img {
        width: 200px;
        height: 170px;
        opacity: 0;
        animation: fadeInUp 1s ease forwards;
        animation-delay: 0.5s;
      }
      .hero h1 {
        font-family: 'Dancing Script', cursive;
        font-size: 3.5rem;
        margin-bottom: 20px;
        padding-top: 30px;
        color: white;
        opacity: 0;
        animation: fadeInUp 1s ease forwards;
        animation-delay: 1s;
      }
      .hero p {
        font-size: 1.2rem;
        color: white;
        opacity: 0;
        animation: fadeInUp 1s ease forwards;
        animation-delay: 1.5s;
      }
      .btn-custom {
        background-color: blue;
        border: none;
        padding: 10px 20px;
        font-size: 1.1rem;
        color: white;
        border-radius: 30px;
        margin-top: 20px;
        margin-right: 10px;
        opacity: 0;
        animation: fadeInUp 1s ease forwards;
        animation-delay: 2s;

        
      }
      .btn-custom:hover {
        background-color:pink;
      }
      .btn-outline-custom {
        background-color:blue;
        padding: 10px 20px;
        font-size: 1.1rem;
        color: white;
        border-radius: 30px;
        margin-top: 20px;
        opacity: 0;
        animation: fadeInUp 1s ease forwards;
        animation-delay: 2.5s;
        will-change: transform;
      }
      .btn-outline-custom:hover {
        background-color: pink;
        color: white;
        transform:translateY(-3px);
      }

      /* Keyframes untuk animasi */
      @keyframes fadeInUp {
        from {
          opacity: 0;
          transform: translateY(30px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      /* Media query untuk perangkat mobile */
      @media (max-width: 576px) {
        .hero h1 {
          font-size: 2rem;
        }
      }
    </style>
  </head>
  <body>
    <!-- Hero Section -->
    <div class="hero">
      <div class="container">
        <h1>Selamat Datang di Aplikasi Al-Quran</h1>
        <p>"Sesungguhnya Al-Quran adalah cahaya dan petunjuk bagi kehidupan."</p>
        <a href="/register" class="btn btn-custom">Register</a>
        <a href="/login" class="btn btn-outline-custom">Login</a>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq4xvBB8RWpR2xczR0Yj3zDtw2Q3C7zXbP6LJudyPwr2I" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGtmlJSCqH8MR9fKkVu79K5l5tq4g6B/ep6Yq1iJgGFF9fR5O7uwA8w6V2" crossorigin="anonymous"></script>
  </body>
</html>
