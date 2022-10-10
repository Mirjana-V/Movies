<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\MoviesController;

class Movie extends Model
{
    protected $fillable = ['title', 'genre', 'director', 'years', 'storyline'];

    
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}


