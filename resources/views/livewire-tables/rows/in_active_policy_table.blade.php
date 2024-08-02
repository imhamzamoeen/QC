<x-livewire-tables::bs5.table.cell>
    {{ $loop->iteration }}
</x-livewire-tables::bs5.table.cell>


<x-livewire-tables::bs5.table.cell>
    {{ $row->policy_name }}
</x-livewire-tables::bs5.table.cell>


{{-- <x-livewire-tables::bs5.table.cell>
    {{ $row->issue_date->format('F j, Y') }}
</x-livewire-tables::bs5.table.cell>


<x-livewire-tables::bs5.table.cell>
    @foreach (explode(',', $row->highlights) as $eachfeatur)
    <li>{{$eachfeatur}}</li>
    @endforeach
</x-livewire-tables::bs5.table.cell> --}}

<x-livewire-tables::bs5.table.cell>
    {{ $row->policy_type }}
</x-livewire-tables::bs5.table.cell>


<x-livewire-tables::bs5.table.cell>
    {{ $row->level }}
</x-livewire-tables::bs5.table.cell>


<x-livewire-tables::bs5.table.cell>
    {{ $row->company->name }}
</x-livewire-tables::bs5.table.cell>

<x-livewire-tables::bs5.table.cell>
    <img src="{{ asset('images/Insurance_Companies/') }}/{{ $row->company->company_image }}"
        alt="{{ $row->company->name }}" style="height:150px;width:150px;border-radius:50%">
</x-livewire-tables::bs5.table.cell>

{{-- <x-livewire-tables::bs5.table.cell>
    {{ $row->created_at->diffForHumans() }}
</x-livewire-tables::bs5.table.cell> --}}


<x-livewire-tables::bs5.table.cell>
    <button class="btn btn-success" wire:click="ActivePolicy('{{$row->id}}')"  type="button"> Active
    </button>
</x-livewire-tables::bs5.table.cell>

<x-livewire-tables::bs5.table.cell>
    {{ $row->updated_at->diffForHumans() }}
</x-livewire-tables::bs5.table.cell>


{{-- <x-livewire-tables::bs5.table.cell>
    <button class="btn btn-danger mr-2" wire:click="$emit('deletepolicy',{{ $row->id }})"
        wire:loading.attr="disabled">
        In Active
    </button>

</x-livewire-tables::bs5.table.cell> --}}
