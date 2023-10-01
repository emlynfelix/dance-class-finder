<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanceClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'start', 'end', 'teacher_id', 'location_id'
    ];
}
