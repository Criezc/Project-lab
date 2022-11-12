<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';

    protected $fillable = [
        'title',
        'description',
        'genre',
        'director',
        'release_date',
        'img_url',
        'background_url',
    ];

    public function actors() {
        return $this->hasMany(MovieActor::class, 'foreign_key');
    }
}
