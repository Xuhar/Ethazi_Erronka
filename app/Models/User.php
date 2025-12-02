<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'idUser';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'Username',
        'Email',
        'Password',
        'Wallet',
    ];

    protected $hidden = [
        'Password',
        'remember_token',
    ];

    protected $casts = [
        'Password' => 'hashed',
        'Wallet'   => 'decimal:2',
        'email_verified_at' => 'datetime',
    ];
}