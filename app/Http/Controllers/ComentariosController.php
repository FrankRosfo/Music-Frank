<?php

namespace App\Http\Controllers;

use App\Models\Comentarios;

class ComentariosController extends Controller
{
    /**
     * Mostrar API
     * @return view api
     */
    public function api(){
        $comentarios = comentarios::all();
        $coments = comentarios::count();
        return view('api',['comentarios' => $comentarios,'coments' => $coments]);
    }
}
