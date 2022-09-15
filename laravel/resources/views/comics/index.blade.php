@extends('layouts.main')

@section('title', 'All')

@section('main-content')
<div class="row row-cols-3 justify-content-between gap-5">
    @forelse ($comics as $comic)
        @include('comics.card')
    @empty
    <h1>Non c'è nessun fumetto!</h1>
    @endforelse
</div>

@endsection