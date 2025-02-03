<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<x-app-layout>
    <x-slot name="header" class='bg-black'>
        <h2 class="font-semibold text-xl text-orange-500 leading-tight">
            {{ __('Daftar Pengguna Manager') }}
        </h2>
    </x-slot>

  

  <div class="content">

        <!-- Menampilkan pesan sukses atau error -->
        @if(session('success'))
            <div>
            <script>
                alert("{{ session('success') }}");
             </script>
            </div>
        @endif

        @if(session('error'))
            <div>
                {{ session('error') }}
            </div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>Profile</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Kelamin</th>
                    <th>No HP</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($managers as $manager)
                    <tr>
                        <td data-label="Profil">
                        <img src="{{ $manager->kelamin == 'Laki-laki' ? asset('assets/images/ustad.jpg') : asset('assets/images/ustazah.jpg') }}" 
                        alt="{{ $manager->kelamin == 'Laki-laki' ? 'Laki-laki' : 'Perempuan' }}" 
                        width="100" height="100" style="border-radius: 50%; border: 2px solid black; object-fit: cover; object-position: top; aspect-ratio: 1 / 1;  margin: 10px auto; display: block;">
                        </td>
                        <td  data-label="Nama">{{ $manager->name }}</td>
                        <td  data-label="Email">{{ $manager->email }}</td>
                        <td  data-label="Jenis Kelamin">{{$manager->kelamin}}</td>
                        <td  data-label="Nomor Hanphone">{{ $manager->phone }}</td>
                        <td  data-label="Alamat">{{ $manager->address }}</td>
                        <td  data-label="aksi">
                                     <!-- Batalkan Manager -->
                     <form action="{{ route('admin.managers.cancel', $manager->id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="editbtn" onclick="return confirm('Apakah Kamu Yakin Menjadikan {{$manager->name}} Sebagai User?')">
                                <i class="fas fa-edit"></i> <!-- Ikon untuk Edit -->
                                </button>
                            </form>
                            
                            <!-- Hapus Akun -->
                            <form action="{{ route('admin.managers.destroy', $manager->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="deletebtn" onclick="return confirm('Yakin ingin menghapus akun ini?')">
                                <i class="fas fa-trash"></i> <!-- Ikon untuk Hapus -->
                                </button>

                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="tidak">Tidak ada data pengguna.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <style>

    .content {
    padding: 16px;
    background-color: #f4f4f9;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Tambahkan bayangan */
    overflow-x: auto;
    height:100vh
}

table {
    width: 100%;
    border-collapse: collapse;
    border: 10px solid #ddd;
    border-radius: 8px;
    overflow: hidden; /* Agar sudut-sudut tetap bulat */
    display:table;
}

th, td,tr {
    padding: 12px;
    text-align: center;
    border-bottom: 1px solid #ddd;
    transition: background-color 0.3s ease; /* Efek transisi */
}

table th {
    background-color: green;
    color: white;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 0.05em;
}


table tbody tr {
    background-color: white;
    transition: transform 0.2s ease, box-shadow 0.2s ease; /* Animasi hover */
}

table tbody tr:hover {
    background-color: #e0e7ff;
    transform: scale(1.02); /* Zoom in sedikit saat hover */
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); /* Bayangan saat hover */
}

button {
    padding: 10px 14px;
    margin: 4px;
    border: none;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease; /* Tambah transisi dan animasi */
}


button i {
    font-size: 20px; /* Ukuran ikon */
    width: 20px; /* Lebar ikon */
    height: 20px; /* Tinggi ikon */
    vertical-align: middle; /* Agar ikon sejajar di tengah dengan teks */
}

 .editbtn {
    background-color: #38b2ac;
    color: white;
}

.editbtn:hover {
    background-color: #2c7a7b;
    transform: translateY(-3px);
}

.deletebtn {
    background-color: #e53e3e;
    color: white;
}

.deletebtn:hover {
    background-color: #c53030;
    transform: translateY(-3px);
}

/* Responsivitas tabel untuk perangkat mobile */
@media (max-width: 768px) {
    .table, thead, tbody, th, td, tr {
        display: block;
    }

    thead tr {
        display: none; /* Sembunyikan header pada layar kecil */
    }

    td {
        position: relative;
        padding-left: 50%;
        text-align: left;
        background-color: #f9f9f9;
        font-size: 14px;
        border-bottom: 1px solid #ddd; /* Border untuk sel */
    }

    td:before {
        content: attr(data-label);
        position: absolute;
        left: 0;
        width: 45%;
        padding-left: 10px;
        font-weight: bold;
        background-color: transparent; /* Menghilangkan background */
        color: #4a5568;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis; /* Menambahkan elipsis jika teks terlalu panjang */
    }

    .table tbody tr {
        margin-bottom: 15px;
    }

    button {
        font-size: 12px;
    }
}
</style>

</x-app-layout>
