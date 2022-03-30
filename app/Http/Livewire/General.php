<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Canciones;
use SebastianBergmann\Environment\Console;

class General extends Component
{
    public $x = 0;

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
            $i = rand(1,56);
            $canciones = Canciones::all();
            $music = Canciones::find($i);
            return view('livewire.general',['canciones' => $canciones, 'music' => $music]);
        }
        if($this->x > 0){
            return view('livewire.general');
        }
    }
}
