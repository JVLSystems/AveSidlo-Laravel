<?php

namespace App\Http\Livewire;

use App\Models\Invoice;
use Illuminate\Support\Carbon;
use Illuminate\Support\HtmlString;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridEloquent;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;

final class InvoicesTable extends PowerGridComponent
{
    use ActionButton;

    //Messages informing success/error data is updated.
    public bool $showUpdateMessages = false;

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): void
    {
        $this->showPerPage()
            ->showSearchInput()
            ->showToggleColumns();
            // ->showCheckBox();
            // ->showExportOption('download', ['excel', 'csv']);
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */

    /**
    * PowerGrid datasource.
    *
    * @return  \Illuminate\Database\Eloquent\Builder<\App\Models\User>|null
    */
    public function datasource(): ?Builder
    {
        return Invoice::query()->where('user_id', auth()->id() );
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */

    /**
     * Relationship search.
     *
     * @return array<string, array<int, string>>
     */
    public function relationSearch(): array
    {
        return [];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    */
    public function addColumns(): ?PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('number')
            ->addColumn('issue_date_at_formatted', function(Invoice $model) {
                return Carbon::parse($model->issue_date_at)->format('d. m. Y');
            })
            ->addColumn('due_date_at_formatted', function(Invoice $model) {
                return Carbon::parse($model->due_date_at)->format('d. m. Y');
            })
            ->addColumn('price_with_vat', function(Invoice $model) {
                return sprintf("%s €", number_format($model->price_with_vat, 2, ',', ''));
            })
            ->addColumn('is_paid', function(Invoice $model) {
                return $model->is_paid == 1
                    ? new HtmlString('<span class="label label-lg label-light-success label-inline">Uhradené</span>')
                    : new HtmlString('<span class="label label-lg label-light-danger label-inline">Neuhradené</span>');
            });
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */

     /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        return [
            Column::add()
                ->title('Ćíslo faktúry')
                ->field('number')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title('Dátum vystavenia')
                ->field('issue_date_at_formatted', 'issue_date_at')
                ->sortable()
                ->searchable()
                ->makeInputDatePicker('issue_date_at'),

            Column::add()
                ->title('Dátum splatnosti')
                ->field('due_date_at_formatted', 'due_date_at')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker('due_date_at'),

            Column::add()
                ->title('Výška faktúry')
                ->field('price_with_vat')
                ->searchable()
                ->sortable()
                ->makeInputText(),

            Column::add()
                ->title('Uhradené')
                ->field('is_paid')
                ->sortable()
                ->makeBooleanFilter('is_paid', 'Uhradené', 'Neuhradené'),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

     /**
     * PowerGrid Invoice Action Buttons.
     *
     * @return array<int, \PowerComponents\LivewirePowerGrid\Button>
     */
    public function actions(): array
    {
        return [
            Button::add('show')
            ->caption('Náhľad')
            ->class('btn btn-primary btn-sm')
            ->route('faktury.show', ['invoice' => 'id']),

            Button::add('download')
                ->target('')
                ->caption('Stiahnuť')
                ->class('btn btn-primary btn-sm')
                ->route('faktury.download', ['invoice' => 'id']),
        ];
    }
}
