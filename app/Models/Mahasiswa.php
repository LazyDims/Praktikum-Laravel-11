<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = ['id_mhs','nim','id_pri','id_pro'];
    protected $primaryKey= 'id_mhs';
}
