<?php

namespace Stephenjude\TertiaryInstitutes\Models;

use Illuminate\Database\Eloquent\Model;

class PolytechnicCourse extends Model
{
    protected $fillable = ['institute_id', 'course_id'];

    public function __construct(array $attributes = [])
    {
        $this->setConnection(config('tertiary-institutes.database_connection'));

        parent::__construct($attributes);
    }
}
