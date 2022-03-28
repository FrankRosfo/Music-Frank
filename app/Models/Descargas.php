<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descargas extends Model
{
    use HasFactory;
    protected $table = "descargas";
    protected $primaryKey = "id_descarga";
    protected $fillable = ['id_usuario', 'id_cancion'];
}
