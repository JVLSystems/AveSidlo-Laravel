<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridEloquent;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use Illuminate\Support\HtmlString;

final class OrdersTable extends PowerGridComponent
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
            ->showSearchInput();
            //->showToggleColumns()
            // ->showCheckBox()
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
        return Order::with('item')->with('company')->where('user_id', auth()->id() );
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
            ->addColumn('company_id', function(Order $order) {
                return $order->company_id
                    ? $order->company->name
                    : new HtmlString('<span class="label label-danger label-inline font-weight-lighter">nie je</span>');
            })
            ->addColumn('price_with_vat', function(Order $order) {
                return sprintf("%s ???", number_format($order->price_with_vat, 2, ',', ''));
            })
            ->addColumn('created_at_formatted', function(Order $order) {
                return Carbon::parse($order->created_at)->format('d. m. Y H:i');
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
                ->title('????slo objedn??vky')
                ->field('number')
                ->sortable()
                ->searchable(),
                //->makeInputText(),

            Column::add()
                ->title('Spolo??nos??')
                ->field('company_id')
                ->sortable()
                ->searchable(),
                //->makeInputText(),

            Column::add()
                ->title('Cena s DPH')
                ->field('price_with_vat')
                ->searchable()
                ->sortable(),
                //->makeInputText(),

            Column::add()
                ->title('Vytvoren??')
                ->field('created_at_formatted', 'created_at')
                ->searchable()
                ->sortable(),
                //->makeInputDatePicker('created_at'),
        ];
    }
}
