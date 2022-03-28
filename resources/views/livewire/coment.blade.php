<div>
    <div class="col-lg-8">
        <div class="sidebar-item comments">
            <div class="sidebar-heading" id="coments">
                <br>
                <h2>{{ $coments }} comentarios</h2>
            </div>
            <div class="content">
                <ul>
                @foreach($comentarios as $comentario)
                    <li>
                        <div class="author-thumb">
                            <img src="assets/images/Usuario.jpg" alt="">
                        </div>
                        <div class="right-content">
                            <h4>{{ $comentario['Nombre'] }}<span>{{ $comentario['Fecha'] }}</span></h4>
                            <p>{{ $comentario['Comentario'] }}</p>
                        </div>
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="sidebar-item submit-comment">
            <div class="sidebar-heading">
                <br><br>
                <h2>Escribe tu Comentario</h2>
            </div>
            <div class="content">
                <form wire:submit.prevent="comentar">
                    @csrf
                    <div class="api">
                        <div class="col-lg-12">
                            <fieldset>
                                <input type="text" wire:model="message" placeholder="Comentario" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="comentar" class="main-button">Comentar</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>