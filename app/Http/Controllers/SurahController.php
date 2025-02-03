<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Surahs;
use Illuminate\Support\Facades\File;


class SurahController extends Controller
{
    public function index()
    {

        $surahs = Surahs::all();
        return view('surah', compact('surahs'));
    }
}