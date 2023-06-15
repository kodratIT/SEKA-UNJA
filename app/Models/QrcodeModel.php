<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QrcodeModel extends Model
{
    use HasFactory;

    public $table = "qrcode";
    protected $fillable = [
        'id_admin',
        'firstQR',
        'lastQR',
        'create_at',
        'updated_at',
    ];
}
