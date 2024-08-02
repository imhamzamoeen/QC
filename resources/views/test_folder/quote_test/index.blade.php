@extends('layouts.master')
@include('vendors.datatable')
@include('theme_include.sweet_alert')
@include('theme_include.select')

@push('custom_css')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/wizard/bs-stepper.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/form-wizard.css') }}">
@endpush

@section('content')
  
        <h3>Quote Add </h3>
        <p class="mb-2">
            Give us details and we will Add your company
        </p>

     
    <div class="row " >
               <!-- Horizontal Wizard -->
               <section class="horizontal-wizard">
                <div class="bs-stepper horizontal-wizard-example">
                    <div class="bs-stepper-header" role="tablist">
                        <div class="step" data-target="#account-details" role="tab" id="account-details-trigger">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-box">1</span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Company Info</span>
                                    <span class="bs-stepper-subtitle">Setup Company Details</span>
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
                                    <span class="bs-stepper-title">Policy Info</span>
                                    <span class="bs-stepper-subtitle">Add Policy info</span>
                                </span>
                            </button>
                        </div>
                        <div class="line">
                            <i data-feather="chevron-right" class="font-medium-2"></i>
                        </div>
                        <div class="step" data-target="#address-step" role="tab" id="address-step-trigger">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-box">3</span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Policy Features</span>
                                    <span class="bs-stepper-subtitle">Add Points of policy</span>
                                </span>
                            </button>
                        </div>
                        <div class="line">
                            <i data-feather="chevron-right" class="font-medium-2"></i>
                        </div>
                        <div class="step" data-target="#social-links" role="tab" id="social-links-trigger">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-box">4</span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Image</span>
                                    <span class="bs-stepper-subtitle">Image of company</span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="bs-stepper-content">
                        <div id="account-details" class="content" role="tabpanel" aria-labelledby="account-details-trigger">
                            <div class="content-header">
                                <h5 class="mb-0">Company Details</h5>
                                <small class="text-muted">Enter Your Company Details.</small>
                            </div>
                            <form id="comapny_details">
                                <div class="row">
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="username">Company Name</label>
                                        <input type="text" name="company_name" id="company_name" class="form-control" placeholder="company name" />
                                    </div>
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" name="company_email" id="company_email" class="form-control" placeholder="info@email.com" aria-label="" />
                                    </div>
                                </div>
                            </form>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-secondary btn-prev" disabled>
                                    <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-primary btn-next">
                                    <span class="align-middle d-sm-inline-block d-none">Next</span>
                                    <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                </button>
                            </div>
                        </div>
                        <div id="personal-info" class="content" role="tabpanel" aria-labelledby="personal-info-trigger">
                            <div class="content-header">
                                <h5 class="mb-0">Basic Policy Info</h5>
                                <small>Enter Basic info of policy.</small>
                            </div>
                            <form id="policy_info">
                                <div class="row">
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="first-name">Basic amount</label>
                                        <input type="text" name="basic_amount"  id="basic_amount" class="form-control numeral-mask" placeholder="5000" />
                                    </div>
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="age">Age Duration </label>
                                        <select class="select2 w-100" name="age" id="age">
                                            <option label=" "></option>
                                            <option value="20-30">20-30</option>
                                            <option value="20-40">20-40</option>
                                            <option value="20-50">20-50</option>
                                            <option value="20-60">20-60</option>
                                            <option value="20-70">20-70</option>
                                            <option value="20-80">20-80</option>
                                            <option value="30-40">30-40</option>
                                            <option value="30-50">30-50</option>
                                            <option value="30-60">30-60</option>
                                            <option value="30-70">30-70</option>
                                            <option value="30-80">30-80</option>
                                            <option value="40-50">40-50</option>
                                            <option value="40-60">40-60</option>
                                            <option value="40-70">40-70</option>
                                            <option value="40-80">40-80</option>
                                            <option value="50-60">50-60</option>
                                            <option value="50-70">50-70</option>
                                            <option value="50-80">50-80</option>
                                            <option value="60-70">60-70</option>
                                            <option value="60-80">60-80</option>
                                            <option value="70-80">70-80</option>
                                        </select>
                                    </div>
                                </div>
                             
                            </form>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-primary btn-prev">
                                    <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-primary btn-next">
                                    <span class="align-middle d-sm-inline-block d-none">Next</span>
                                    <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                </button>
                            </div>
                        </div>
                        <div id="address-step" class="content" role="tabpanel" aria-labelledby="address-step-trigger">
                            <div class="content-header">
                                <h5 class="mb-0">Policy Features</h5>
                                <small>Enter Your Policy Features.</small>
                            </div>
                            <form id="policy_features">
                                <div class="row">
                                    <div class="mb-2 col-md-12">
                                        <label class="form-label" for="features">Select Features </label>
                                        <select class="select2 w-100" name="features[]" multiple="multiple" id="features">
                                            <option label="">Select a Policy </option>
                                            <option value="Policy Never Expires">Policy Never Expires</option>
                                            <option value="Premiums Never Increase">Premiums Never Increase</option>
                                            <option value="Coverage Never Decreases">Coverage Never Decreases</option>
                                            <option value="No 2 Year Waiting Period">No 2 Year Waiting Period</option>
                                            <option value="No Medical Exam Required">No Medical Exam Required</option>
                                            <option value="Whole Life Insurance">Whole Life Insurance</option>
                                        </select>
                                    </div>
                                </div>
                              
                            </form>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-primary btn-prev">
                                    <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-primary btn-next">
                                    <span class="align-middle d-sm-inline-block d-none">Next</span>
                                    <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                </button>
                            </div>
                        </div>
                        <div id="social-links" class="content" role="tabpanel" aria-labelledby="social-links-trigger">
                            <div class="content-header">
                                <h5 class="mb-0">Image </h5>
                                <small>Image of your company.</small>
                            </div>
                            <form id="image">
                                <div class="row">
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="image">Image</label>
                                        <input type="file" id="pic" name="pic" class="form-control"  onchange="document.getElementById('preview_image').src = window.URL.createObjectURL(this.files[0])"/>
                                    </div>
                                    <div class="mb-1 col-md-6">
                                        <img src="{{asset('images/data/dummy-logo.png')}}" style="width:200px;height:200px;"   accept="image/png, image/jpeg" id="preview_image" alt="uploaded image">
                                    </div>
                                  
                                </div>
                               
                            </form>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-primary btn-prev">
                                    <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-success btn-submit-form">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Horizontal Wizard -->
     </div>
@endsection

@push('custom_script')
<script>
    let route_to_add_quote="{{route('test_quote.store')}}";
    let val=true;
 
</script>
<script src="{{ asset('app-assets/js/scripts/forms/form-wizard.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/forms/wizard/bs-stepper.min.js') }}"></script>
<!-- for form masks -->
<script src="{{asset('app-assets/vendors/js/forms/cleave/cleave.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/forms/form-input-mask.js')}}"></script>
<!-- custom js that handle all the forms -->
<script src="{{asset('js/dynamic_ajax.js')}}"></script>
<script src="{{asset('js/test_quote/submit_quote.js')}}"></script>

@endpush
