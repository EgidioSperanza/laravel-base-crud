<div class="container position-relative">
  <div class="current-series align-middle"><h3>Current Series</h3></div>
  <div class="row py-5">
    @foreach ($comic as $comic)
    <div  class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 my-2">
      <div class="card bg-transparent">
        <div class="preview">
          <img class="img-fluid" src="{{$comic['thumb']}}" alt="Cover by{{$comic['series']}}" />
        </div>
        <div class="card-body">
          <a href="{{ route('comics.show', $comic->id) }}" class="more-comics card-link mt-3">Dettagli</a>
          <p class="card-title mt-3">{{$comic['series']}}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@if (isset($comic->id))
  <a href="{{ route('comics.create', $comic->id) }}" class="more-comics">Aggiungi</a>
@else
<a href="{{ route('comics.create', 1) }}" class="more-comics">Aggiungi</a>
  @endif