<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KebunModel extends Model {
    use HasFactory;
    protected $table = 'kebun';
    protected $primaryKey = 'id_kebun';
    protected $fillable = [
        'nama_kebun',
        'nama_daerah',
        'lokasi_kebun',
        'status_kebun',
    ];
}