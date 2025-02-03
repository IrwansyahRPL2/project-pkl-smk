<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookmarks extends Model
{
    use HasFactory;

    protected $fillable = [
        'target_id',
        'surah_id',
        'last_ayah',
    ];
}
