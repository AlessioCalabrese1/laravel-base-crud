@extends('layouts.main')

@section('title', 'Add')

@section('main-content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('comics.update', $comic->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="comics-title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="comics-title" value="{{ old('title', $comic->title) }}">
    </div>
    <div class="mb-3">
        <label for="comics-description" class="form-label">Description</label>
        <input type="text" class="form-control" name="description" id="comics-description" value="{{ old('description', $comic->description) }}">
    </div>
    <div class="mb-3">
        <label for="comics-thumb" class="form-label">Thumbnail</label>
        <input type="text" class="form-control" name="thumb" id="comics-thumb" value="{{ old('thumb', $comic->thumb) }}">
    </div>
    <div class="mb-3">
        <label for="comics-price" class="form-label">Price</label>
        <input type="text" class="form-control" name="price" id="comics-price" value="{{ old('price', $comic->price) }}">
    </div>
    <div class="mb-3">
        <label for="comics-series" class="form-label">Series</label>
        <input type="text" class="form-control" name="series" id="comics-series" value="{{ old('series', $comic->series) }}">
    </div>
    <div class="mb-3">
        <label for="comics-sale-date" class="form-label">Sale Date</label>
        <input type="date" class="form-control" name="sale_date" id="comics-sale-date" value="{{ old('sale_date', $comic->sale_date) }}">
    </div>
    <div class="mb-3">
        <label for="comics-type" class="form-label">Type</label>
        <input type="text" class="form-control" name="type" id="comics-type" value="{{ old('type', $comic->type) }}">
    </div>

    <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-success">Modifica</button>
    </div>
</form>

<form action="{{ route('comics.destroy', $comic->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Cancella</button>
</form>
@endsection