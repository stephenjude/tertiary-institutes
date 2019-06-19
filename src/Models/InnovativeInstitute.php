<?php

namespace Stephenjude\Models;

use Illuminate\Database\Eloquent\Model;

class InnovativeInstitute extends Model
{
    protected $fillable = ['name'];

    protected $with = ['courses'];

    public function courses()
    {

        return $this->hasManyThrough(
            'Stephenjude\Models\Course',
            'Stephenjude\Models\InnovativeInstituteCourse',
            'institute_id',
            'id',
            'id',
            'course_id'
        );
        
    }
}
