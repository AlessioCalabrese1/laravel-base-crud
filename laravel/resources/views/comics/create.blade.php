@extends('layouts.main')

@section('title', 'Add')

@section('main-content')
<form action="{{ route('comics.store') }}" method="POST">
    <div class="mb-3">
        <label for="comics-title" class="form-label">Title</label>
        <input type="text" class="form-control" id="comics-title">
    </div>
    <div class="mb-3">
        <label for="comics-description" class="form-label">Description</label>
        <input type="text" class="form-control" id="comics-description">
    </div>
    <div class="mb-3">
        <label for="comics-thumb" class="form-label">Thumbnail</label>
        <input type="text" class="form-control" id="comics-thumb">
    </div>
    <div class="mb-3">
        <label for="comics-price" class="form-label">Price</label>
        <input type="text" class="form-control" id="comics-price">
    </div>
    <div class="mb-3">
        <label for="comics-series" class="form-label">Series</label>
        <input type="text" class="form-control" id="comics-series">
    </div>
    <div class="mb-3">
        <label for="comics-sale-date" class="form-label">Sale Date</label>
        <input type="text" class="form-control" id="comics-sale-date">
    </div>
    <div class="mb-3">
        <label for="comics-type" class="form-label">Sale Date</label>
        <input type="text" class="form-control" id="comics-type">
    </div>

    <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection