@extends('layouts.master')

@push('extended-css')
    @include('vendors.stepper')
    @include('vendors.select2')
    @include('vendors.form-repeater')
    @include('vendors.sweet-alerts')
@endpush

<script>
    var annual_counter = -1;
    var semi_annual_counter = -1;
    var quarterly_counter = -1;
    var monthly_counter = -1;
    var annual_term_counter = -1;
    var semi_annual_term_counter = -1;
    var quarterly_term_counter = -1;
    var monthly_term_counter = -1;

    var adb_whole_counter = -1;
    var child_whole_counter = -1;
    var adb_term_counter = -1;
    var child_term_counter = -1;
</script>


@section('content')
    <x-company-edit-view-component />
@endsection

@push('extended-js')
    <script src="{{ asset('js/dynamic_ajax.js') }}"> </script>

    <script src="{{ asset('js/global.js') }}">
    </script>
    <script>
        var route_to_ajax = "{{ route('dashboard.Ajax_View_For_Update_View') }}";
        var asset = "{{ asset('') }}";
        var formData = new FormData(); //this one is for getting data of company for displaying 
        var GlobalFormData = new FormData();
        var route_to_update_company_formula_details = "{{ route('dashboard.FormulaUpdate') }}";
        var route_to_update_company_factor_details = "{{ route('dashboard.FactorsUpdate') }}";
        var route_to_update_company_riders_details = "{{ route('dashboard.RidersUpdate') }}";

       
    </script>


    <script src="{{ asset('js/core/company/edit/tab_panel_change.js') }}"></script>
    <script src="{{ asset('js/core/company/edit/second_wizard_div_ajax.js') }}"></script>
    <script src="{{ asset('js/core/company/edit/main.js') }}"></script>
    <script src="{{ asset('js/core/company/edit/form-repeater.js') }}"></script>
    <script src="{{ asset('js/core/company/edit/custom_form_repeater_for_formula.js') }}"></script>
    <script src="{{ asset('js/core/company/edit/set_formula_options.js') }}"></script>
    <script src="{{ asset('js/core/company/edit/set_formula_option_term.js') }}"></script>
    <script src="{{ asset('js/core/company/edit/submit_forms.js') }}"></script>
    <script src="{{ asset('js/core/company/formula_custom_check.js') }}"></script>

    <script src="{{ asset('js/core/company/edit/Html_Rider_Append.js') }}"></script>
    <script src="{{ asset('js/core/company/rider_age_check.js') }}"></script>

    <script src="{{ asset('js/core/company/edit/html_change.js') }}"></script>
@endpush
