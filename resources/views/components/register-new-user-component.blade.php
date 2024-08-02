 <!-- Modern Vertical Wizard -->
 <section class="modern-vertical-wizard">
    <div class="bs-stepper vertical wizard-modern modern-vertical-wizard-example linear">
        <div class="bs-stepper-header">
            <div class="step" data-target="#account-details-vertical-modern" role="tab"
                id="account-details-vertical-modern-trigger">
                <button type="button" class="step-trigger">
                    <span class="bs-stepper-box">
                        <i data-feather="file-text" class="font-medium-3"></i>
                    </span>
                    <span class="bs-stepper-label">
                        <span class="bs-stepper-title">Basic Detail</span>
                        <span class="bs-stepper-subtitle">Setup User's Personal Details</span>
                    </span>
                </button>
            </div>
            <div class="step" data-target="#personal-info-vertical-modern" role="tab"
                id="personal-info-vertical-modern-trigger">
                <button type="button"  class="step-trigger">
                    <span class="bs-stepper-box">
                        <i data-feather="user" class="font-medium-3"></i>
                    </span>
                    <span class="bs-stepper-label">
                        <span class="bs-stepper-title">Additional </span>
                        <span class="bs-stepper-subtitle">Add Additional info</span>
                    </span>
                </button>
            </div>
        </div>
        <div class="bs-stepper-content">
            <div id="account-details-vertical-modern" class="content" role="tabpanel"
                aria-labelledby="account-details-vertical-modern-trigger">
                <form id="register-user-personal-detail-form" >
                    <div class="content-header">
                        <h5 class="mb-0">Personal Details</h5>
                        <small class="text-muted">Setup User's Personal Details.</small>
                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="vertical-modern-username">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                                placeholder="Sir" aria-describedby="name" tabindex="1" required />
                        </div>
                        <div class="mb-1 col-md-6">
                            <label class="form-label" for="vertical-modern-email">Email</label>
                            <input type="email" class="form-control" id="login-email" name="email"
                                value="{{ old('email') }}" placeholder="example@example.com"
                                aria-describedby="login-email" tabindex="1" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-12">
                            <div class="input-group input-group-merge form-password-toggle">
                                <input type="password" class="form-control form-control-merge" id="login-password"
                                    name="password" tabindex="2"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="login-password" required />
                                <span class="input-group-text cursor-pointer"><i data-feather="eye-off"></i></span>
                            </div>
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
            <div id="personal-info-vertical-modern" class="content" role="tabpanel"
                aria-labelledby="personal-info-vertical-modern-trigger">
                <div class="content-header">
                    <h5 class="mb-0">Additional Info</h5>
                    <small>Add addtional details.</small>
                </div>
                <form id="register-additional-detail-form">
                    <div class="row">
                        <div class="mb-2 col-md-12">
                            <select class="select2 w-100" name="user_type" id="sub_policy_type" required>

                                <option label="" selected disabled>Select a user_type </option>
                                <option value="agent">Agent</option>
                                <option value="admin">Admin</option>
                                <option value="super_admin">Super Admin </option>

                            </select>
                        </div>

                    </div>
                    <div class="row" id="preview_div" style="display:none">
                        <div class="mb-1 col-md-6">
                            <img src="" id="preview_image" alt="uploaded image"
                                style="max-height:300px;max-width:300px">
                        </div>

                    </div>
                    <div class="row">
                        <div class="mb-1 col-md-6">
                            <input type="file" class="form-control" id="file" name="file"
                                onclick="document.getElementById('preview_div').style.display = 'block';"
                                onchange="document.getElementById('preview_image').src = window.URL.createObjectURL(this.files[0])"
                                aria-describedby="file" tabindex="1" required />
                        </div>
                        <div class="mb-1 col-md-6">
                        </div>
                    </div>
                    <div class="row " id="preview_div" style="display:none">
                        <div class="mb-1 col-md-6 zoom"  >
                            <img src="" id="preview_image" alt="uploaded image">
                        </div>

                    </div>
                </form>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-primary btn-prev">
                        <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-primary btn-submit">
                        <span class="align-middle d-sm-inline-block d-none">Submit</span>
                        <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                    </button>
                </div>

            </div>


        </div>
    </div>
</section>
<!-- /Modern Vertical Wizard -->
