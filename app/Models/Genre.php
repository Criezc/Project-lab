<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';

    protected $fillable = [
        'name',
    ];

    public function movies() {
        return $this->hasMany(MovieGenre::class);
    }
}
