<?php

namespace App\Http\Controllers;

use App\Models\User; 
use Illuminate\Http\Request;
use App\Models\Surahs;
use Illuminate\Support\Facades\File;

class JumlahUserController extends Controller
{
    public function jumlah()
    {
        // Menghitung jumlah user dan manager
        $jmlUser = User::where('role', 3)->count();
        $jmlManager = User::where('role', 2)->count();
        //jumlah ayat
        $jmlSurah=Surahs::count();
        
        // dd($jmlUser);
        // Mengirim data ke view 'admin.dashboard'
        return view('admin.dashboard', compact('jmlUser', 'jmlManager','jmlSurah'));
    }
}
