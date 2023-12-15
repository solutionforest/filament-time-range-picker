<?php

namespace SolutionForest\FilamentTimeRangeSlider\Commands;

use Illuminate\Console\Command;

class FilamentTimeRangeSliderCommand extends Command
{
    public $signature = 'filament-time-range-slider';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
