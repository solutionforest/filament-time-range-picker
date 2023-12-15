@php
    $disableInput = $disableInput();
@endphp

<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">

    <div class="flex justify-center items-center">
        <div wire:ignore ax-load x-ignore
            ax-load-css="{{ \Filament\Support\Facades\FilamentAsset::getStyleHref('filament-time-range-slider-styles', 'solution-forest/filament-time-range-slider') }}"
            ax-load-src="{{ \Filament\Support\Facades\FilamentAsset::getAlpineComponentSrc('filament-time-range-slider', 'solution-forest/filament-time-range-slider') }}"
            x-data="filamentTimeRangeSlider()" x-init="mintrigger();
            maxtrigger()" class="relative max-w-xl w-full mt-3 mb-7">
            <div>
                <input type="range" step="100" x-bind:min="min" x-bind:max="max"
                    x-on:input="mintrigger" x-model="mindate"
                    class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer">

                <input type="range" step="100" x-bind:min="min" x-bind:max="max"
                    x-on:input="maxtrigger" x-model="maxdate"
                    class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer">

                <div class="relative z-10 h-2">

                    <div class="absolute z-10 left-0 right-0 bottom-0 top-0 rounded-md bg-gray-200"></div>

                    <div class="absolute z-20 top-0 bottom-0 rounded-md bg-primary-500"
                        x-bind:style="'right:' + maxthumb + '%; left:' + minthumb + '%'"></div>

                    <div class="absolute z-30 w-6 h-6 top-0 left-0 bg-white border-2 border-primary-500 rounded-full -mt-2 -ml-1"
                        x-bind:style="'left: ' + minthumb + '%'"></div>

                    <div class="absolute z-30 w-6 h-6 top-0 right-0 bg-white border-2 border-primary-500 rounded-full -mt-2 -mr-3"
                        x-bind:style="'right: ' + maxthumb + '%'"></div>

                </div>

            </div>

            @if ($disableInput)
                <div class="pt-5 grid grid-cols-2 gap-3 date-label-container">
                    <div x-text="mindate" class="text-left min-date-label"></div>
                    <div x-text="maxdate" class="text-right max-date-label"></div>
                </div>
            @else
                <div class="pt-5 grid grid-cols-2 gap-3">
                    <div>
                        <x-input type="text" maxlength="5" x-on:input="mintrigger" x-model="mindate"
                            class="w-full max-w-sm border border-gray-200 rounded text-center focus:border-primary-500 focus:ring-primary-500" />
                    </div>
                    <div>
                        <x-input type="text" maxlength="5" x-on:input="maxtrigger" x-model="maxdate"
                            class="w-full max-w-sm border border-gray-200 rounded text-center focus:border-primary-500 focus:ring-primary-500" />
                    </div>
                </div>
            @endif
        </div>


    </div>
</x-dynamic-component>
