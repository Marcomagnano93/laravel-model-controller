@extends('layouts.app')

@section('content')
    <div class="container text-center py-4">
        <h1 class="red">Movies</h1>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
            <div class="col-4">
                <div class="card m-3 p-2 card-bg">
                    <h5 class="card-title text-primary-emphasis">{{ $movie->title }}</h5>
                    <p class="card-text">Titolo originale: {{ $movie->original_title }}</p>
                    <p class="card-text">TData di uscita: {{ $movie->date }}</p>
                    <p>Voto: {{ $movie->vote }}/10</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection