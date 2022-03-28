<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Correos extends Model
{
    use HasFactory;
    protected $table = "correos";
    protected $primaryKey = "id_correo";
    protected $fillable = ['Mensaje', 'id_usuario'];
}
