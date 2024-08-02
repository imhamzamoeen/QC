@push('extended-css')
    @include('vendors.datetime-picker')
    @include('vendors.sliders')
@endpush

<form id="stepper2" novalidate="novalidate">
    <div class="row">
        <div class="col-md-4 col-12">
            <div class="mb-1">
                <label class="form-label" for="company">Policy File Name</label>
                <input type="text" class="form-control" name="policy_name" placeholder="Some Policy Name" required>
            </div>
            <small>Choose null from next,if the file have one thing in header</small>
        </div>
        <div class="col-md-4 col-12">
            <div class="mb-1">
                <label class="form-label" for="company">File Name Gender Info</label>
                <select class="select2 form-select" name="file_gender_info" required>
                    <option value="" disabled>Please select Gender info option</option>
                    <option selected>NULL</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="male female">Male & Female </option>
                </select>
                <small>This option will be appended to file name.So choose according to file header</small>
            </div>
        </div>
        <div class="col-md-4 col-12">
            <div class="mb-1">
                <label class="form-label" for="company">File Name Tobacco Status Info</label>
                <select class="select2 form-select" name="file_tobacco_status_info" required>
                    <option value="" disabled>Please select a Tobacco Status</option>
                    <option selected>NULL</option>
                    <option value="smoker">Smoker</option>
                    <option value="non-smoker">Non-Smoker</option>
                    <option value="smoker non-smoker">Smoker & Non-Smoker</option>
                </select>
                <small>This option will be appended to file name.So choose according to file header</small>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-12">
            <div class="mb-1">
                <label class="form-label">Policy Type</label>
                <select class="select2 form-select" name="policy_type" required>
                    <option value="" disabled selected>Please select a policy type</option>
                    <option value="whole">Whole</option>
                    <option value="term">Term</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="mb-1">
                <label class="form-label">Level</label>
                <select class="select2Tag form-select" name="level" required>
                    <option value="" selected disabled>Please select a level</option>
                    <option value="immediate">Immediate</option>
                    <option value="graded">Graded</option>
                    <option value="ROP2Y">ROP 2 Years</option>
                    <option value="ROP3Y">ROP 3 Years</option>
                    <option value="limited">Limitted</option>
                    <option value="term">Term</option>
                </select>
            </div>
        </div>
        <div class="col-md-12 col-12">
            <div class="mb-1">
                <label class="form-label" for="issue_date">Policy Issue Date</label>
                <input type="text" class="form-control flatpickr-basic" name="issue_date" placeholder="YYYY-MM-DD"
                    required>
            </div>
        </div>
        <div class="col-md-12 col-12">
            {{-- <div class="mb-1">
                <label class="form-label" for="company">Policy Key Fetures</label>
                <textarea data-length="20" class="form-control char-textarea active" id="textarea-counter"
                    name="highlights" rows="10" placeholder="Some highlights"
                    style="height: 100px; color: rgb(78, 81, 84);"></textarea>
            </div> --}}

            <!--First repeater for whole -->
            <div class="invoice-repeater" id="policy_feature_div">
                <div class="content-body">
                    <section class="form-control-repeater">
                        <div class="row">
                            <!-- Invoice repeater -->
                            <div class="col-12">
                                <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Policy Features </h4>
                                </div>

                                <div class="card-body">



                                    <div data-repeater-list="Company_features">
                                        <div data-repeater-item>
                                            <div class="row d-flex align-items-end">
                                                <div class="col-md-8 col-12">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="feature">Feature </label>
                                                        <input type="text" class="form-control feature_field"
                                                            name="highlights" aria-describedby="Feature"
                                                            placeholder="Feature" />
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-12 ">
                                                    <div class="mb-1">
                                                        <button   data-repeater-delete type="button"
                                                        class="btn btn-flat-danger waves-effect">
                                                        <i data-feather="x" class="me-25"></i>
                                                        <span>Remove This Feature</span>
                                                    </button>
                                                        {{-- <button class="btn btn-outline-danger text-nowrap px-1"
                                                            data-repeater-delete type="button">
                                                            <i data-feather="x" class="me-25"></i>
                                                            <span>Remove Feature</span>
                                                        </button> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <hr />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">

                                            <button data-repeater-create type="button"
                                                class="btn btn-flat-success waves-effect add_more_button">
                                                <i data-feather="plus" class="me-25"></i>
                                                <span>Add More Feture</span>
                                            </button>
                                            {{-- <button class="btn btn-icon btn-info" type="button" data-repeater-create>
                                            <i data-feather="plus" class="me-25"></i>
                                            <span>Add New Feature</span>
                                        </button> --}}
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                            <!-- /Invoice repeater -->
                        </div>
                    </section>

                </div>
            </div>
            <!--First repeater for whole End -->
        </div>
        {{-- <div class="row">
            
        </div> --}}
    </div>
    <div class="row">
        <div class="d-flex justify-content-center my-1 loader-spin" style="display: none">
            <div class="spinner-border" role="status" aria-hidden="true"></div>
        </div>
    </div>
</form>
