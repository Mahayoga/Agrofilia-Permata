<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlokModel extends Model {
    use HasFactory;
    protected $table = 'detail_blok';
    protected $primaryKey = 'id_detail_blok';
    protected $fillable = [
        'nama_blok',
        'kondisi_blok',
        'status_blok',
        'fase_tanaman',
        'id_kebun'
    ];
}