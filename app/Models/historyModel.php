<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historyModel extends Model
{
    use HasFactory;
    public $table = "historyKhatam";
    protected $fillable = [
        'user_id',
        'ayat_awal',
        'ayat_akhir',
        'surah_awal',
        'surah_akhir',
        'juz_awal',
        'juz_akhir',
        'created_at',
        'updated_at',
    ];

}
