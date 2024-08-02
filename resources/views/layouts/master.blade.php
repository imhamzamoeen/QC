<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="QC is a platform to online calculate rates of policies provided by insurance companies">
    <meta name="keywords" content="QC, Quote, Calculator , policies, insurance, Agency, IMO, Organization, Insurance , BPO, PrimeIT, Prime BPO,  web app">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ env('APP_NAME') }} - {{ ucwords(request()->segment(count(request()->segments()))) }} </title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="apple-touch-icon" href="{{ asset('assets/images/Quote calculator.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/Quote calculator.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="{{ asset('app-assets/css/boxicons.min.css') }}" rel="stylesheet">


    <!-- BEGIN: Vendor CSS-->
    @include('vendors.toaster')
    @stack('extended-css')
    <!-- END: Custom CSS-->
    @stack('custom_css')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/form-validation.css') }}">

    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/semi-dark-layout.css') }}">


    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">



</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">



    @if (Route::currentRouteName() != 'support.chat')
        @include('vendors.window-load')
        <x-nav-bar-component></x-nav-bar-component>
        <x-side-bar-component></x-side-bar-component>
    @endif

    <!-- BEGIN: Content-->
    <div class="app-content @if (Route::currentRouteName() != 'support.chat') content @endif ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">

                @if (Route::currentRouteName() != 'support.chat')
                    <x-bread-crumb-component />
                @endif

                @yield('content')

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <x-footer-component></x-footer-component>

    <!-- BEGIN: Vendor JS-->

        <script src="{{ asset('app-assets/vendors/js/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
        <script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
        <script type="module" src="{{ asset('app-assets/js/core/app.js') }}"></script>
        <script src="{{ asset('assets/js/custom/app.js') }}"></script>
        <script src="{{ asset('app-assets/js/scripts/extensions/ext-component-blockui.js') }}"></script>
        <script src="{{ asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('app-assets/js/scripts/forms/form-validation.js') }}"></script>
        <script src="{{ asset('assets/js/custom/ajaxCall.js') }}"></script>
        <script src="{{ asset('assets/js/custom/auth/dynamic.js') }}"></script>
        <script src="{{ asset('assets/js/custom/validation-rules.js') }}"></script>
        <script src="{{ asset('js/delete.js') }}"></script>
        <script src="{{ asset('js/global.js') }}"></script>

        <!-- END: Theme JS-->
        @include('vendors.window-load')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"
            integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).ajaxComplete(function() {
                // Required for Bootstrap tooltips in DataTables
                $('[data-toggle="tooltip"]').tooltip({
                    "html": true,
                    "delay": {
                        "show": 1000,
                        "hide": 0
                    },
                });
            });
        </script>
        <!-- The below Script welcome the logged in user -->

        <script>
            let SOME_NAME = 'haamzaaya';
            let check = "{{ session('login') }}";
            let APP_NAME = "{{ env('APP_NAME') }}";
        </script>
        <script src="{{ asset('assets/js/custom/first_login_welcome.js') }}"></script>
        {{ session(['login' => false]) }}
        <!-- Sets the session variable login to false so that one time welcome message is shown -->

    @stack('custom_script')
    @stack('extended-js')
    <!-- -->
    <!-- Sets the session variable login to false so that one time welcome message is shown -->
    <!-- -->
</body>
<!-- END: Body-->

</html>
