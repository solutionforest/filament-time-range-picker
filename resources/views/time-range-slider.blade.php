@php
    $statePath = $getStatePath();
@endphp

<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">

    <div class="flex justify-center items-center time-range-slider-container">
        <div wire:ignore ax-load x-ignore
            ax-load-css="{{ \Filament\Support\Facades\FilamentAsset::getStyleHref('time-range-slider-styles', 'solution-forest/filament-time-range-slider') }}"
            ax-load-src="{{ \Filament\Support\Facades\FilamentAsset::getAlpineComponentSrc('time-range-slider', 'solution-forest/filament-time-range-slider') }}"
            x-data="timeRangeSlider({
                state: $wire.{{ $applyStateBindingModifiers("\$entangle('{$statePath}')") }},
                mininterval: {{ $getMinInterval() }},
                stepinterval: {{ $getMinutesStep() }},
            })" x-init="init()" class="relative max-w-xl w-full mt-3 mb-7">
            <div>
                <input type="range" step="{{ $getMinutesStep() }}" x-bind:min="min"
                    x-bind:max="max" x-on:input="mintrigger" x-model="mindate"
                    class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer">

                <input type="range" step="{{ $getMinutesStep() }}" x-bind:min="min"
                    x-bind:max="max" x-on:input="maxtrigger" x-model="maxdate"
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

            @if ($ifDisableInput())
                <div class="pt-5 grid grid-cols-2 gap-3 date-label-container">
                    <div class="text-left min-date-label">
                        <label x-text="minhour" class="hour-label"></label>
                        <label class="seperator-label">:</label>
                        <label x-text="minminute" class="minute-label"></label>
                    </div>
                    <div class="text-right max-date-label">
                        <label x-text="maxhour" class="hour-label"></label>
                        <label class="seperator-label">:</label>
                        <label x-text="maxminute" class="minute-label"></label>
                    </div>
                </div>
            @else
                <div class="pt-5 grid grid-cols-2 gap-3">
                    <div class="flex items-center justify-center rtl:flex-row-reverse">
                        <x-filament::input.wrapper
                            class="border-gray-300 focus:border-yellow-500 focus:ring-yellow-500 rounded-md shadow-sm w-full max-w-sm border border-gray-200 rounded text-center focus:border-primary-500 focus:ring-primary-500"
                            :attributes="\Filament\Support\prepare_inherited_attributes($getExtraAttributeBag())">
                            <div class="flex px-1 py-2.5">
                                <input max="23" min="0" type="number" inputmode="numeric"
                                    x-model="minhour" x-on:change="inputtrigger"
                                    class="time-component text-center !appearance-none w-10 border-none bg-transparent p-0 text-center text-sm text-gray-950 focus:ring-0 dark:text-white" />

                                <span class="text-sm text-center font-medium text-gray-500 dark:text-gray-400 shrink">
                                    :
                                </span>

                                <input max="59" min="0" type="number" step="{{ $getMinutesStep() }}"
                                    inputmode="numeric" x-model="minminute" x-on:change="inputtrigger"
                                    class="time-component text-center !appearance-none w-10 border-none bg-transparent p-0 text-center text-sm text-gray-950 focus:ring-0 dark:text-white" />
                            </div>
                        </x-filament::input.wrapper>
                    </div>

                    <div class="flex items-center justify-center rtl:flex-row-reverse">
                        <x-filament::input.wrapper
                            class="border-gray-300 focus:border-yellow-500 focus:ring-yellow-500 rounded-md shadow-sm w-full max-w-sm border border-gray-200 rounded text-center focus:border-primary-500 focus:ring-primary-500"
                            :attributes="\Filament\Support\prepare_inherited_attributes($getExtraAttributeBag())">
                            <div class="flex px-1 py-2.5">
                                <input max="23" min="0" type="number" inputmode="numeric"
                                    x-model="maxhour" x-on:change="inputtrigger"
                                    class="time-component text-center !appearance-none w-10 border-none bg-transparent p-0 text-center text-sm text-gray-950 focus:ring-0 dark:text-white" />

                                <span class="text-sm text-center font-medium text-gray-500 dark:text-gray-400 shrink">
                                    :
                                </span>

                                <input max="59" min="0" type="number" step="{{ $getMinutesStep() }}"
                                    inputmode="numeric" x-model="maxminute" x-on:change="inputtrigger"
                                    class="time-component text-center !appearance-none w-10 border-none bg-transparent p-0 text-center text-sm text-gray-950 focus:ring-0 dark:text-white" />
                            </div>
                        </x-filament::input.wrapper>
                    </div>
                    {{-- <div>
                        <x-input type="text" maxlength="5" x-on:change="mintrigger" x-model="mindate"
                            class="w-full max-w-sm border border-gray-200 rounded text-center focus:border-primary-500 focus:ring-primary-500" />
                    </div> --}}
                    {{-- <div>
                        <x-input type="text" maxlength="5" x-on:change="maxtrigger" x-model="maxdate"
                            class="w-full max-w-sm border border-gray-200 rounded text-center focus:border-primary-500 focus:ring-primary-500" />
                    </div> --}}
                </div>
            @endif
        </div>


    </div>
</x-dynamic-component>
