@extends('layouts.master')
@include('vendors.datatable')
@include('theme_include.sweet_alert')
@include('theme_include.toaster')
@include('theme_include.select')

@push('custom_css')


<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/nouislider.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/extensions/ext-component-sliders.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/app-ecommerce.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/ui-feather.css')}}">

<!-- form wizard -->
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/wizard/bs-stepper.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/form-wizard.css') }}">

  <!-- custom css for sponsered cards  -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/Sponsered_cards/sponsered_cards.css')}}">

  @endpush

@section('content') 
    
     <!-- Horizontal Wizard -->
     <section class="horizontal-wizard">
        <div class="bs-stepper horizontal-wizard-example">
            <div class="bs-stepper-header" role="tablist">
                <div class="step" data-target="#account-details" role="tab" id="account-details-trigger">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">1</span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">User Info</span>
                            <span class="bs-stepper-subtitle">Give us your details</span>
                        </span>
                    </button>
                </div>
                <div class="line">
                    <i data-feather="chevron-right" class="font-medium-2"></i>
                </div>
                <div class="step" data-target="#personal-info" role="tab" id="personal-info-trigger">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">2</span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Quotes</span>
                            <span class="bs-stepper-subtitle">find Quotes for you</span>
                        </span>
                    </button>
                </div>
            
           
            </div>
            <div class="bs-stepper-content">
                    <x-policy-choose-component/>

                    <x-quote-choose-component  />          <!--- yhan  s controller is component ko pass krta and woh agy apny 2 components ko !-->
                   
            </div>
        </div>
    </section>
    <!-- /Horizontal Wizard -->
   


@endsection

@push('custom_script')
 <script src="{{asset('app-assets/js/scripts/pages/app-ecommerce.js')}}"></script>
 <script src="{{ asset('app-assets/vendors/js/extensions/wNumb.min.js')}}"></script>
 <script src="{{ asset('app-assets/vendors/js/extensions/nouislider.min.js')}}"></script>
 <script src="{{asset('js/test_quote/find_quote_load.js')}}"></script>


 <script src="{{asset('app-assets/js/scripts/ui/ui-feather.js')}}"></script>

 <script src="{{asset('js/test_quote/filter_query.js')}}"></script>
 <script src="{{asset('js/test_quote/filter_forms.js')}}"></script>
 <script src="{{asset('js/test_quote/ajax_pagination.js')}}"></script>
 <script src="{{asset('js/dynamic_ajax.js')}}"></script>
<script>
    var route="{{route('test_quote.filter')}}";
    var val=true;
    var asset="{{asset('images/Insurance_Companies')}}";
    var route_to_filter="{{route('test_quote.get_result')}}"
    var sub_cateogry_route="{{route('test_quote.get_policies_types')}}"
    var tempObj;
    var route_to_lead="{{route('test_quote.lead_submit')}}"
    var route_to_get_company_from_state="{{route('Information.get_company_from_state')}}"
    var get_policy_type_route="{{route('Information.get_policy_type_from_company')}}"

    var route_to_get_levels_of_policy_type="{{route('seniorhard.get_sub_policy_types')}}"
    var senior_get_types="{{route('seniorhard.get_sub_policy_types')}}"
    var results_object=[];

  
    
    var formData = new FormData(); // Currently empty
    feather.replace();
</script>
    
<!-- form wizard -->
<script src="{{ asset('app-assets/js/scripts/forms/form-wizard.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/forms/wizard/bs-stepper.min.js') }}"></script>
   

<!-- touchspin -->
<script src="{{asset('app-assets/js/scripts/forms/form-number-input.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}"></script>

<!-- input mask woh us k number k lie  -->
<script src="{{asset('app-assets/js/scripts/forms/form-input-mask.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/forms/cleave/cleave.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js')}}"></script>


<!-- custom js for page -->
<script src="{{asset('js/test_quote/quote_finding_info_form_changing.js')}}"></script>
<script src="{{asset('js/test_quote/lead_generation_quote.js')}}"></script>

<script src="{{asset('js/test_quote/additional_option_change.js')}}"></script>
<script src="{{asset('js/test_quote/page_load.js')}}"></script>
<script src="{{asset('js/test_quote/global_function.js')}}"></script>



<script src="{{asset('js/test_quote/senior_hard_code.js')}}"></script>

<!-- commented scripts that were being used before that -->
{{-- <script src="{{asset('js/test_quote/get_level_of_company.js')}}"></script> --}}
{{-- <script src="{{asset('js/test_quote/company_dropdown.js')}}"></script> --}}
{{-- <script src="{{asset('js/test_quote/get_policy.js')}}"></script> --}}
@endpush
