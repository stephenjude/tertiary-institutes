<?php

namespace Stephenjude\TertiaryInstitutes\Models;

use Illuminate\Database\Eloquent\Model;

class StateUniversity extends Model
{
    protected $fillable = ['name'];

    protected $with = ['courses'];

    public function __construct(array $attributes = [])
    {
        $this->setConnection(config('tertiary-institutes.database_connection'));

        parent::__construct($attributes);
    }
    
    public function courses()
    {
        return $this->hasManyThrough(
            'Stephenjude\TertiaryInstitutes\Models\Course',
            'Stephenjude\TertiaryInstitutes\Models\StateUniversityCourse',
            'institute_id',
            'id',
            'id',
            'course_id'
        )->orderBy('course', 'asc');
    }
}
