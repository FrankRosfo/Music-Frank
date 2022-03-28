<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Comentarios;

class Coment extends Component
{
    public $x = 0;
    public $message;
    public $coments;
    public $comentarios = [];

    /**
     * Mostrar Comentarios
     * @redirect route api
     */
    public function comentar(){

        $text = $this->message;
        $comentarios = new Comentarios();
        $comentarios->Nombre = auth()->user()->name;
        $comentarios->Comentario = $text;
        $comentarios->Fecha = date('Y-m-d H:i:s');
        $comentarios->id_usuario = auth()->user()->id;
        $comentarios->save();
        
        $this->comentarios = comentarios::all();
        $this->coments = comentarios::count();

    }

    /**
     * funcion de comentarios
     * @return view comentarios
     */
    public function render()
    {
        if($this->x < 1){
            $this->x++;
            $this->comentarios = comentarios::all();
            $this->coments = comentarios::count();
        }
        if($this->x > 0){
            return view('livewire.coment');
        }
    }
}
