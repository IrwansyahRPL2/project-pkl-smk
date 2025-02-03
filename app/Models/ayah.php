<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ayah extends Model
{
    use HasFactory;


    protected $fillable = [
        'surah_id',
        'ayah',
        'page',
        'juz',
        'arabic',
        'kitabah',
        'latin',
        'translation'
    ];
}

