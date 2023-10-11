<?php

namespace App\Models\Filters;

use Lacodix\LaravelModelFilter\Filters\NumericFilter;

class LocationIdFilter extends NumericFilter
{
    protected string $field = 'location_id';
}
