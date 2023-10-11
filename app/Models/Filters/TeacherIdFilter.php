<?php

namespace App\Models\Filters;

use Lacodix\LaravelModelFilter\Filters\NumericFilter;

class TeacherIdFilter extends NumericFilter
{
    protected string $field = 'teacher_id';
}
