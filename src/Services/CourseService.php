<?php

namespace Stephenjude\Services;

use Stephenjude\Models\FederalUniversity;
use Stephenjude\Models\PrivateUniversity;
use Stephenjude\Models\StateUniversity;
use Stephenjude\Models\Polytechnic;
use Stephenjude\Models\College;
use Stephenjude\Models\InnovativeInstitute;

class CourseService
{

    public function federalCourses($id)
    {
        return FederalUniversity::findOrFail($id)->courses()->get();
    }

    public function stateCourses($id)
    {
        return StateUniversity::findOrFail($id)->courses()->get();
    }

    public function privateCourses($id)
    {
        return PrivateUniversity::findOrFail($id)->courses()->get();
    }

    public function polytechnicCourses($id)
    {
        return Polytechnic::findOrFail($id)->courses()->get();
    }

    public function collegeCourses($id)
    {
        return College::findOrFail($id)->courses()->get();;
    }

    public function ieiCourses($id)
    {
        return InnovativeInstitute::findOrFail($id)->courses()->get();
    }

}
