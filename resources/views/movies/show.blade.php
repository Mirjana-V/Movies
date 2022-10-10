@extends('layouts.master')

@section('title', $movie->title)

@section('content')
  <br>
  <h4>{{ $movie->title }}</h4>
  <p><strong>Genre:</strong> {{ $movie->genre }}</p>
  <p><strong>Director:</strong> {{ $movie->director }}</p>
  <p><strong>Years:</strong> {{ $movie->years }}</p>
  <p>{{ $movie->storyline }}</p>
  <hr>
  <br>
  <br>


<div>
  <h4>Comments:</h4>
  <ul>
    @foreach ($movie->comments as $comment)
    <li>
      {{ $comment->content }} <br>
      Date: {{ $comment->created_at }}
    </li>
    @endforeach
  </ul>
</div>

@endsection

