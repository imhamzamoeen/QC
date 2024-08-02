<div id="account-details" class="content" role="tabpanel" aria-labelledby="account-details-trigger">
    <div class="content-header">
        <h5 class="mb-0">Personal Detail</h5>
        <small class="text-muted">Enter Your Personal Details.</small>
    </div>
    <form id="user_details">
        <div class="row">
            <div class="mb-1 col-md-6">
                <label class="form-label" for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First name" />
            </div>
            <div class="mb-1 col-md-6">
                <label class="form-label" for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last name" />
            </div>

        </div>
        <div class="row">
            <div class="mb-1 col-md-6">
                <label class="form-label" for="phone-number">Phone Number</label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text">US (+)</span>
                    <input type="text" class="form-control phone-number-mask" name="phone" placeholder="1 234 567 8900"
                        id="phone-number" autocomplete="off" />
                </div>
            </div>
            <div class="mb-1 col-md-6">
                <label class="form-label" for="email"> Email</label>
                <input type="email" name="user_email" id="user_email" class="form-control"
                    placeholder="info@email.com" aria-label="" />
            </div>
        </div>
        <div class="row ">
                <x-dropdown-component />
        </div>
       
        <div class="row">
            <div class="mb-2 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Gender</h4>
                    </div>
                    <div class="card-body">
                        <div class="row custom-options-checkable g-1">
                            <div class="col-md-6">
                                <input class="custom-option-item-check" type="radio" name="gender"
                                    id="customOptionsCheckableRadiosWithIcon2" value="male" checked />
                                <label class="custom-option-item text-center text-center p-1"
                                    for="customOptionsCheckableRadiosWithIcon2">
                                    <i data-feather="user" class="font-large-1 mb-75"></i>
                                    <span class="custom-option-item-title h4 d-block">Male</span>
                                    <small>A great man is hard on himself; a small man is hard on others</small>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <input class="custom-option-item-check" type="radio" name="gender"
                                    id="customOptionsCheckableRadiosWithIcon3" value="female" />
                                <label class="custom-option-item text-center p-1"
                                    for="customOptionsCheckableRadiosWithIcon3">
                                    <i data-feather="users" class="font-large-1 mb-75"></i>
                                    <span class="custom-option-item-title h4 d-block">Female</span>
                                    <small>Keep your heels, head, and standards high.</small>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="display: none" >
                <div class="mb-1 col-md-6 " id="height" >
                    <label class="form-label" for="">height</label>
                    <select class="select2 w-100  form-select height-select" id="height">
                        <option value="" disabled>Choose Height</option>
                    </select>
                </div>

                <div class="mb-1 col-md-6 " id="weight" >
                    <label class="form-label" for="">weight</label>
                    <select class="select2 w-100  form-select weight-select" id="weight">
                        <option value="" disabled>Choose weight</option>
                    </select>
                </div>  
        </div>
       
        <div class="row company_next_option_div"  >
        
            <div class="mb-1 col-md-12 policy_type_div">
                <label class="form-label" for="features">Select Policy Category </label>
                <select class="form-select select2" name="policy_type" id="policy_type">
                    <option label="" disabled selected>Select a Policy type </option>
                    <option value="whole">Whole Life</option>
                    <option value="term">Term Life</option>
                </select>
            </div>
            <div class="mb-1 col-md-6 policy_level_div">
                <label class="form-label" for="features">Select Level  </label>
                <select class="form-select select2" name="policy_level" id="policy_level">
                    <option label=""  disabled selected>Select Level </option>
                    <option value="immediate">Immediate</option>
                    <option value="graded">Graded</option>
                    <option value="ROP2Y">ROP 2 Years</option>
                    <option value="ROP3Y">ROP 3 Years</option>
                    <option value="limited">10pay/20pay/Limited</option>
                    <option value="term">Term</option>
                </select>
            </div>
          
        </div>
        <div class="row">
            <div class="mb-1 col-md-6">
                <label class="form-label" for="username">Age</label>
                <div class="demo-inline-spacing">
                    <div class="input-group" style="width:100%;margin-top:1.5px;">
                        <input type="number" name="age" class="touchspin-min-max " value="50" />
                    </div>
                    <span id="errage"></span>
                </div>
            </div>
            <div class="mb-1 col-md-6" id="coverage_for_whole">
                <label class="form-label" for="numeral-formatting">Coverage</label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text">$</span>
                    <input type="text" class="form-control numeral-mask" name="coverage" placeholder="10,000" id="numeral-formatting" />
                </div>
            </div>
            <div class="mb-1 col-md-6" id="coverage_for_term" style="display: none">
                <label class="form-label" for="numeral-formatting">Coverage</label>
                <select class="select2 w-100" id="coverage">
                    <option value="" selected>choose coverage </option>
                    <option value="10000">$10000</option>
                    <option value="20000">$20000</option>
                    <option value="30000">$30000</option>
                    <option value="40000">$40000</option>
                    <option value="50000">$50000</option>
                </select>
            </div>
        </div>
        <div class="row" id="smoking_div" style="display: block">
            <div class="mb-2 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Smoker?</h4>
                    </div>
                    <div class="card-body">
                        <div class="row custom-options-checkable g-1">

                            <div class="col-md-6">
                                <input class="custom-option-item-check" type="radio" name="smoker_status"
                                    id="customOptionsCheckableRadios1" value="smoker" checked />
                                <label class="custom-option-item p-1" for="customOptionsCheckableRadios1">
                                    <span class="d-flex justify-content-between flex-wrap mb-50">
                                        <span class="fw-bolder">Smoker</span>
                                        <span class="fw-bolder" style="color: red">🚬</span>
                                    </span>
                                    <small class="d-block">Yes i am a tobacco user</small>
                                </label>
                            </div>

                            <div class="col-md-6">
                                <input class="custom-option-item-check" type="radio" name="smoker_status"
                                    id="customOptionsCheckableRadios2" value="non-smoker" />
                                <label class="custom-option-item p-1" for="customOptionsCheckableRadios2">
                                    <span class="d-flex justify-content-between flex-wrap mb-50">
                                        <span class="fw-bolder">Non Smoker</span>
                                        <span class="fw-bolder" style="color: red">🚭</span>
                                    </span>
                                    <small class="d-block">No, i don't smoke .</small>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       

    </form>
    <div class="d-flex justify-content-between">
        <button class="btn btn-outline-secondary btn-prev" disabled>
            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
        </button>
        <button class="btn btn-primary btn-next" id="filter_1_button">
            <span class="align-middle d-sm-inline-block d-none">Next</span>
            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
        </button>
    </div>
</div>
