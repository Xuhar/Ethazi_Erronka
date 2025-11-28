<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blower extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     */
    protected $table = 'blowers';

    /**
     * The primary key associated with the model.
     */
    protected $primaryKey = 'idBlower';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'idTeam',
        'Name',
        'Surname',
        'Age',
        'description',
        'pulmonary_capacity',
        'years_as_smoker',
    ];

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        'pulmonary_capacity' => 'decimal:2',
        'years_as_smoker' => 'integer',
        'Age' => 'integer',
    ];

    /**
     * Get the team that the blower belongs to.
     */
    public function team()
    {
        return $this->belongsTo(Team::class, 'idTeam', 'idTeam');
    }

    /**
     * Get the full name of the blower.
     */
    public function getFullNameAttribute()
    {
        return $this->Name . ' ' . $this->Surname;
    }
}