<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieActor extends Model
{
    protected $table = 'movie_actors';

    protected $fillable = [
        'actor_id',
        'movie_id',
        'character',
    ];

    public function movie() {
        return $this->belongsTo(Movie::class);
    }

    public function actor() {
        return $this->belongsTo(Actor::class);
    }
}
