<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Record extends Model
{
    use HasFactory;

    protected $table = 'records';
    protected $primaryKey = 'Record';

    protected $fillable = [
        'idEvent',
        'idBlower',
        'Ranking',
        'Time',
        'Top_blow',
    ];

    protected $casts = [
        'Time'      => 'string',   // stored as "HH:MM:SS"
        'Top_blow'  => 'float',
        'Ranking'   => 'integer',
        'idEvent'   => 'integer',
        'idBlower'  => 'integer',
    ];
}