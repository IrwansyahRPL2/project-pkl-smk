<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Menampilkan daftar pengguna dengan role 3 (user biasa)
    public function index()
    {
        // Mengambil semua pengguna dengan role 3
        $users = User::where('role', 3)->get();
        
        // Mengirim data pengguna ke view 'admin.index'
        return view('admin.index', ['users' => $users]);
    }

    // Mempromosikan user dengan role 3 menjadi role 2 (manager)
    public function promoteToManager($id)
    {
        // Cari user berdasarkan ID
        $user = User::findOrFail($id);

        // Cek jika user memiliki role 3 (user biasa)
        if ($user->role == 3) {
            // Ubah role menjadi 2 (manager)
            $user->role = 2;
            $user->save();

            // Redirect dengan pesan sukses
            return redirect()->back()->with('success', 'Pengguna berhasil dipromosikan menjadi Manager.');
        }

        // Jika user bukan role 3, kembalikan pesan error
        return redirect()->back()->with('error', 'Pengguna ini bukan user biasa.');
    }

  

    //menghapus user
    public function destroy($id)
{
    // Cari user berdasarkan ID
    $user = User::findOrFail($id);

    // Hapus user
    $user->delete();

    // Redirect dengan pesan sukses
    return redirect()->back()->with('success', 'Pengguna berhasil dihapus.');
}

}
