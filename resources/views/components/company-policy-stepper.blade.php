<section class="horizontal-wizard">
    <div class="bs-stepper horizontal-wizard-example linear">
        <div class="bs-stepper-header" role="tablist">
            <div class="step active" data-target="#account-details" role="tab" id="account-details-trigger">
                <button type="button" class="step-trigger" aria-selected="true">
                    <span class="bs-stepper-box">1</span>
                    <span class="bs-stepper-label">
                        <span class="bs-stepper-title">Select Company</span>
                        <span class="bs-stepper-subtitle">View the company Details</span>
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
                    <span class="bs-stepper-box">2</span>
                    <span class="bs-stepper-label">
                        <span class="bs-stepper-title">Policy Details</span>
                        <span class="bs-stepper-subtitle">Add Policy </span>
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
                    <span class="bs-stepper-box">3</span>
                    <span class="bs-stepper-label">
                        <span class="bs-stepper-title">File uploading</span>
                        <span class="bs-stepper-subtitle">Add file of the insurance</span>
                    </span>
                </button>
            </div>
        </div>
        <div class="bs-stepper-content">
            <div id="account-details" class="content active dstepper-block" role="tabpanel"
                aria-labelledby="account-details-trigger">
                <div class="content-header">
                    <h5 class="mb-0">Company Details</h5>
                    <small class="text-muted">Select a company</small>
                </div>
                <form id="stepper1" novalidate="novalidate">
                    <div class="row">
                        <div class="mb-1">
                            <label class="form-label" for="company">Select a Company</label>
                            <select id="companiesNameSelect" class="select2 form-select" name="insurance_company_id"
                                placeholder="Some Company" required>
                                <option selected="" value="">Select Company</option>
                                @forelse($companies as $company)
                                <option value="{{ $company->id }}">{{ $company->name }}</option>
                                @empty
                                    <option value="">No company found.</option>
                                @endforelse 
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex justify-content-center my-1 loader-spin d-none">
                            <div class="spinner-border" role="status" aria-hidden="true"></div>
                        </div>
                        <div class="mb-1 render-here">
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
                    <h5 class="mb-0">Policy Details</h5>
                    <i class=' bxs-like  bx-flashing'> <small style="color:red">Fill out the requirements for policy approval.For updating rates of an existing policy, give same policy name, type and level </small></i> 
                </div>
                <x-policy-details-form />
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
                    <button class="btn btn-primary btn-next waves-effect waves-float waves-light  second_next">
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
                    <h5 class="mb-0">Uploading</h5>
                    <small>You can add the relevant file here.</small>
                </div>
                <x-policy-file-dz />
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
                    {{-- <button class="btn btn-success btn-submit waves-effect waves-float waves-light">Submit</button> --}}
                </div>

            </div>
        </div>
    </div>
</section>
