<div class="card p-0" style="width: 18rem;">
  <div class="img-container">
    <a href="{{ route('comics.show', $comic->id) }}">
      <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
    </a>
  </div>

  <div class="card-body">
    <h5 class="card-title">{{ $comic->title }}</h5>
    <div class="d-flex justify-content-between">
      <a class="btn btn-success" href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
      <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Cancella</button>
    </form>
    </div>
  </div>
</div>