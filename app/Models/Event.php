<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';
    protected $primaryKey = 'idEvent';

    protected $fillable = [
        'Date',
        'Sponsors',
    ];

    protected $casts = [
        'Date' => 'date:Y-m-d',     // ensures proper date formatting
        'Sponsors' => 'string',
    ];
}