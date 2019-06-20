<?php

namespace Stephenjude\TertiaryInstitutes\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Stephenjude\TertiaryInstitutes\Services\InstitutionService;

class InstitutionController extends Controller
{
    private $institutionService;

    public function __construct()
    {
        $this->institutionService = new InstitutionService();
    }

    public function allUniversities()
    {
        return response()->json($this->institutionService->allUniversities());
    }

    public function statePrivates()
    {
        return response()->json($this->institutionService->allStatePrivates());
    }

    public function polytechnics()
    {
        return response()->json($this->institutionService->allPolytechnics());
    }

    public function colleges()
    {
        return response()->json($this->institutionService->allColleges());
    }

    public function ieis()
    {
        return response()->json($this->institutionService->allIeis());
    }
}
