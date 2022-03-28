<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canciones extends Model
{
    use HasFactory;
    protected $table = "canciones";
    protected $primaryKey = "id_cancion";
    protected $fillable = ['Nombre', 'Artista', 'Album', 'Genero', 'Imagen', 'Url', 'Extension'];
}
