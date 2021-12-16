<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = "team";

    protected $fillable = [
        'id',
        'tournament_id',
        'name',
        'logo',
        'playerA',
        'playerB',
        'playerC',
        'playerD',
        'playerE'
    ];
}
