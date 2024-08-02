@extends('layouts.master')
@include('vendors.datatable')
@include('theme_include.sweet_alert')
@include('theme_include.select')
@include('role.permission_variables')

@push('custom_css')
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
@endpush

@section('content')
    <!-- Role cards -->
    <div id="cards">
        <div class="row">
            <!-- Here All roles with Users are displayed here -->
            <x-permission-cards-component />
            <x-add-per-user-card-component />

        </div>
    </div>

    <div class="row">
        <div class="col-md-12" id="Rtable">
            <x-permission-component />
            <x-permission-modal-component />
            @push('extended-js')
            <script>
                 $('#permissiontable').DataTable();
            </script>
            @endpush
        </div>
    </div>
    <div class="row">
        <x-user-per-edit-modal-component />
        <x-assign-user-per-modal-component />
      
    </div>
@endsection

@push('custom_script')
    <script>
        let val = true;
    </script>
    <script src="{{ asset('js/permission/tableload.js') }}"></script>
    <script src="{{ asset('js/dynamic_ajax.js') }}"></script>
    <script src="{{ asset('js/permission/del_permission.js') }}"></script>
    <script src="{{ asset('js/permission/add_permission.js') }}"></script>
    <script src="{{ asset('js/permission/add_user_permission.js') }}"></script>
    <script src="{{ asset('js/permission/edit_user_permission.js') }}"></script>
    <script src="{{ asset('js/permission/reload_add_component.js') }}"></script>
@endpush
