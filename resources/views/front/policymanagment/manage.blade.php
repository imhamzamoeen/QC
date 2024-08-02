@extends('layouts.master')

@push('extended-css')
<livewire:styles />


@endpush

@section('content')
<livewire:active-policy-component/>

    
@endsection

@push('extended-js')
<livewire:scripts />
<script src="{{ asset('js/global.js') }}"></script>

<script>
    Livewire.on('toasteractive', event=> {
        toaster("info","Policy Activated Successfully",'Actiaton')
    })

    Livewire.on('toasterinactive', event => {
        toaster("info","Policy De-Activated Successfully",'De-Activation')
    })
    </script>
@endpush
