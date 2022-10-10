@extends('layouts.master')

@section('title', 'Movies')

@section('content')

<h3>Movies</h3>
<ul>
    @foreach($movies as $movie)
        <li class="list-group-item">
            <h2><a href="{{ route('single-movie-page',['id'=>$movie->id]) }}">{{ $movie->title }}</a></h2>
            <h2>{{ $movie->storyline }}</h2>
        </li>
    @endforeach
</ul>

@endsection