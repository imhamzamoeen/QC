@extends('layouts.master')

@push('extended-css')
    @include('vendors.sweet-alerts')
    @include('vendors.datatable')

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/app-ecommerce.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/ui-feather.css') }}">
@endpush

@section('content')
    <x-get-leads-component />


    <form id="sendData" target="_blank" method="POST" action="{{route('test_quote.display_policy')}}">
        @csrf
        <input type="hidden" name="sendOBJ">
    </form>

@endsection

@push('extended-js')
    <script src="{{ asset('js/core/leads/table.js') }}"></script>
    <script src="{{ asset('js/core/leads/next_page.js') }}"></script>
    <script>
        var asset = "{{ asset('images/Insurance_Companies') }}";
        var results_object=[];
  
    </script>
    <script src="{{ asset('app-assets/js/scripts/pages/app-ecommerce.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/ui/ui-feather.js') }}"></script>
    
@endpush
