<?php

namespace Stephenjude\Models;

use Illuminate\Database\Eloquent\Model;

class PrivateUniversity extends Model
{
    protected $fillable = ['name'];

    protected $with = ['courses'];

    public function courses()
    {
        return $this->hasManyThrough(
            'Stephenjude\Models\Course',
            'Stephenjude\Models\PrivateUniversityCourse',
            'institute_id',
            'id',
            'id',
            'course_id'
        )->orderBy('course', 'asc');
    }
}
