<?php

namespace Stephenjude\TertiaryInstitutes\TertiaryInstitutes;

use Stephenjude\TertiaryInstitutes\Services\CourseService;
use Stephenjude\TertiaryInstitutes\Services\InstitutionService;

class TertiaryInstitutes
{
    private $institutionService;

    private $courseService;

    public function __construct()
    {
        $this->courseService = new CourseService;
        $this->institutionService = new InstitutionService;
    }

    public function courseService()
    {
        return $this->courseService;
    }

    public function instituteService()
    {
        return $this->institutionService;
    }
}
