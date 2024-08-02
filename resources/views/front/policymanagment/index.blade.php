@extends('layouts.master')

@push('extended-css')
    @include('theme_include.toaster')
    @include('theme_include.select')
    @include('vendors.sweet-alerts')
    @include('vendors.datatable')
@endpush

@section('content')

    <div class="row">
        <div class="mb-2 col-md-12">
        
            <x-policy-managment-table-view-component />
        </div>
      
    </div>
    <x-pollicy-managment-edit-modal-component />
    {{-- <x-user-company-assign-user-company-modal-component />
    <x-user-company-assign-edit-user-company-modal-component /> --}}
 

 

@endsection

@push('extended-js')
    <script src="{{ asset('js/dynamic_ajax.js') }}"></script>
    <script src="{{ asset('js/core/user-company/main.js') }}"></script>
    {{-- <script src="{{ asset('js/core/user-company/table.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/core/user-company/assign_user_company_form.js') }}"></script>
    <script src="{{ asset('js/core/user-company/edit_user_company.js') }}"></script>
    <script src="{{ asset('js/core/user-company/delete.js') }}"></script> --}}
    <script src="{{ asset('js/core/company-policies/edit_modal_open.js') }}"></script>
    <script src="{{ asset('js/core/company-policies/submit_form.js') }}"></script>


    <script>
   
        var asset = "{{ asset('') }}"
        var route_to_get_companies = "{{ route('Information.get_all_companies') }}";
        var global_obj=[];

    </script>


@endpush
