<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndividualBlockSensor extends Model {
    use HasFactory;
    protected $table = 'tb_sensor';
    protected $primaryKey = 'id';
    protected $fillable = [];
}