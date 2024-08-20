<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlokModel extends Model {
    use HasFactory;
    protected $table = 'Detail_Blok';
    protected $primaryKey = 'id_detail_blok';
    protected $fillable = [];
}