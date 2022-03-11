@props([
    'theme' => null,
    'checkbox' => null,
    'ruleHide'=> false,
    'ruleDisable' => false,
    'ruleSetAttribute' => null,
    'attribute' => null
])
@if($checkbox)
    @if($ruleHide)
        <td class="{{ $theme->thClass }}"
            style="{{ $theme->thStyle }}">
            <div class="{{ $theme->divClass }}">
            </div>
        </td>
    @elseif($ruleDisable)
        <td class="{{ $theme->thClass }}" style="{{ $theme->thStyle }}">
            <div class="{{ $theme->divClass }}">
                <input @if(isset($ruleSetAttribute['attribute']))
                        {{ $attributes->merge([$ruleSetAttribute['attribute'] => $ruleSetAttribute['value']])->class($theme->inputClass) }}
                        @else
                        class="{{ $theme->inputClass }}"
                        @endif
                        disabled
                        type="checkbox">
            </div>
        </td>
    @else
        <td class="{{ $theme->thClass }}"
            style="{{ $theme->thStyle }}">
            <div class="{{ $theme->divClass }}">
                <input @if(isset($ruleSetAttribute['attribute']))
                        {{ $attributes->merge([$ruleSetAttribute['attribute'] => $ruleSetAttribute['value']])->class($theme->inputClass) }}
                        @else
                        class="{{ $theme->inputClass }}"
                        @endif
                        type="checkbox"
                        wire:model.defer="checkboxValues"
                        value="{{ $attribute }}">
            </div>
        </td>
    @endif
    @endif
