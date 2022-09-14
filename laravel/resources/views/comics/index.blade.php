@extends('layouts.main')

@section('title', 'All')
    
@section('main-content')
    @forelse ($comics as $comic)
        @include('comics.card')
    @empty
        <h1>Non c'è nessun fumetto!</h1>
    @endforelse
@endsection