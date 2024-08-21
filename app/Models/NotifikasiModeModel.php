<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotifikasiModeModel extends Model {
    use HasFactory;
    protected $table = 'notifikasi_mode';
    protected $primaryKey = 'id_notifikasi';
    protected $fillable = [];
}