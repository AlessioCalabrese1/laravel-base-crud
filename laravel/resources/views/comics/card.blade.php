<div class="card" style="width: 18rem;">
    <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
    <div class="card-body">
      <a href="{{ route('comics.show', $comic->slug) }}">
        <h5 class="card-title">{{ $comic->title }}</h5>
      </a>
      <p class="card-text">{{ $comic->description }}</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{ $comic->price }}</li>
      <li class="list-group-item">{{ $comic->series }}</li>
      <li class="list-group-item">{{ $comic->sale_date }}</li>
      <li class="list-group-item">{{ $comic->type }}</li>
    </ul>
  </div>