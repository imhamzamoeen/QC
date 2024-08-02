@extends('layouts.master')

@push('extended-css')

    @include('vendors.stepper')
    @include('vendors.select2')
    @include('vendors.form-repeater')
    @include('vendors.sweet-alerts')

@endpush

@section('content')

    <x-company-policy-stepper />

@endsection

@push('extended-js')

    <script src="{{ asset('js/core/company-policies/main.js') }}"></script>
    <script src="{{ asset('js/core/company-policies/add_validation.js') }}"></script>



@endpush
