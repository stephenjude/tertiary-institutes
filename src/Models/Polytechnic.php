<?php

namespace Stephenjude\Models;

use Illuminate\Database\Eloquent\Model;

class Polytechnic extends Model
{
    protected $fillable = ['name'];

    protected $with = ['courses'];

    public function courses()
    {
        return $this->hasManyThrough(
            'Stephenjude\Models\Course',
            'Stephenjude\Models\PolytechnicCourse',
            'institute_id',
            'id',
            'id',
            'course_id'
        )->orderBy('course', 'asc');

    }

}
