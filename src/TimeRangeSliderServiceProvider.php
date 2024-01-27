<?php

namespace SolutionForest\TimeRangeSlider;

use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Assets\Asset;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Livewire\Features\SupportTesting\Testable;
use SolutionForest\TimeRangeSlider\Testing\TestsTimeRangeSlider;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TimeRangeSliderServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-time-range-slider';

    public static string $viewNamespace = 'filament-time-range-slider';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasViews(static::$viewNamespace);
    }

    public function packageRegistered(): void
    {
    }

    public function packageBooted(): void
    {
        // Asset Registration
        FilamentAsset::register(
            $this->getAssets(),
            $this->getAssetPackageName()
        );

        // Testing
        Testable::mixin(new TestsTimeRangeSlider());
    }

    protected function getAssetPackageName(): ?string
    {
        return 'solution-forest/filament-time-range-slider';
    }

    /**
     * @return array<Asset>
     */
    protected function getAssets(): array
    {
        return [
            AlpineComponent::make('time-range-slider', __DIR__.'/../resources/dist/filament-time-range-slider.js'),
            Css::make('time-range-slider-styles', __DIR__.'/../resources/dist/filament-time-range-slider.css'),
            // Js::make('time-range-slider-scripts', __DIR__.'/../resources/dist/filament-time-range-slider.js'),
        ];
    }
}
