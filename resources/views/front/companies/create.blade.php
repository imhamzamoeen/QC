@extends('layouts.master')

@push('extended-css')
    @include('vendors.stepper')
    @include('vendors.select2')
    @include('vendors.form-repeater')
    @include('vendors.sweet-alerts')
    @include('vendors.accordian')
@endpush

@section('content')
    <x-company-create-stepper-component />
@endsection

@push('extended-js')
    <script src="{{ asset('js/dynamic_ajax.js') }}"></script>
    <script src="{{ asset('js/global.js') }}"></script>
    <script>
        var route_to_store = "{{ route('dashboard.insurance-company.store') }}"
        var formula_check = true;
        var formula_filled_check=0;
    </script>


    {{-- <script src="{{ asset('js/core/company/main.js') }}"></script> --}}

    <script src="{{ asset('js/core/company/factors_check_html_add.js') }}"></script>

    <script src="{{ asset('js/core/company/rider_check_html_add.js') }}"></script>

    <script src="{{ asset('js/core/company/form_submit.js') }}"></script>
    <script src="{{ asset('js/core/company/onload.js') }}"></script>

    <script src="{{ asset('js/core/company/make_form_data.js') }}"></script>

    <script src="{{ asset('js/core/company/rider_age_check.js') }}"></script>

    <script src="{{ asset('js/core/company/select_option.js') }}"></script>
    <script src="{{ asset('js/core/company/select_option_term.js') }}"></script>
    <script src="{{ asset('js/core/company/custom_formula_form_repeater.js') }}"></script>
    <script src="{{ asset('js/core/company/formula_custom_check.js') }}"></script>
    <script src="{{ asset('js/core/company/accordian_name_work.js') }}"></script>
@endpush
