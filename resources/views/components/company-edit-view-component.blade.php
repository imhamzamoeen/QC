
<section class="horizontal-wizard">
    <div class="bs-stepper horizontal-wizard-example linear">
        <div class="bs-stepper-header" role="tablist">
            <div class="step active" data-target="#account-details" role="tab" id="account-details-trigger">
                <button type="button" class="step-trigger" aria-selected="true">
                    <span class="bs-stepper-box">1</span>
                    <span class="bs-stepper-label">
                        <span class="bs-stepper-title">Select Company</span>
                        <span class="bs-stepper-subtitle">Choose an Insurance Company</span>
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
            <div class="step" data-target="#update-step" role="tab" id="address-step-trigger">
                <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
                    <span class="bs-stepper-box">2</span>
                    <span class="bs-stepper-label">
                        <span class="bs-stepper-title">Update</span>
                        <span class="bs-stepper-subtitle">Update accoridng to your needs</span>
                    </span>
                </button>
            </div>
        </div>
        <div class="bs-stepper-content">
            <div id="account-details" class="content active dstepper-block" role="tabpanel"
                aria-labelledby="account-details-trigger">
                <div class="content-header">
                    <h5 class="mb-0">Options</h5>
                    <small class="text-muted">Choose an insurance company with update type</small>
                </div>
                <form id="stepper1" novalidate="novalidate">
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="company">Select a Company</label>
                            <select id="companiesNameSelect" class="select2 form-select company_select"
                                name="insurance_company_id" placeholder="Some Company" required>
                                <option selected="" value="">Select Company</option>
                                @forelse($companies as $company)
                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                @empty
                                    <option value="">No company found.</option>
                                @endforelse
                            </select>
                         
                        </div>
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="company">Select a Update Option</label>
                            <select id="UpdateOptionSelect" class="select2 form-select update_option"
                                name="update_option" placeholder="Some Option" required>
                                <option selected="" value="">Select Option</option>
                                <option value="formula">Formula</option>
                                <option value="factors">Factors</option>
                                <option value="riders">Riders</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex justify-content-center my-1 loader-spin d-none">
                            <div class="spinner-border" role="status" aria-hidden="true"></div>
                        </div>
                        <div class="mb-1 render-here" style="display:none">
                        </div>
                    </div>
                </form>
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
                    <button class="btn btn-primary btn-next waves-effect waves-float waves-light  second_next_button">
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
           
            <!-- component for fomrula update -->
            <div id="update-step" class="content" role="tabpanel" aria-labelledby="address-step-trigger">
                <div class="content-header">
                    <h5 class="mb-0 update_haeding" >Update formula </h5>
                    <i class='fa fa-comment   bx-flashing'> <small style="color:red">Update the steps carefully , </small></i>
                    
                </div>
                <x-company-update-component/>
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
                    <div class="submit_buttton">
             <button class="btn btn-success btn-submit waves-effect waves-float waves-light">Submit</button>
                    </div>
                  
                </div>
            </div>

         

           

        </div>
    </div>
</section>
