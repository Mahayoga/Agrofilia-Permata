<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriModel extends Model
{
    use HasFactory;
    protected $table = 'galeri';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul_galeri',
        'deskripsi_galeri',
        'dokumentasi_kegiatan',
        'file_type'
    ];
}
