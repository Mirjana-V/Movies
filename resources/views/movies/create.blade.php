@extends('layouts.master')

@section('title', 'Add movie')

@section('content')
    <h1>Add Movie</h1>
    <form method="post" action="/movies">
     @csrf

     <div class="mb-3">
        <label class="form-label">Title</label>
        <input name="title" id="title" type="text" class="form-control">
     </div>

     @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
     @enderror


     <div class="mb-3">
        <label class="form-label">Genre</label>
        <input name="genre" id="genre" type="text" class="form-control">
     </div>

     @error('genre')
        <div class="alert alert-danger">{{ $message }}</div>
     @enderror


     <div class="mb-3">
      <label class="form-label">Director</label>
      <input name="director" id="director" type="text" class="form-control">
   </div>

   @error('director')
      <div class="alert alert-danger">{{ $message }}</div>
   @enderror


     <div class="mb-3">
        <label class="form-label">Years</label>
        <input name="years" id="years" type="text" class="form-control">
     </div>

     @error('years')
        <div class="alert alert-danger">{{ $message }}</div>
     @enderror


     <div class="mb-3">
        <label class="form-label">Storyline</label>
        <textarea name="storyline" id="storyline" class="form-control" rows="5"></textarea>
     </div>

     @error('storyline')
        <div class="alert alert-danger">{{ $message }}</div>
     @enderror

     <div class="mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
     </div>

    </form>
@endsection