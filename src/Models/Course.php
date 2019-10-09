<?php

namespace Stephenjude\TertiaryInstitutes\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['course'];

    public function __construct(array $attributes = [])
    {
        $this->setConnection(config('tertiary-institutes.database_connection'));

        parent::__construct($attributes);
    }
}
