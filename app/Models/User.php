<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'username',
        'email',
        'password',
        'role'
    ];

    protected $secured = [
        'password',
        'remember_token'
    ];

    public function watchlists() {
        return $this->hasMany(Watchlist::class, 'foreign_key');
    }
}
