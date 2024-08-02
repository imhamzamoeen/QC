@extends('layouts.master')

@push('extended-css')
    @include('vendors.stepper')
    @include('vendors.select2')
    @include('vendors.sweet-alerts')
  
@endpush

@section('content')
    <x-policy-rate-update-stepper />
@endsection

@push('extended-js')
    <script>
        var my_policies;
        var html_to_add = '';
        var function_name;
        var route_to_update="{{route('PolicyManagement.policy_file_update')}}";
    </script>
    <script src="{{ asset('js/core/company-policies/update_policy_rate/dz_main.js') }}"></script>

    <script src="{{ asset('js/core/company-policies/update_policy_rate/add_option_to_policy_select.js') }}"></script>
@endpush
