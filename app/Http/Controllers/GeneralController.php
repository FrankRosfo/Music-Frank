<?php

namespace App\Http\Controllers;

use App\Models\Canciones;
use Illuminate\Support\Facades\Storage;

class GeneralController extends Controller
{
    /**
     * Raiz
     * return redirect()->route('inicio');
     */
    public function raiz(){
        return redirect()->route('inicio');
    }

    /**
     * inicio
     * muestra todas las canciones y una de ellas al azar
     */
    public function inicio(){
        $i = rand(1,56);
        $canciones = Canciones::all();
        $music = Canciones::find($i);
        return view('index',['canciones' => $canciones, 'music' => $music]);
    }
}
