<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class MovieUser extends Authenticable
{
    use HasFactory, Notifiable;

    protected $guard = 'user';

    protected $fillable = [
        'username',
        'email',
        'password'
    ];

    protected $secured = [
        'password',
        'remember_token'
    ];
}
