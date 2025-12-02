<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';
    protected $primaryKey = 'idTeam';

    protected $fillable = [
        'teamName',
        'logo',
    ];

    /**
     * Get all blowers belonging to this team.
     */
    public function blowers()
    {
        return $this->hasMany(Blower::class, 'idTeam', 'idTeam');
    }
}