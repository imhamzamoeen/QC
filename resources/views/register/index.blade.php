@extends('layouts.master')
@push('custom_css')


    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/app-ecommerce.css')}}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/ui-feather.css') }}">

    <!-- form wizard -->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/wizard/bs-stepper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/form-wizard.css') }}">
    <style>
        /* The Image container */
        .img-hover-zoom {
            height: 250px;
            /* Modify this according to your need */
            overflow: hidden;
            /* Removing this will break the effects */
        }

        /* Blur-zoom Container */
        .img-hover-zoom--blur img {
            transition: transform 1s, filter 2s ease-in-out;
            filter: blur(2px);
            transform: scale(1.2);
        }

        /* The Transformation */
        .img-hover-zoom--blur:hover img {
            filter: blur(0);
            transform: scale(1);
        }

        /* Colorize-zoom Container */
        .img-hover-zoom--colorize img {
            transition: transform .5s, filter 1.5s ease-in-out;
            filter: grayscale(100%);
        }

        /* The Transformation */
        .img-hover-zoom--colorize:hover img {
            filter: grayscale(0);
            transform: scale(1.1);
        }

    </style>



@endpush

@push('extended-css')
@include('vendors.datatable')
@include('theme_include.sweet_alert')
@include('theme_include.toaster')
@include('theme_include.select')
@endpush

@section('content')

    <div class="row">
        <div class="mb-2 col-md-12">
            <x-register-new-user-component />
        </div>
    </div>

    <div class="row">
        <div class="mb-2 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Users</h4>
                </div>
                <div class="card-body" id="user_table_div">
                    <x-register-user-table />
                </div>
            </div>

            <x-register-edit-user-modal />
        </div>
    </div>

@endsection

@push('extended-js')
    <script src="{{ asset('js/dynamic_ajax.js') }}"></script>
    <!-- form wizard -->
    <script src="{{ asset('app-assets/vendors/js/forms/wizard/bs-stepper.min.js') }}"></script>
    <script src="{{ asset('js/registeration/form_submit.js') }}"></script>
    <script src="{{ asset('js/registeration/callbacks.js') }}"></script>
    <script src="{{ asset('js/registeration/register_edit_delete.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/forms/form-wizard-2.js') }}"></script>
    <script>
        var route = "{{ route('register.register') }}";
        var route_to_del_user = "{{ route('register.DelUser') }}";
        var asset="{{asset('')}}"
       var route_to_get_users= "{{ route('register.getUsers') }}";
       var results_object=[];
    </script>

{{-- <script src="{{ asset('js/registeration/table.js')}}"></script> --}}

@endpush
