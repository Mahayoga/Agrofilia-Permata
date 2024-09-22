<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MusimModel extends Model
{
    use HasFactory;
    protected $table = 'musim';
    protected $primaryKey = 'id';
    protected $fillable = [
        'kondisi_musim'
    ];
}
