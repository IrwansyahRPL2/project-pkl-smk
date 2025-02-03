<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surahs extends Model
{
    use HasFactory;

    protected $fillable = [
        'arabic',
        'latin',
        'transliteration',
        'translation',
        'num_ayah',
        'page',
        'location'
    ];
}
