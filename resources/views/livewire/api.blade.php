<div class="content">
  <form wire:submit.prevent="submit">
    @csrf
    <div class="api">
      <div class="col-sm-12">
        <fieldset>
          <input name="name" type="text" id="name" placeholder="Nombre" required="">
        </fieldset>
      </div>
      <div class="col-lg-12">
        <fieldset>
          <button type="submit" id="submit" class="main-button">Calcular Probabilidad</button>
        </fieldset>
      </div>
    </div>
  </form>
  <br><br>
  <div class="card example-2 scrollbar-deep-purple bordered-deep-purple thin" placeholder="Resultados">
    <div class="card-body">
      @foreach($resultados as $resultado)
      <div class="song-info">
        <h4>{{ $resultado['id'] }}</h4>
        <p><strong>Probabilidad</strong>: {{ $resultado['probabilidad'] }}% &nbsp;</p>
      </div>
      <br>
      @endforeach
    </div>
  </div>
</div>