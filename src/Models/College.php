<?php

namespace Stephenjude\TertiaryInstitutes\Models;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $fillable = ['name'];

    protected $with = ['courses'];

    public function courses()
    {
        return $this->hasManyThrough(
            'Stephenjude\TertiaryInstitutes\Models\Course',
            'Stephenjude\TertiaryInstitutes\Models\CollegeCourse',
            'institute_id',
            'id',
            'id',
            'course_id'
        )->orderBy('course', 'asc');

    }
}
