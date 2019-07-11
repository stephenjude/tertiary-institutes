<?php

namespace Stephenjude\TertiaryInstitutes\Models;

use Illuminate\Database\Eloquent\Model;

class InnovativeInstituteCourse extends Model
{
    protected $fillable = ['institute_id', 'course_id'];

    public function courses()
    {
        return $this->hasMany('Stephenjude\TertiaryInstitutes\Models\Course', 'id', 'course_id');
    }

    public function iei()
    {
        return $this->belongsToMany('Stephenjude\TertiaryInstitutes\Models\InnovativeInstitute', 'id', 'institute_id');
    }
}
