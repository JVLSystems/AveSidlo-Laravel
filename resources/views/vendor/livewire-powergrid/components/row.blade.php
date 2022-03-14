@inject('helperClass','PowerComponents\LivewirePowerGrid\Helpers\Helpers')

@props([
    'theme' => null,
    'row' => null,
    'primaryKey' => null,
    'columns' => null,
    'currentTable' => null,
    'tableName' => null,
    'totalColumn' => null,
])
@foreach($columns as $column)
    @php
        $content = $row->{$column->field};
        $content = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $content);
        $field   = $column->dataField != '' ? $column->dataField : $column->field;
    @endphp
    <td class="{{ $theme->table->tdBodyClass . ' '.$column->bodyClass ?? '' }}"
        style="{{ $column->hidden === true ? 'display:none': '' }}; {{ $theme->table->tdBodyStyle . ' '.$column->bodyStyle ?? '' }}"
    >
        @if($column->editable === true && !str_contains($field, '.'))
            <span class="{{ $theme->clickToCopy->spanClass }}">
                        <x-livewire-powergrid::editable
                            :tableName="$tableName"
                            :primaryKey="$primaryKey"
                            :currentTable="$currentTable"
                            :row="$row"
                            :theme="$theme->editable"
                            :field="$field"/>
                        @if($column->clickToCopy)
                    <x-livewire-powergrid::click-to-copy
                        :row="$row"
                        :field="$content"
                        :label="data_get($column->clickToCopy, 'label') ?? null"
                        :enabled="data_get($column->clickToCopy, 'enabled') ?? false"/>
                @endif
                </span>
        @elseif(count($column->toggleable) > 0)
            @include($theme->toggleable->view, ['tableName' => $tableName])
        @else
            <span class="@if($column->clickToCopy) {{ $theme->clickToCopy->spanClass }} @endif">
                    <div>
                        {!! $content !!}
                    </div>
                    @if($column->clickToCopy)
                    <x-livewire-powergrid::click-to-copy
                        :row="$row"
                        :field="$content"
                        :label="data_get($column->clickToCopy, 'label') ?? null"
                        :enabled="data_get($column->clickToCopy, 'enabled') ?? false"/>
                @endif
                </span>
        @endif
    </td>
@endforeach

@if (get_class($row) == 'App\Models\Order')
    <tr id="{{ sprintf('collapse%s', $row->id) }}" class="collapse">
        <td colspan="4">
            <table class="table table-borderless">
                <tbody>
                    <tr class="d-flex justify-content-between border-bottom border-dark">
                        <th scope="row">Služba</th>
                        <td>{{ $row->item->name }}</td>
                    </tr>
                    <tr class="d-flex justify-content-between border-bottom border-dark">
                        <th scope="row">Množstvo</th>
                        <td>{{ $row->item->quantitz ?? 1 }}</td>
                    </tr>
                    <tr class="d-flex justify-content-between border-bottom border-dark">
                        <th scope="row">Vaša správa</th>
                        <td>{{ $row->note }}</td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
@endif

