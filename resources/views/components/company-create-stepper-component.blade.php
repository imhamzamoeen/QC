<section class="horizontal-wizard">
    <div class="bs-stepper horizontal-wizard-example linear">
        <div class="bs-stepper-header" role="tablist">
            <div class="step active" data-target="#account-details" role="tab" id="account-details-trigger">
                <button type="button" class="step-trigger" aria-selected="true">
                    <span class="bs-stepper-box">1</span>
                    <span class="bs-stepper-label">
                        <span class="bs-stepper-title">Company General Info</span>
                        <span class="bs-stepper-subtitle">Provide Company Basic Info</span>
                    </span>
                </button>
            </div>
            <div class="line">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-chevron-right font-medium-2">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>

            <div class="step " data-target="#formula-info" role="tab" id="formula-info-trigger">
                <button type="button" class="step-trigger" aria-selected="true">
                    <span class="bs-stepper-box">2</span>
                    <span class="bs-stepper-label">
                        <span class="bs-stepper-title">Company Calculation Formula</span>
                        <span class="bs-stepper-subtitle">How Policy Rate is Calculated</span>
                    </span>
                </button>
            </div>
            <div class="line">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-chevron-right font-medium-2">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>

            <div class="step" data-target="#personal-info" role="tab" id="personal-info-trigger">
                <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
                    <span class="bs-stepper-box">3</span>
                    <span class="bs-stepper-label">
                        <span class="bs-stepper-title">Company Factor And Rates </span>
                        <span class="bs-stepper-subtitle">Provide Company Facotrs and rates  </span>
                    </span>
                </button>
            </div>
            <div class="line">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-chevron-right font-medium-2">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>
            <div class="step" data-target="#address-step" role="tab" id="address-step-trigger">
                <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
                    <span class="bs-stepper-box">4</span>
                    <span class="bs-stepper-label">
                        <span class="bs-stepper-title">Riders</span>
                        <span class="bs-stepper-subtitle">Please Provide the Riders, if company supports</span>
                    </span>
                </button>
            </div>
        </div>
        <div class="bs-stepper-content">
            <div id="account-details" class="content active dstepper-block" role="tabpanel"
                aria-labelledby="account-details-trigger">
                <div class="content-header">
                    <h5 class="mb-0">Company Info</h5>
                    <i class=' fa fa-sticky-note  bx-flashing'> <small style="color:red">Provide basic details of the Company</small></i> 
               
                </div>
              
                    <x-form-create-company-component />
                <div class="d-flex justify-content-between">
                    <button class="btn btn-outline-secondary btn-prev waves-effect" disabled="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-arrow-left align-middle me-sm-25 me-0">
                            <line x1="19" y1="12" x2="5" y2="12"></line>
                            <polyline points="12 19 5 12 12 5"></polyline>
                        </svg>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-primary btn-next waves-effect waves-float waves-light">
                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-arrow-right align-middle ms-sm-25 ms-0">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </button>
                </div>
            </div>

            <div id="formula-info" class="content" role="tabpanel" aria-labelledby="formula-info-trigger">
                <div class="content-header">
                    <h5 class="mb-0">Company Formula Details</h5>
                    <i class=' fa fa-sticky-note  bx-flashing'> <small style="color:red">Provide How Policy Rate is calculated withouting Riders Calculation.Please Recheck All steps before moving On </small></i> 
                </div>
     
               <x-company-formula-detail-component />
                <div class="d-flex justify-content-between">
                    <button class="btn btn-primary btn-prev waves-effect waves-float waves-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-arrow-left align-middle me-sm-25 me-0">
                            <line x1="19" y1="12" x2="5" y2="12"></line>
                            <polyline points="12 19 5 12 12 5"></polyline>
                        </svg>
                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-primary btn-next waves-effect waves-float waves-light">
                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-arrow-right align-middle ms-sm-25 ms-0">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </button>
                </div>
            </div>
          

            <div id="personal-info" class="content" role="tabpanel" aria-labelledby="personal-info-trigger">
                <div class="content-header">
                    <h5 class="mb-0">Factors Details</h5>
                    <i class=' fa fa-sticky-note  bx-flashing'> <small style="color:red">Fill out the Factors details of the insurance company</small></i> 
                </div>
               <x-company-factors-detail-component />
                <div class="d-flex justify-content-between">
                    <button class="btn btn-primary btn-prev waves-effect waves-float waves-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-arrow-left align-middle me-sm-25 me-0">
                            <line x1="19" y1="12" x2="5" y2="12"></line>
                            <polyline points="12 19 5 12 12 5"></polyline>
                        </svg>
                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-primary btn-next waves-effect waves-float waves-light">
                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-arrow-right align-middle ms-sm-25 ms-0">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </button>
                </div>
            </div>
          
            <div id="address-step" class="content" role="tabpanel" aria-labelledby="address-step-trigger">
                <div class="content-header">
                    <h5 class="mb-0">Rider</h5>
                    <i class=' fa fa-sticky-note  bx-flashing'> <small style="color:red">For the Rider, not Supported by the company you should remove that entry rows and then submit, </small></i> 
                 
                </div>
              <x-company-riders-detail-component />
                <div class="d-flex justify-content-between">
                    <button class="btn btn-primary btn-prev waves-effect waves-float waves-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-arrow-left align-middle me-sm-25 me-0">
                            <line x1="19" y1="12" x2="5" y2="12"></line>
                            <polyline points="12 19 5 12 12 5"></polyline>
                        </svg>
                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-success btn-submit waves-effect waves-float waves-light">Submit</button>
                </div>

            </div>
        </div>
    </div>
</section>
