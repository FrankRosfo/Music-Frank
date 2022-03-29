<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Canciones;
use SebastianBergmann\Environment\Console;

class General extends Component
{
    public $x = 0;
    public $canciones = [];
    public $music;

    public function play($id)
    {
        $this->canciones = Canciones::all();
        $this->music = Canciones::find($id);
    }

    /**
     * Funcion que se ejecuta al iniciar el componente
     *
     */
    public function render()
    {
        if($this->x < 1){
            $this->x++;
            $id = rand(1,56);
            $this->canciones = Canciones::all();
            $this->music = Canciones::find($id);
            return view('livewire.general');
        }
        if($this->x > 0){
            return view('livewire.general');
        }
    }
}
