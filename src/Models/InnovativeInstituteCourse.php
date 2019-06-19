<?php

namespace Stephenjude\Models;

use Illuminate\Database\Eloquent\Model;

class InnovativeInstituteCourse extends Model
{
    protected $fillable = ['institute_id', 'course_id',];


    public function courses()
    {
        return $this->hasMany('Stephenjude\Models\Course', 'id', 'course_id');
    }


    public function iei()
    {
        return $this->belongsToMany('Stephenjude\Models\InnovativeInstitute', 'id', 'institute_id');
    }
}
