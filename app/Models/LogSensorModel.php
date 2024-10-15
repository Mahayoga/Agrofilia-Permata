<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogSensorModel extends Model
{
    use HasFactory;
    protected $table = 'log_sensor';
    protected $primaryKey = 'id_log_sensor';
    protected $fillable = ['id_sensor', 'keterangan_sensor', 'nilai_sensor'];
}
