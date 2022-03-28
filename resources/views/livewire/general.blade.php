<div class="row">
    <div class="col-lg-7">
        <div class="figure">
            <img class="img-responsive" src="{{ $music['Imagen'] }}{{ $music['Extension'] }}" alt="" />
        </div>
        <div class="album-details">
            <audio src="{{ $music['URL'] }}" controls="controls" type="audio/mpeg" preload="preload"></audio>
            <h2>{{ $music['Nombre'] }} </h2>
            <h5>{{ $music['Artista'] }}</h5>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="card example-1 scrollbar-deep-purple bordered-deep-purple thin">
            <div class="card-body">
                @foreach($canciones as $cancion)
                <div class="song-info">
                    <a wire:click="play('{{ $cancion['id_cancion'] }}')" class="btn btn-lg btn-theme" id="BtnNombre"><h4>{{ $cancion['Nombre'] }}</h4></a>
                    <p><strong>Artista</strong>: {{ $cancion['Artista'] }} &nbsp;|&nbsp; <strong>Album</strong>: {{ $cancion['Album'] }} &nbsp;|&nbsp; <strong>Duración</strong>: {{ $cancion['Duracion'] }}</p>
                </div>
                <br>
                @endforeach
            </div>
        </div>
    </div>
</div>
