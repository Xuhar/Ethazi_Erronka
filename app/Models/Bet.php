<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bet extends Model
{
    use HasFactory;

    protected $table = 'bets';
    protected $primaryKey = 'idBet';

    protected $fillable = [
        'idUser',
        'idEvent',
        'idBlower',
        'Type',
        'Quantity',
    ];

    protected $casts = [
        'idUser'    => 'integer',
        'idEvent'   => 'integer',
        'idBlower'  => 'integer',
        'Type'      => 'string',
        'Quantity'  => 'float',
    ];
}