<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ManagerController extends Controller
{
    // Menampilkan daftar pengguna dengan role 2 (manager)
    public function index()
    {
        $managers = User::where('role', 2)->get();
        return view('admin.manager', ['managers' => $managers]);
    }

    // Mempromosikan user dengan role 3 menjadi role 2 (manager)
    public function promoteToManager($id)
    {
        $user = User::findOrFail($id);

        if ($user->role == 3) {
            $user->role = 2;
            $user->save();

            return redirect()->back()->with('success', 'Pengguna berhasil dipromosikan menjadi Manager.');
        }

        return redirect()->back()->with('error', 'Pengguna ini bukan user biasa.');
    }

    // Membatalkan promosi user dengan role 2 menjadi role 3 (user biasa)
    public function cancelPromotion($id)
    {
        $user = User::findOrFail($id);

        if ($user->role == 2) {
            $user->role = 3;
            $user->save();

            return redirect()->back()->with('success', 'Promosi pengguna dibatalkan, kembali menjadi User.');
        }

        return redirect()->back()->with('error', 'Pengguna ini bukan Manager.');
    }

    // Menghapus user dengan role 2 (manager)
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        // Cek jika user memiliki role 2 (manager)
        if ($user->role == 2) {
            $user->delete();

            return redirect()->back()->with('success', 'Akun Manager berhasil dihapus.');
        }

        return redirect()->back()->with('error', 'Pengguna ini bukan Manager atau sudah dihapus.');
    }
}
