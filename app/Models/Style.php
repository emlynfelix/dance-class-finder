<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Style extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function danceClasses(): BelongsToMany
    {
        return $this->belongsToMany(DanceClass::class, 'dance_class_style', 'style_id', 'dance_class_id');
    }
}
