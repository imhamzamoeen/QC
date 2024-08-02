<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\CompanyPolicy;

class CompanyPolicyTable extends DataTableComponent
{

    protected $listeners = ['refreshDt' => '$refresh',];

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Policy name", "policy_name")
                ->searchable()
                ->sortable(),
            Column::make("Policy type", "policy_type")
                ->searchable()
                ->sortable(),
            Column::make("Level", "level")
                ->searchable()
                ->sortable(),
            Column::make("Insurance Company", "company.name")
                ->searchable(),
            Column::make("Company Image", ""),
            Column::make("Action", ""),
            Column::make("Last Update ", "updated_at")
                ->sortable(),
        ];
    }

    public function query(): Builder
    {
        return CompanyPolicy::with(['company']);
    }

    public function rowView(): string
    {
        return 'livewire-tables.rows.company_policy_table';
    }

    public function InActivePolicy($id)
    {
        if (!is_null($delete = CompanyPolicy::find($id))) {
            $delete->delete();
             
        }
        $this->emit('toasterinactive');
        $this->emit('refreshDt');
    }
}
