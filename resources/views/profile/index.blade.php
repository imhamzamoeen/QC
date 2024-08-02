@extends('layouts.master')

@push('extended-css')
    @include('vendors.toaster')
    @include('vendors.sweet-alerts')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/page-profile.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/profile/change_profile.css') }}">
@endpush

@section('content')
    <x-profile-view-component />
@endsection

@push('extended-js')
<script>
    var asset = "{{ asset('') }}"
    var route_to_update_pic="{{route('profile.pic_update')}}";
    var formdata=new FormData();
</script>

    <script src="{{ asset('js/dynamic_ajax.js') }}"> </script>
    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/pages/page-profile.js') }}"></script>
<script src="{{ asset('js/profile/change_pic.js') }}"></script>
<script src="{{ asset('js/profile/form_submit.js') }}"></script>
<script src="{{ asset('js/profile/callback.js') }}"></script>


@endpush
