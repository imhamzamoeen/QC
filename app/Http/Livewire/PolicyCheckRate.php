<?php

namespace App\Http\Livewire;

use App\Models\CompanyPolicy;
use App\Models\PolicyRate;
use ErrorException;
use Illuminate\Support\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridEloquent;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\Rules\Rule;

final class PolicyCheckRate extends PowerGridComponent
{
    use ActionButton;

    //Messages informing success/error data is updated.
    public bool $showUpdateMessages = true;

    public string $policyName;
    public   $company_id;
    public function __construct()
    {
        $this->policyName = collect(request()->segments())->last();       //url k last wala
        $this->policyName = str_replace("+", " ",  $this->policyName);
        $this->company_id = CompanyPolicy::where('policy_name', '=', $this->policyName)->value('id');
        
       
    }

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
            ->showToggleColumns()
            ->showRecordCount('full')
            ->showExportOption('download', ['excel', 'csv']);
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
     * @return  \Illuminate\Database\Eloquent\Builder<\App\Models\PolicyRate>|null
     */
    public function datasource(): ?Builder
    {

        return PolicyRate::query()->where('company_policy_id', '=', $this->company_id);
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
            ->addColumn('age')
            // ->addColumn('monthly_premium')
            ->addColumn('monthly_premium', function (PolicyRate $model) {
                return  is_null($model->monthly_premium) ? 'null' : $model->monthly_premium;
            })
            ->addColumn('face_amount',function (PolicyRate $model) {
                return  is_null($model->face_amount) ? 'null' : $model->face_amount;
            })
            ->addColumn('gender',function (PolicyRate $model) {
                return  is_null($model->gender) ? 'null' : $model->gender;
            })
            ->addColumn('smoker_status',function (PolicyRate $model) {
                return  is_null($model->smoker_status) ? 'null' : $model->smoker_status;
            })
            ->addColumn('updated_at_formatted', function (PolicyRate $model) {
                return Carbon::parse($model->updated_at)->format('d/m/Y H:i:s');
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
                ->title('AGE')
                ->field('age')
                ->bodyAttribute('text-center', 'color:red')
                ->makeInputRange()->editOnClick(true),

            Column::add()
                ->title('MONTHLY PREMIUM')
                ->field('monthly_premium')
                ->sortable()
                ->searchable()
                ->editOnClick(true)
                ->makeInputText(),

            Column::add()
                ->title('FACE AMOUNT')
                ->field('face_amount')
                ->editOnClick(true)
                ->makeInputRange(),

            Column::add()
                ->title('GENDER')
                ->field('gender')
                ->sortable()
                ->searchable()
                ->editOnClick(true)
                ->makeInputText(),

            Column::add()
                ->title('SMOKER STATUS')
                ->field('smoker_status')
                ->sortable()
                ->searchable()
                ->editOnClick(true)
                ->makeInputText(),

        

          

            Column::add()
                ->title('UPDATED AT')
                ->field('updated_at_formatted', 'updated_at')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker('updated_at'),

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
     * PowerGrid PolicyRate Action Buttons.
     *
     * @return array<int, \PowerComponents\LivewirePowerGrid\Button>
     */

    /*
    public function actions(): array
    {
       return [
           Button::add('edit')
               ->caption('Edit')
               ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
               ->route('policy-rate.edit', ['policy-rate' => 'id']),

           Button::add('destroy')
               ->caption('Delete')
               ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
               ->route('policy-rate.destroy', ['policy-rate' => 'id'])
               ->method('delete')
        ];
    }
    */

    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

    /**
     * PowerGrid PolicyRate Action Rules.
     *
     * @return array<int, \PowerComponents\LivewirePowerGrid\Rules\RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [
           
           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($policy-rate) => $policy-rate->id === 1)
                ->hide(),
        ];
    }
    */

    /*
    |--------------------------------------------------------------------------
    | Edit Method
    |--------------------------------------------------------------------------
    | Enable the method below to use editOnClick() or toggleable() methods.
    | Data must be validated and treated (see "Update Data" in PowerGrid doc).
    |
    */

    /**
     * PowerGrid PolicyRate Update.
     *
     * @param array<string,string> $data
     */

    
    public function update(array $data ): bool
    {
       try {
           $updated = PolicyRate::query()->findOrFail($data['id'])
                ->update([
                    $data['field'] => $data['value'],
                ]);
       } catch (QueryException $exception) {
           $updated = false;
       }
       return $updated;
    }

    public function updateMessages(string $status = 'error', string $field = '_default_message'): string
    {
        $updateMessages = [
            'success'   => [
                '_default_message' => __('Data has been updated successfully!'),
                //'custom_field'   => __('Custom Field updated successfully!'),
            ],
            'error' => [
                '_default_message' => __('Error updating the data.'),
                //'custom_field'   => __('Error updating custom field.'),
            ]
        ];

        $message = ($updateMessages[$status][$field] ?? $updateMessages[$status]['_default_message']);

        return (is_string($message)) ? $message : 'Error!';
    }
}
