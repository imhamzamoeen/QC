
<form id="factor_detail_form">

    <section id="multiple-column-form">

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                    
                        <div class="card-body">
                            <div class="row custom-options-checkable g-1">
                           
                                <div class="col-md-12">
                                    <input class="custom-option-item-check factor_checkbox" type="checkbox" name="whole_factor_check" id="customOptionsCheckableCheckboxWithIcon1" value="whole_factor"/>
                                    <label class="custom-option-item text-center p-1" for="customOptionsCheckableCheckboxWithIcon1">
                                        <i class="fa fa-envelope-open bx-burst" aria-hidden="true"></i>
                                        <span class="custom-option-item-title h4 d-block">Whole Factor</span>
                                        <small>Does the Policy Support Whole Level ?</small>
                                    </label>
                                </div>
                            </div>
                            <div class="row whole_factor_true_row mt-2" style="display: none">
                                <div class="col-md-12" >
                                    <i class='fa fa-sticky-note bx-flashing'> <small style="color:red">Fill out all the fields,(Mode factor should b 1 and policy fee 0, if not given ) if not suported by company, fill with annual rate</small></i> 
                                       <div class="row">
                                           <div class="col-md-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="name">Annual Mode Factor</label>
                                                <input type="number" id="annual_mode_factor_whole_id" value="1" class="form-control" placeholder="0.0" name="annual_mode_factor_whole">
                                            </div>
                                           </div>
                                           <div class="col-md-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="name">Policy Fee Annual</label>
                                                <input type="number" id="policy_fee_annual_whole_id" value="0" class="form-control" placeholder="$" name="policy_fee_annual_whole"> 
                                            </div>
                                           </div>
                                       </div>

                                       <div class="row">
                                        <div class="col-md-6">
                                         <div class="mb-1">
                                             <label class="form-label" for="name">Semi Annual Mode Factor</label>
                                             <input type="number" id="semi_annual_mode_factor_whole_id" value="1" class="form-control" placeholder="0.0" name="semi_annual_mode_factor_whole">
                                         </div>
                                        </div>
                                        <div class="col-md-6">
                                         <div class="mb-1">
                                             <label class="form-label" for="name">Policy Fee Semi Annual</label>
                                             <input type="number" id="policy_fee_semi_annual_whole_id" value="0" class="form-control" placeholder="$" name="policy_fee_semi_annual_whole"> 
                                         </div>
                                        </div>
                                    </div>


                                    <div class="row ">
                                        <div class="col-md-6">
                                         <div class="mb-1">
                                             <label class="form-label" for="name">Quarterly Mode Factor</label>
                                             <input type="number" id="quarterly_mode_factor_whole_id" value="1" class="form-control" placeholder="0.0" name="quarterly_mode_factor_whole">
                                         </div>
                                        </div>
                                        <div class="col-md-6">
                                         <div class="mb-1">
                                             <label class="form-label" for="name">Policy Fee Quarterly</label>
                                             <input type="number" id="policy_fee_quarterly_whole_id" value="0" class="form-control" placeholder="$" name="policy_fee_quarterly_whole"> 
                                         </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                         <div class="mb-1">
                                             <label class="form-label" for="name">Monthly Mode Factor</label>
                                             <input type="number" id="monthly_mode_factor_whole_id" value="1" class="form-control" placeholder="0.0" name="monthly_mode_factor_whole">
                                         </div>
                                        </div>
                                        <div class="col-md-6">
                                         <div class="mb-1">
                                             <label class="form-label" for="name">Policy Fee Monthly</label>
                                             <input type="number" id="policy_fee_monthly_whole_id" value="0" class="form-control" placeholder="$" name="policy_fee_monthly_whole"> 
                                         </div>
                                        </div>
                                    </div>


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
                                    <input class="custom-option-item-check factor_checkbox" type="checkbox" name="term_factor_check" id="customOptionsCheckableCheckboxWithIcon2" value="term_factor" />
                                    <label class="custom-option-item text-center text-center p-1" for="customOptionsCheckableCheckboxWithIcon2">
                                        <i class="fa fa-envelope-open bx-burst" aria-hidden="true"></i>
                                        <span class="custom-option-item-title h4 d-block">Term Factor </span>
                                        <small>Does the policy support Term Level</small>
                                    </label>
                                </div>
                            </div>

                            <div class="row term_factor_true_row mt-2" style="display: none">
                                <div class="col-md-12">
                                    <i class='fa fa-sticky-note   bx-flashing'> <small style="color:red">Fill out all the fields,(Mode factor should b 1 and policy fee 0, if not given ) if not suported by company, fill with annual rate</small></i> 
                                    <div class="row">
                                        <div class="col-md-6">
                                         <div class="mb-1">
                                             <label class="form-label" for="name">Annual Mode Factor</label>
                                             <input type="number" id="annual_mode_factor_term_id" value="1" class="form-control" placeholder="0.0" name="annual_mode_factor_term">
                                         </div>
                                        </div>
                                        <div class="col-md-6">
                                         <div class="mb-1">
                                             <label class="form-label" for="name">Policy Fee Annual</label>
                                             <input type="number" id="semi_annual_mode_factor_term_id" value="0" class="form-control" placeholder="$" name="policy_fee_annual_term"> 
                                         </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                     <div class="col-md-6">
                                      <div class="mb-1">
                                          <label class="form-label" for="name">Semi Annual Mode Factor</label>
                                          <input type="number" id="semi_annual_mode_factor_term_id" value="1" class="form-control" placeholder="0.0" name="semi_annual_mode_factor_term">
                                      </div>
                                     </div>
                                     <div class="col-md-6">
                                      <div class="mb-1">
                                          <label class="form-label" for="name">Policy Fee Semi Annual</label>
                                          <input type="number" id="policy_fee_semi_annual_term_id" value="0" class="form-control" placeholder="$" name="policy_fee_semi_annual_term"> 
                                      </div>
                                     </div>
                                 </div>


                                 <div class="row ">
                                     <div class="col-md-6">
                                      <div class="mb-1">
                                          <label class="form-label" for="name">Quarterly Mode Factor</label>
                                          <input type="number" id="quarterly_mode_factor_term_id" value="1" class="form-control" placeholder="0.0" name="quarterly_mode_factor_term">
                                      </div>
                                     </div>
                                     <div class="col-md-6">
                                      <div class="mb-1">
                                          <label class="form-label" for="name">Policy Fee Quarterly</label>
                                          <input type="number" id="policy_fee_quarterly_term_id" value="0" class="form-control" placeholder="$" name="policy_fee_quarterly_term"> 
                                      </div>
                                     </div>
                                 </div>

                                 <div class="row">
                                     <div class="col-md-6">
                                      <div class="mb-1">
                                          <label class="form-label" for="name">Monthly Mode Factor</label>
                                          <input type="number" id="monthly_mode_factor_term_id" value="1" class="form-control" placeholder="0.0" name="monthly_mode_factor_term">
                                      </div>
                                     </div>
                                     <div class="col-md-6">
                                      <div class="mb-1">
                                          <label class="form-label" for="name">Policy Fee Monthly</label>
                                          <input type="number" id="policy_fee_monthly_term_id" value="0" class="form-control" placeholder="$" name="policy_fee_monthly_term"> 
                                      </div>
                                     </div>
                                 </div>

                                </div>
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div>
    </section>
</form>
