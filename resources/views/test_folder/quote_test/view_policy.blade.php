@extends('layouts.master')
@include('vendors.datatable')
@include('theme_include.sweet_alert')
@include('theme_include.toaster')
@include('theme_include.select')

@push('custom_css')





 
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/app-ecommerce-details.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')}}">
  {{-- <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/swiper.min.css')}}"> --}}

 

  @endpush

@section('content') 
    

    <x-policy-view   :data="$result_collection"/>          <!--- yhan  s controller is component ko pass krta and woh agy apny 2 components ko !-->


@endsection

@push('custom_script')



 <script src="{{asset('js/test_quote/find_quote_load.js')}}"></script>

 <script>
 $(function() {
  $('#bread_crumb').hide();
});
</script>

<!-- helper scripts -->
 <script src="{{asset('js/dynamic_ajax.js')}}"></script>
<script src="{{asset('js/test_quote/global_function.js')}}"></script>




<script>
    var asset="{{asset('')}}";
    var route_to_calculate_factor="{{route('test_quote.calculate_quote_riders')}}" 
    var formdata;
    feather.replace();
</script>
    

   

<script src="{{asset('app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}"></script>
{{-- <script src="{{asset('app-assets/vendors/js/extensions/swiper.min.js')}}"></script> --}}


<script src="{{asset('app-assets/js/scripts/pages/app-ecommerce-details.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/forms/form-number-input.js')}}"></script>

<!-- custom js for page -->
<script src="{{asset('js/test_quote/view/additional_option_change.js')}}"></script>
<script src="{{asset('js/test_quote/view/form_submit.js')}}"></script>
<script src="{{asset('js/test_quote/view/calculated_append.js')}}"></script>

@endpush
