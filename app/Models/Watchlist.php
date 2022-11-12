<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
    protected $table = 'watchlists';

    protected $fillable = [
        'movie_id',
        'status',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
