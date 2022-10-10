<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Http\Requests\CreateMovieRequest;


class MoviesController extends Controller
{
    public function index(){
        $movies=Movie::get();
        return view('movies.index', compact('movies'));
    }

    public function show($id){
        $movie=Movie::find($id);
        return view('movies.show', compact('movie'));
    }

    public function create(){
        return view('movies.create');
    }

    public function store(CreateMovieRequest $request){
        $validated=$request->validated();

        Movie::create([

            'title' => $validated['title'],
            'genre' => $validated['genre'],
            'director' => $validated['director'],
            'years' => $validated['years'],
            'storyline' => $validated['storyline']
        ]);

        return redirect('/movies');
    }
}