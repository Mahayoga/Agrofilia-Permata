<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotifikasiSensor extends Model {
    use HasFactory;
    protected $table = 'notifikasi_sensor';
    protected $primaryKey = 'id_notifikasi';
    protected $fillable = [];
}