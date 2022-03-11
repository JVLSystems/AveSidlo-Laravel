@props([
    'theme' => null
])
<div>
    <table class="table power-grid-table {{ $theme->tableClass }}"
           style="{{$theme->tableStyle}}">
        <thead class="{{$theme->theadClass}}"
               style="{{$theme->theadStyle}}">
                {{ $header }}
        </thead>
        <tbody class="{{$theme->tbodyClass}}"
               style="{{$theme->tbodyStyle}}">
                {{ $rows }}
                <tr>
                    <td colspan="3">
                        <div id="accordion" class="collapse">Hidden by default</div>
                    </td>
                </tr>
        </tbody>
    </table>
</div>
