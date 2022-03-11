@props([
    'theme' => null
])
<div>
    <th scope="col" class="{{ $theme->thClass }}"
        style="{{ $theme->thStyle }}"
        wire:key="{{ md5('checkbox-all') }}">
        <div class="{{ $theme->divClass }}">
            <label>
                <input class="{{ $theme->inputClass }}"
                       type="checkbox"
                       wire:click="selectCheckboxAll()"
                       wire:model.defer="checkboxAll">
            </label>
        </div>
    </th>
</div>
