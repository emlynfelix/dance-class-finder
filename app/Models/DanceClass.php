<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Lacodix\LaravelModelFilter\Traits\HasFilters;
use App\Models\Filters\LocationIdFilter;
use App\Models\Filters\TeacherIdFilter;

class DanceClass extends Model
{
    use HasFactory;
    use HasFilters;

    protected $fillable = [
        'name', 'start', 'end', 'teacher_id', 'location_id'
    ];

    protected array $filters = [
      LocationIdFilter::class,
      TeacherIdFilter::class,
    ];

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }
}
