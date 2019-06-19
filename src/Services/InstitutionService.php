<?php

namespace Stephenjude\Services;

use Stephenjude\Models\College;
use Stephenjude\Models\FederalUniversity;
use Stephenjude\Models\InnovativeInstitute;
use Stephenjude\Models\Polytechnic;
use Stephenjude\Models\PrivateUniversity;
use Stephenjude\Models\StateUniversity;

class InstitutionService
{

    public function allUniversities()
    {
        $federal = collect(FederalUniversity::all());
        $federal = $federal->map(function ($federal) {
            $federal['type'] = 'federal';
            return $federal;
        });

        $state = collect(StateUniversity::all());
        $state = $state->map(function ($state) {
            $state['type'] = 'state';
            return $state;
        });

        $private = collect(PrivateUniversity::all());
        $private = $private->map(function ($private) {
            $private['type'] = 'private';
            return $private;
        });

        $response = $federal->merge($state)->merge($private);
        $response = collect($response)->sortBy('name');
        return $response->values()->all();
    }

    public function allStatePrivates()
    {
        $state = collect(StateUniversity::all());
        $state = $state->map(function ($state) {
            $state['type'] = 'state';
            return $state;
        });

        $private = collect(PrivateUniversity::all());
        $private = $private->map(function ($private) {
            $private['type'] = 'private';
            return $private;
        });

        $response = $state->merge($private);
        $response = collect($response)->sortBy('name');
        return $response->values()->all();
    }

    public function allPolytechnics()
    {
        $poly = collect(Polytechnic::all());
        $poly = $poly->map(function ($poly) {
            $poly['type'] = 'polytechnic';
            return $poly;
        });
        $response = collect($poly)->sortBy('name');
        return $response->values()->all();
    }

    public function allColleges()
    {
        $college = collect(College::all());
        $college = $college->map(function ($college) {
            $college['type'] = 'college';
            return $college;
        });
        $response = collect($college)->sortBy('name');
        return $response->values()->all();
    }

    public function allIeis()
    {
        $iei = collect(InnovativeInstitute::all());
        $iei = $iei->map(function ($iei) {
            $iei['type'] = 'iei';
            return $iei;
        });
        $response = collect($iei)->sortBy('name');
        return $response->values()->all();
    }

}
