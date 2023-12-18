<?php

namespace SolutionForest\TimeRangeSlider\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SolutionForest\TimeRangeSlider\TimeRangeSlider
 */
class TimeRangeSlider extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \SolutionForest\TimeRangeSlider\TimeRangeSlider::class;
    }
}
