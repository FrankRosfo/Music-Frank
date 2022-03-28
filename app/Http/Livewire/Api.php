<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class Api extends Component
{
    public $x = 0;

    /**
     * Funcion de api Nacion.
     *
     * @return Probabilidad de Nacion
     */
    public function submit(Request $datos){

        $Nombre = $datos->name;

        // -- consumir api de Nacion
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://api.nationalize.io?name='.$Nombre);
        $datos = json_decode($response->getBody()->getContents(), true);

        // -- Recorrer elementos
        $resultados = [];

        foreach ($datos['country'] as $nacion) {
            $resultados[] = [
                'id' => $nacion['country_id'],
                'probabilidad' => $nacion['probability']
            ];
        }
        $this->resultados = $resultados;
    }

    /**
     * Funcion de api.
     *
     * @return view api
     */
    public function render()
    {
        if($this->x < 1){
            $this->x++;
            $resultados = [];

            $resultados[] = [
                'id' => "",
                'probabilidad' => ""
            ];
            return view('livewire.api',['resultados' => $resultados]);
        }
        if($this->x > 0){
            return view('livewire.api');
        }
    }
}
