<?php

namespace Stephenjude\TertiaryInstitutes\Http\Controllers;

use App\Http\Controllers\Controller;
use Stephenjude\TertiaryInstitutes\Services\CourseService;

class InstitutionCourseController extends Controller
{
    private $courseService;

    public function __construct()
    {
        $this->courseService = new CourseService();
    }

    public function federalCourses($institution_id)
    {
        return $this->courseService->federalCourses($institution_id);
    }

    public function stateCourses($institution_id)
    {
        return $this->courseService->stateCourses($institution_id);
    }

    public function privateCourses($institution_id)
    {
        return $this->courseService->privateCourses($institution_id);
    }

    public function polytechnicCourses($institution_id)
    {
        return $this->courseService->polytechnicCourses($institution_id);
    }

    public function collegeCourses($institution_id)
    {
        return $this->courseService->collegeCourses($institution_id);
    }

    public function ieiCourses($institution_id)
    {
        return $this->courseService->ieiCourses($institution_id);
    }
}
