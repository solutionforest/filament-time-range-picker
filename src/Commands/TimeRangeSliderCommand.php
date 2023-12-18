<?php

namespace SolutionForest\TimeRangeSlider\Commands;

use Illuminate\Console\Command;

class TimeRangeSliderCommand extends Command
{
    public $signature = 'time-range-slider';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
