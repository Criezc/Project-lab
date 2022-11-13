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
        'role',
        'image'
    ];

    protected $secured = [
        'password',
        'remember_token'
    ];

    public function isAdmin()
    {
        return $this->role == 1;
    }

    public function nonAdmin()
    {
        return $this->role == 0;
    }

    public function watchlists()
    {
        return $this->hasMany(Watchlist::class, 'foreign_key');
    }
}
