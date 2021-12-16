<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matchs extends Model
{
    use HasFactory;

    protected $table = "matchs";

    protected $fillable = [
        'id',
        'team_tournament_id',
        'team_id_A',
        'team_id_B',
        'result'
    ];
}
