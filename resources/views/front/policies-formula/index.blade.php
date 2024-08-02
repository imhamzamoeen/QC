@extends('layouts.master')

@push('extended-css')
    @include('vendors.sweet-alerts')
    @include('vendors.datatable')
    @include('vendors.select2')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
@endpush

@section('content')

    <x-policy-formula-create />

@endsection

@push('extended-js')
    <script src="{{ asset('js/core/company/main.js') }}"></script>
    <script src="{{ asset('js/core/company/table.js') }}"></script>
    <script src="{{ asset('js/formula/form_repeater.js') }}"></script>
    <script src="{{ asset('js/dynamic_ajax.js') }}"></script>
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/forms/form-repeater.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>
@endpush
