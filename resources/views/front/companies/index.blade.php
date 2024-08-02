@extends('layouts.master')

@push('extended-css')
    @include('vendors.sweet-alerts')
    @include('vendors.datatable')
@endpush

@section('content')
    <x-table-view-insurance-companies />
    <x-open-modal-for-company-edit/>
@endsection
<script>
    var asset = "{{ asset('')}}"
   
</script>

@push('extended-js')
<script>
    var object_id;
</script>
    <script src="{{ asset('js/dynamic_ajax.js') }}"> </script>
    <script src="{{ asset('js/global.js') }}"></script>
        <script src = "{{ asset('js/core/company/main.js') }}" ></script>
    <script src="{{ asset('js/core/company/table.js') }}"></script>
    <script src="{{ asset('js/core/company/OpenModal.js') }}"></script>
@endpush
