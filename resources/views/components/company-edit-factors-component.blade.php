<form id="factor_detail_form">

    <section id="multiple-column-form">

        <div class="row">
          
            <div class="col-lg-6">
                <div class="card">
                   
                    <div class="card-body">
                        <div class="row custom-options-checkable g-1">

                            <div class="col-md-12">
                                <input class="custom-option-item-check factor_checkbox" type="checkbox"
                                    name="whole_factor_check" @if ($company_with_factor->FACTORS->whole_factor_check == 1) checked @endif
                                    id="customOptionsCheckableCheckboxWithIcon1" value="whole_factor" />
                                <label class="custom-option-item text-center p-1"
                                    for="customOptionsCheckableCheckboxWithIcon1">
                                    <i class="fa fa-envelope-open bx-burst" aria-hidden="true"></i>
                                    <span class="custom-option-item-title h4 d-block">Whole Factor</span>
                                    <small>Does the Policy Support Whole Level ?</small>
                                </label>
                            </div>
                        </div>
                        <div class="row whole_factor_true_row mt-2">
                            <div class="col-md-12">
                                <i class='fa fa-sticky-note bx-flashing'> <small style="color:red">Fill out all the
                                        fields,(Mode factor should b 1 and policy fee 0, if not given ) if not suported
                                        by company, fill with annual rate</small></i>
                                @foreach (json_decode($company_with_factor->FACTORS) as $key => $item)
                                    @if (str_contains($key, 'whole') && $key != 'whole_factor_check')
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="name">{{ $key }}</label>
                                                    <input type="number" value="{{ $item }}"
                                                        class="form-control" placeholder="0.0"
                                                        name="{{ $key }}">
                                                </div>
                                            </div>

                                        </div>
                                    @endif
                                @endforeach



                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="card">

                    <div class="card-body">
                        <div class="row custom-options-checkable g-1">
                            <div class="col-md-12">
                                <input class="custom-option-item-check factor_checkbox" type="checkbox"
                                    name="term_factor_check" @if ($company_with_factor->FACTORS->term_factor_check == 1) checked @endif
                                    id="customOptionsCheckableCheckboxWithIcon2" value="term_factor" />
                                <label class="custom-option-item text-center text-center p-1"
                                    for="customOptionsCheckableCheckboxWithIcon2">
                                    <i class="fa fa-envelope-open bx-burst" aria-hidden="true"></i>
                                    <span class="custom-option-item-title h4 d-block">Term Factor </span>
                                    <small>Does the policy support Term Level</small>
                                </label>
                            </div>
                        </div>

                        <div class="row term_factor_true_row mt-2">
                            <div class="col-md-12">
                                <i class='fa fa-sticky-note   bx-flashing'> <small style="color:red">Fill out all the
                                        fields,(Mode factor should b 1 and policy fee 0, if not given ) if not suported
                                        by company, fill with annual rate</small></i>
                                @foreach (json_decode($company_with_factor->FACTORS) as $key => $item)
                                    @if (str_contains($key, 'term') && $key != 'term_factor_check')
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="name">{{ $key }}</label>
                                                    <input type="number" value="{{ $item }}"
                                                        class="form-control" placeholder="0.0"
                                                        name="{{ $key }}">
                                                </div>
                                            </div>

                                        </div>
                                    @endif
                                @endforeach



                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
