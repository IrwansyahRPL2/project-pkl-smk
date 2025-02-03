<x-app-layout>
    <x-slot name="header" class='bg-black'>
        <h2 class="font-semibold text-xl text-orange-500 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>
    <div class="content">
        <div class="dashboard-items"> <!-- Menambahkan margin di sini -->
            <a href="{{ route('admin.users') }}" class="dashboard-item">
                <img src="{{ asset('assets/images/user1.jpeg') }}" alt="Daftar Pengguna" class="dashboard-image">
                <span>Daftar User</span>
                <p>Jumlah User: {{$jmlUser}}</p>
            </a>
            <a href="{{ route('admin.managers') }}" class="dashboard-item">
                <img src="{{ asset('assets/images/manager.jpeg') }}" alt="Daftar Manager" class="dashboard-image">
                <span>Daftar Manager</span>
                <p>Jumlah Manager: {{$jmlManager}}</p>
            </a>
            <a href="{{ route('surah') }}" class="dashboard-item">
                <img src="{{ asset('assets/images/surah.jpeg') }}" alt="Surah" class="dashboard-image">
                <span>Daftar Surah</span>
                <P>Jumlah Surah: {{$jmlSurah}}</P>
            </a>
        </div>
    </div>

    <style>
        /* Background styling */
        .content {
            display:flex;
            padding: 40px 20px;
            background-image: url('/assets/images/alquran.png');
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            min-height: 100vh; /* Membuat konten memenuhi layar */
            justify-content:center;
        }

        /* Flexbox styling */
        .dashboard-items {
            display: flex;
            justify-content: center; /* Menengahkan item card secara horizontal */
            align-items: center;
            gap: 30px;
            white-space: nowrap; /* Mencegah item wrap ke bawah */
        }

        /* Card styling */
        .dashboard-item {
            display: inline-flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.15); /* Transparansi pada kartu */
            backdrop-filter: blur(10px); /* Efek blur */
            border: 2px solid rgba(255, 255, 255, 0.3); /* Border transparan */
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            padding: 20px;
            text-decoration: none;
            color: white;
            overflow: hidden;
            min-width: 200px; /* Ukuran minimal untuk item dashboard */
            margin-bottom: 20px;
            flex-grow: 0; /* Tidak membiarkan item tumbuh lebih dari lebar yang ditentukan */
        }

        .dashboard-item:hover {
            transform: scale(1.1);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);
        }

        .dashboard-image {
            width: 120px;
            height: 120px;
            object-fit: cover;
            margin-bottom: 15px;
            border-radius: 100%;
            border: 3px solid rgba(255, 255, 255, 0.8); /* Menambahkan border pada gambar */
            transition: border 0.3s ease;
        }

        /* Text styling */
        .dashboard-item span {
            display: block;
            font-size: 20px;
            font-weight: bold;
            color: white;
            text-transform: uppercase;
        }

        /* Hover effects on the image */
        .dashboard-item:hover .dashboard-image {
            border: 3px solid #ff9f43; /* Ganti warna border gambar saat hover */
        }

        /* Media queries untuk mobile */
        @media (max-width: 768px) {
            .dashboard-items {
                flex-direction: column; /* Membuat card memanjang ke bawah pada mobile */
            }

            .dashboard-item {
                width: 100%; /* Card akan memenuhi lebar layar di mobile */
                max-width: 300px; /* Batas maksimal lebar card di mobile */
            }
        }

        /* Media query untuk desktop agar tetap satu baris */
        @media (min-width: 769px) {
            .dashboard-items {
                flex-wrap: nowrap; /* Menjaga agar tetap satu baris di desktop */
            }

            .dashboard-item {
                min-width: 250px; /* Lebar minimal item dashboard di desktop */
            }
        }
    </style>
</x-app-layout>
