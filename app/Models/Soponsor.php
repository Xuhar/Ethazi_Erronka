<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;

    protected $table = 'sponsors';
    protected $primaryKey = 'idSponsor';

    protected $fillable = [
        'Name',
        'Price',
    ];

    protected $casts = [
        'Price' => 'integer',
        'Name'  => 'string',
    ];
}