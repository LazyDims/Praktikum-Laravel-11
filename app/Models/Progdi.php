<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progdi extends Model
{
    use HasFactory;

    protected $fillable = ['nm_fakultas', 'nm_progdi'];
    protected $primaryKey= 'id_progdi';
}
