<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    use HasFactory;

    protected $table = 'movements';
    protected $primaryKey = 'idMovement';

    protected $fillable = [
        'Wallet_idWallet',
        'Wallet_idUser',
        'Type',
        'Date',
        'Amount',
    ];

    protected $casts = [
        'Date'   => 'date:Y-m-d',
        'Amount' => 'decimal:2',
    ];

    public function wallet()
    {
        return $this->belongsTo(Wallet::class, 'Wallet_idWallet', 'idWallet');
    }

}