<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    protected $table = "tournament";

    protected $fillable = [
        'user_id',
        'game',
        'name',
        'description',
        'startDate',
        'endDate'
    ];
}
