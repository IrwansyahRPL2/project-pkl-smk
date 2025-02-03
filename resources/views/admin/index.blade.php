<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<x-app-layout>
    <x-slot name="header" class='bg-black'>
        <h2 class="font-semibold text-xl text-orange-500 leading-tight">
            {{ __('Daftar Pengguna User') }}
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
                <script>
                    alert("{{ session('error') }}");
                </script>
            </div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>Profile</th> <!-- Kolom Gambar -->
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Kelamin</th>
                    <th>No HP</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                    <tr>
                        <td data-label="Profil">
                            <img src="{{ $user->kelamin == 'Laki-laki' ? asset('assets/images/laki-laki1.jpg') : asset('assets/images/perempuan1.jpg') }}" 
                                 alt="{{ $user->kelamin == 'Laki-laki' ? 'Laki-laki' : 'Perempuan' }}" 
                                 width="100" height="100" style="border-radius: 50%; border: 2px solid black; object-fit: cover; object-position: top; aspect-ratio: 1 / 1;   margin: 10px auto; display: block;">
                        </td>

                        <td data-label="Nama">{{ $user->name }}</td>
                        <td data-label="Email">{{ $user->email }}</td>
                        <td data-label="Kelamin">{{ $user->kelamin }}</td>
                        <td data-label="Nomor Hanphone">{{ $user->phone }}</td>
                        <td data-label="Alamat">{{ $user->address }}</td>
                        <td data-label="Aksi">
                            @if($user->role == 3)
                                <form action="{{ route('admin.users.promote', $user->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="editBtn" onclick="return confirm('apakah kamu yakin untuk menjadikan {{ $user->name }} Menjadi Manager?')">
                                        <i class="fas fa-edit"></i> <!-- Ikon untuk Edit -->
                                    </button>
                                </form>
                            @endif
                            
                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="deleteBtn" onclick="return confirm('Yakin ingin menghapus akun {{ $user->name }} ?')">
                                    <i class="fas fa-trash"></i> <!-- Ikon untuk Hapus -->
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="tidak">Tidak ada data pengguna.</td>
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
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow-x: auto;
            height: 100vh;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 10px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
        }

        th, td, tr {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            transition: background-color 0.3s ease;
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
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        table tbody tr:hover {
            background-color: #e0e7ff;
            transform: scale(1.02);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        button {
            padding: 10px 14px;
            margin: 4px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        /* Ukuran ikon lebih besar untuk tombol */
        button i {
            font-size: 20px; /* Ukuran ikon */
            width: 20px; /* Lebar ikon */
            height: 20px; /* Tinggi ikon */
            vertical-align: middle; /* Agar ikon sejajar di tengah dengan teks */
        }

        .editBtn {
            background-color: #38b2ac;
            color: white;
        }

        .editBtn:hover {
            background-color: #2c7a7b;
            transform: translateY(-3px);
        }

        .deleteBtn {
            background-color: #e53e3e;
            color: white;
        }

        .deleteBtn:hover {
            background-color: #c53030;
            transform: translateY(-3px);
        }

        @media (max-width: 768px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }

            thead tr {
                display: none;
            }

            td {
                position: relative;
                padding-left: 50%;
                text-align: left;
                background-color: #f9f9f9;
                font-size: 14px;
                border-bottom: 1px solid #ddd;
            }

            td:before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 45%;
                padding-left: 10px;
                font-weight: bold;
                background-color: transparent;
                color: #4a5568;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            table tbody tr {
                margin-bottom: 15px;
            }

            button {
                font-size: 12px;
            }
        }
    </style>
</x-app-layout>

