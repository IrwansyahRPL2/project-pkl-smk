<?php

namespace App\Http\Controllers;
use App\Models\ayah;
use App\Models\Surahs;
use Illuminate\Http\Request;

class SurahAyatController extends Controller
{
    public function show(Request $req)
{
    // Mengambil ayat berdasarkan surah_id
    $ayahs = Ayah::where('surah_id', $req->id)->get();
    $surah = Surahs::where('id',$req->id)->get();

    // Mengembalikan tampilan dengan ayahs yang diambil
    return view('admin.ayah', compact('ayahs','surah'));
}

}