@extends('layouts.master')

@section('title', $movie->title)

@section('content')
  <br>
  <h4>{{ $movie->title }}</h4>
  <p><a href="{{ route('movie-genre', ['genre' => $movie->genre]) }}"><strong>Genre:</strong> {{ $movie->genre }}</a></p>
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
<br>
<br>


<h4>Add comment:</h4>
<form action="/movie/{{ $movie->id }}/comments" method="post" >
  @csrf

  <label for="movie-content">Leave a comment:</label>
  <input type="text" name="content" id="movie-content" class="form-control">

  @error('content')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <br>
  <br>
  <div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
@endsection

