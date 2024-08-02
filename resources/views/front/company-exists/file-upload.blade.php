@extends('layouts.master')
@include('theme_include.select')
@include('vendors.toaster')
@push('extended-css')

@endpush

@section('content')

    <x-company-exists-file-upload />

@endsection

@push('extended-js')
<script src="{{asset('js/dynamic_ajax.js')}}"></script>
<script src="{{asset('js/hamza_custom/company-exists/company-exists-form-submit.js')}}"></script>
<script src="{{asset('js/core/company-state/add_company.js')}}"
@endpush
