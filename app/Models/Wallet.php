<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    protected $table = 'wallets';
    protected $primaryKey = 'idWallet';

    protected $fillable = [
        'idUser',
        'Money',
    ];

    protected $casts = [
        'Money' => 'decimal:2',
    ];

    // Relación: una wallet pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class, 'idUser', 'idUser');
    }
}