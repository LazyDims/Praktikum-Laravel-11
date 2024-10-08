<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pribadi extends Model
{
    use HasFactory;

    protected $fillable = ['nik','nama_mhs','tempat_lahir','tanggal_lahir'];
    protected $primaryKey= 'id_pribadi';
}
