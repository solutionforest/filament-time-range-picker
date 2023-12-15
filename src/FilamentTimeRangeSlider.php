<?php

namespace SolutionForest\FilamentTimeRangeSlider;

use Carbon\CarbonInterface;
use Closure;
use Filament\Forms\Components\Concerns\HasAffixes;
use Filament\Forms\Components\Concerns\HasExtraInputAttributes;
use Filament\Forms\Components\Concerns\HasPlaceholder;
use Filament\Forms\Components\Contracts\HasAffixActions;
use Filament\Forms\Components\Field;
use Filament\Support\Concerns\HasExtraAlpineAttributes;

class FilamentTimeRangeSlider extends Field implements HasAffixActions
{
    use HasAffixes;
    use HasExtraAlpineAttributes;
    use HasExtraInputAttributes;
    use HasPlaceholder;

    protected string $view = 'filament-time-range-slider::time-range-slider';


    protected string | Closure | null $displayFormat = null;

    public static string $defaultTimeDisplayFormat = 'H:i';

    public bool $disableInput = false;

    protected int | Closure | null $hoursStep = null;

    protected int | Closure | null $minutesStep = null;

    protected CarbonInterface | string | Closure | null $maxTime = null;

    protected CarbonInterface | string | Closure | null $minTime = null;

    public function hoursStep(int | Closure | null $hoursStep): static
    {
        $this->hoursStep = $hoursStep;

        return $this;
    }

    public function minutesStep(int | Closure | null $minutesStep): static
    {
        $this->minutesStep = $minutesStep;

        return $this;
    }

    public function displayFormat(string | Closure | null $format): static
    {
        $this->displayFormat = $format;

        return $this;
    }

    public function disableInput(bool $disableInput = true): static
    {
        $this->disableInput = $disableInput;

        return $this;
    }

    public function getDisplayFormat(): string
    {
        $format = $this->evaluate($this->displayFormat);

        if ($format) {
            return $format;
        }

        return static::$defaultTimeDisplayFormat;
    }
}
