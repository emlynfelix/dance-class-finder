<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'contact'
    ];

    public function danceClasses(): HasMany
    {
        return $this->hasMany(DanceClass::class);
    }
}
