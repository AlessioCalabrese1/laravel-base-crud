@extends('layouts.main')

@section('title', 'Add')

@section('main-content')
<form action="{{ route('comics.update', $comic->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="comics-title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="comics-title" value="{{ $comic->title }}">
    </div>
    <div class="mb-3">
        <label for="comics-description" class="form-label">Description</label>
        <input type="text" class="form-control" name="description" id="comics-description" value="{{ $comic->description }}">
    </div>
    <div class="mb-3">
        <label for="comics-thumb" class="form-label">Thumbnail</label>
        <input type="text" class="form-control" name="thumb" id="comics-thumb" value="{{ $comic->thumb }}">
    </div>
    <div class="mb-3">
        <label for="comics-price" class="form-label">Price</label>
        <input type="text" class="form-control" name="price" id="comics-price" value="{{ $comic->price }}">
    </div>
    <div class="mb-3">
        <label for="comics-series" class="form-label">Series</label>
        <input type="text" class="form-control" name="series" id="comics-series" value="{{ $comic->series }}">
    </div>
    <div class="mb-3">
        <label for="comics-sale-date" class="form-label">Sale Date</label>
        <input type="text" class="form-control" name="sale_date" id="comics-sale-date" value="{{ $comic->date }}">
    </div>
    <div class="mb-3">
        <label for="comics-type" class="form-label">Type</label>
        <input type="text" class="form-control" name="type" id="comics-type" value="{{ $comic->type }}">
    </div>

    <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-success">Modifica</button>
        <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Cancella</button>
        </form>
    </div>
</form>
@endsection