<?php

namespace Stephenjude\TertiaryInstitutes\Services;

use Stephenjude\TertiaryInstitutes\Models\College;
use Stephenjude\TertiaryInstitutes\Models\Polytechnic;
use Stephenjude\TertiaryInstitutes\Models\StateUniversity;
use Stephenjude\TertiaryInstitutes\Models\FederalUniversity;
use Stephenjude\TertiaryInstitutes\Models\PrivateUniversity;
use Stephenjude\TertiaryInstitutes\Models\InnovativeInstitute;

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
        return College::findOrFail($id)->courses()->get();
    }

    public function ieiCourses($id)
    {
        return InnovativeInstitute::findOrFail($id)->courses()->get();
    }
}
