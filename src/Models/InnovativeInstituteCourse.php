<?php

namespace Stephenjude\TertiaryInstitutes\Models;

use Illuminate\Database\Eloquent\Model;

class InnovativeInstituteCourse extends Model
{
    protected $fillable = ['institute_id', 'course_id'];

    public function __construct(array $attributes = [])
    {
        $this->setConnection(config('tertiary-institutes.database_connection'));

        parent::__construct($attributes);
    }

    public function courses()
    {
        return $this->hasMany('Stephenjude\TertiaryInstitutes\Models\Course', 'id', 'course_id');
    }

    public function iei()
    {
        return $this->belongsToMany('Stephenjude\TertiaryInstitutes\Models\InnovativeInstitute', 'id', 'institute_id');
    }
}
