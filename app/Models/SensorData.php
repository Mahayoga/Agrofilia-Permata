<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SensorData extends Model
{
    use HasFactory;

    protected $table = 'tb_sensor';
    protected $primaryKey = 'id'; // mendevinisikan primary key
    public $incrementing = true; // auto pada primaryKey incremment true
    public $timestamps = true;
    protected $fillable = [
        'updated_at',
        'kelembabantanah',
        'suhu',
        'kelembaban',
        'cahaya'
    ];
}