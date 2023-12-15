<?php

namespace SolutionForest\FilamentTimeRangeSlider\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SolutionForest\FilamentTimeRangeSlider\FilamentTimeRangeSlider
 */
class FilamentTimeRangeSlider extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \SolutionForest\FilamentTimeRangeSlider\FilamentTimeRangeSlider::class;
    }
}
