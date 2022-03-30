<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use wapmorgan\Mp3Info\Mp3Info;
use Illuminate\Support\Facades\Storage;
use App\Models\Canciones;

class MusicaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $musics = [];
        $musics = Storage::files();

        foreach($musics as $music){
            $i = rand(1, 9);
            $datos = new Mp3Info(storage_path('app/public/musica/'.$music), true);
            $cancion = new Canciones();
            $cancion->Nombre = $datos->tags1['song'].PHP_EOL;
            $cancion->Artista = $datos->tags1['artist'].PHP_EOL;
            $cancion->Album = $datos->tags1['album'].PHP_EOL;
            $cancion->Duracion = floor($datos->duration / 60).' min '.floor($datos->duration % 60).' sec'.PHP_EOL;
            $cancion->Url = storage_path('app/public/musica/'.$music);
            $cancion->Imagen = storage_path('app/public/imagenes/image'.$i);
            $cancion->Extension = ".jpg";
            $cancion->save();
        }
    }
}
