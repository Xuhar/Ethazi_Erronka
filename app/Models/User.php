<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $primaryKey = 'idUser';   // ← aquí está la magia
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'Username',      // ahora se usa Username
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Opcional: para que Laravel Auth siga funcionando con Username en vez de email
    public function getAuthIdentifierName()
    {
        return 'Username';
    }
    
    public function wallet()
    {
        return $this->hasOne(Wallet::class, 'idUser', 'idUser');
    }
}