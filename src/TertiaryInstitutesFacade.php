<?php

namespace Stephenjude\TertiaryInstitutes;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Stephenjude\TertiaryInstitutes\TertiaryInstitutes\Skeleton\SkeletonClass
 */
class TertiaryInstitutesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tertiary-institutes';
    }
}
