<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Http\Controllers\MoviesController;

class GenresController extends Controller
{
    public function show($genreName){
 
        $movies = Movie::getGenre($genreName); 
        return view('movies.index', compact('movies'));
    }
}