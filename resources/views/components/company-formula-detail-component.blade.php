<form id="company_formula_form" novalidate="novalidate">
    <div class="accordion-item card">
        <h2 class="accordion-header" id="headingMarginOne">
            <button class="accordion-button collapsed" data-name="whole" style="font-family: monospace;font-size:24px;background: black;color: aliceblue;" type="button" data-bs-toggle="collapse" data-bs-target="#accordionMarginOne" aria-expanded="false" aria-controls="accordionMarginOne">
                <marquee width="100%" direction="left" >
                   Click me to add  Forumula for Whole Type 🙋
                    </marquee> 
            </button>
        </h2>
        <div id="accordionMarginOne" class="accordion-collapse collapse whole-accordian" aria-labelledby="headingMarginOne" data-bs-parent="#accordionMargin">
            <div class="accordion-body">
    <div class="row">
        <div class="col-md-12 col-12">
            <div class="formula-repeater" id="formula_div">
                <div class="content-body">
                    <section class="form-control-repeater">
                        <div class="row">
                            <!-- Invoice repeater -->
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Isurance Company Formula For Annual Rate Calculation
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <div data-repeater-list="Company_Formula_For_Annual">
                                            <div data-repeater-item>
                                                <div class="row d-flex align-items-end">
                                                    <div class="col-md-2 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="feature">Result Variable
                                                            </label>
                                                            <input type="text"
                                                                class="form-control result_variable_annual"
                                                                 id="result_variable"
                                                                 name="result_variable"
                                                                aria-describedby="result_variable" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="feature">Operand1
                                                            </label>
                                                            <select
                                                                class="select2 form-control operand operand_one_select_annual"
                                                                name="operand1"
                                                                 aria-describedby="operand1" required>
                                                                <option value="" disabled>Please select Operand</option>
                                                                <option value="rate_from_db" selected>Rate From DB
                                                                </option>
                                                                <option value="coverage">Coverage of the User</option>
                                                                <option value="age">Age of User</option>
                                                                <option value="annual_policy_fee">Annual Policy Fee
                                                                </option>
                                                                <option value="semi_annual_policy_fee">Semi Annual
                                                                    Policy Fee</option>
                                                                <option value="quarterly_policy_fee">Quarerly Policy Fee
                                                                </option>
                                                                <option value="monthly_policy_fee">Monthly Policy Fee
                                                                </option>
                                                                <option value="annual_mode_factor">Annual Mode Factor
                                                                </option>
                                                                <option value="semi_annual_mode_factor">Semi Annual Mode
                                                                    Factor</option>
                                                                <option value="quarterly_mode_factor">Quarerly Mode
                                                                    Factor</option>
                                                                <option value="monthly_mode_factor">Monthly Mode Factor
                                                                </option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="operator">Operator
                                                            </label>
                                                            <select
                                                                class="select form-select operator_one_select_annual"
                                                                name="Operator"
                                                                 aria-describedby="operand1" required>
                                                                <option value="" disabled>Please select a Operator
                                                                </option>
                                                                <option value="+" selected>+</option>
                                                                <option value="-">-</option>
                                                                <option value="*">*</option>
                                                                <option value="/">/</option>
                                                                <option value="%">%</option>
                                                                <option value="round">Round by </option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="Operand ">Opernad 2
                                                            </label>
                                                            <select
                                                                class="select2 form-select operand operand_two_select_annual"
                                                                name="operand2"
                                                                 aria-describedby="operand2" required>
                                                                <option value="" disabled>Please select Operand</option>
                                                                <option value="rate_from_db" selected>Rate From DB
                                                                </option>
                                                                <option value="coverage">Coverage of the User</option>
                                                                <option value="age">Age of User</option>
                                                                <option value="annual_policy_fee">Annual Policy Fee
                                                                </option>
                                                                <option value="semi_annual_policy_fee">Semi Annual
                                                                    Policy Fee</option>
                                                                <option value="quarterly_policy_fee">Quarerly Policy Fee
                                                                </option>
                                                                <option value="monthly_policy_fee">Monthly Policy Fee
                                                                </option>
                                                                <option value="annual_mode_factor">Annual Mode Factor
                                                                </option>
                                                                <option value="semi_annual_mode_factor">Semi Annual Mode
                                                                    Factor</option>
                                                                <option value="quarterly_mode_factor">Quarerly Mode
                                                                    Factor</option>
                                                                <option value="monthly_mode_factor">Monthly Mode Factor
                                                                </option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-12 ">
                                                        <div class="mb-1">
                                                            <button data-repeater-delete type="button"
                                                                class="btn btn-flat-danger waves-effect">
                                                                <i data-feather="x" class="me-25"></i>
                                                                <span>Remove Step</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">

                                                <button data-repeater-create type="button"
                                                    class="btn btn-flat-success waves-effect add_step_button">
                                                    <i data-feather="plus" class="me-25"></i>
                                                    <span>Add Step </span>
                                                </button>

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

    </div>

    <div class="row">
        <div class="col-md-12 col-12">
            <div class="formula-repeater" id="formula_div">
                <div class="content-body">
                    <section class="form-control-repeater">
                        <div class="row">
                            <!-- Invoice repeater -->
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Isurance Company Formula For Semi Annual Rate
                                            Calculation</h4>
                                    </div>
                                    <div class="card-body">
                                        <div data-repeater-list="Company_Formula_For_Semi_Annual">
                                            <div data-repeater-item>
                                                <div class="row d-flex align-items-end">
                                                    <div class="col-md-2 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="feature">Result Variable
                                                            </label>
                                                            <input type="text"
                                                            name="result_variable"
                                                                class="form-control result_variable_semi_annual"
                                                                 id="result_variable"
                                                                aria-describedby="result_variable" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="feature">Operand1
                                                            </label>
                                                            <select
                                                                class="select2 form-control operand operand_one_select_semi_annual"
                                                                name="operand1"
                                                                 aria-describedby="operand1" required>
                                                                <option value="" disabled>Please select Operand</option>
                                                                <option value="rate_from_db" selected>Rate From DB
                                                                </option>
                                                                <option value="coverage">Coverage of the User</option>
                                                                <option value="age">Age of User</option>
                                                                <option value="annual_policy_fee">Annual Policy Fee
                                                                </option>
                                                                <option value="semi_annual_policy_fee">Semi Annual
                                                                    Policy Fee</option>
                                                                <option value="quarterly_policy_fee">Quarerly Policy Fee
                                                                </option>
                                                                <option value="monthly_policy_fee">Monthly Policy Fee
                                                                </option>
                                                                <option value="annual_mode_factor">Annual Mode Factor
                                                                </option>
                                                                <option value="semi_annual_mode_factor">Semi Annual Mode
                                                                    Factor</option>
                                                                <option value="quarterly_mode_factor">Quarerly Mode
                                                                    Factor</option>
                                                                <option value="monthly_mode_factor">Monthly Mode Factor
                                                                </option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="operator">Operator
                                                            </label>
                                                            <select
                                                                class="select form-select operator_one_select_semi_annual"
                                                                name="Operator"
                                                                 aria-describedby="Operator" required>
                                                                <option value="" disabled>Please select a Operator
                                                                </option>
                                                                <option value="+" selected>+</option>
                                                                <option value="-">-</option>
                                                                <option value="*">*</option>
                                                                <option value="/">/</option>
                                                                <option value="%">%</option>
                                                                <option value="round">Round by </option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="Operamd ">Opernad 2
                                                            </label>
                                                            <select
                                                                class="select2 form-select operand operand_two_select_semi_annual"
                                                                name="operand2"
                                                                 aria-describedby="operand2" required>
                                                                <option value="" disabled>Please select Operand</option>
                                                                <option value="rate_from_db" selected>Rate From DB
                                                                </option>
                                                                <option value="coverage">Coverage of the User</option>
                                                                <option value="age">Age of User</option>
                                                                <option value="annual_policy_fee">Annual Policy Fee
                                                                </option>
                                                                <option value="semi_annual_policy_fee">Semi Annual
                                                                    Policy Fee</option>
                                                                <option value="quarterly_policy_fee">Quarerly Policy Fee
                                                                </option>
                                                                <option value="monthly_policy_fee">Monthly Policy Fee
                                                                </option>
                                                                <option value="annual_mode_factor">Annual Mode Factor
                                                                </option>
                                                                <option value="semi_annual_mode_factor">Semi Annual Mode
                                                                    Factor</option>
                                                                <option value="quarterly_mode_factor">Quarerly Mode
                                                                    Factor</option>
                                                                <option value="monthly_mode_factor">Monthly Mode Factor
                                                                </option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-12 ">
                                                        <div class="mb-1">
                                                            <button data-repeater-delete type="button"
                                                                class="btn btn-flat-danger waves-effect">
                                                                <i data-feather="x" class="me-25"></i>
                                                                <span>Remove Step</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">

                                                <button data-repeater-create type="button"
                                                    class="btn btn-flat-success waves-effect add_step_button">
                                                    <i data-feather="plus" class="me-25"></i>
                                                    <span>Add Step </span>
                                                </button>

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

    </div>

    <div class="row">
        <div class="col-md-12 col-12">
            <div class="formula-repeater" id="formula_div">
                <div class="content-body">
                    <section class="form-control-repeater">
                        <div class="row">
                            <!-- Invoice repeater -->
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Isurance Company Formula For Quarterly Rate
                                            Calculation</h4>
                                    </div>
                                    <div class="card-body">
                                        <div data-repeater-list="Company_Formula_For_Quarterly">
                                            <div data-repeater-item>
                                                <div class="row d-flex align-items-end">
                                                    <div class="col-md-2 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="feature">Result Variable
                                                            </label>
                                                            <input type="text"
                                                                class="form-control result_variable_quarterly"
                                                                 id="result_variable"
                                                                 name="result_variable"
                                                                aria-describedby="result_variable" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="feature">Operand1
                                                            </label>
                                                            <select
                                                                class="select2 form-control operand operand_one_select_quarterly"
                                                                name="operand1"
                                                                 aria-describedby="operand1" required>
                                                                <option value="" disabled>Please select Operand</option>
                                                                <option value="rate_from_db" selected>Rate From DB
                                                                </option>
                                                                <option value="coverage">Coverage of the User</option>
                                                                <option value="age">Age of User</option>
                                                                <option value="annual_policy_fee">Annual Policy Fee
                                                                </option>
                                                                <option value="semi_annual_policy_fee">Semi Annual
                                                                    Policy Fee</option>
                                                                <option value="quarterly_policy_fee">Quarerly Policy Fee
                                                                </option>
                                                                <option value="monthly_policy_fee">Monthly Policy Fee
                                                                </option>
                                                                <option value="annual_mode_factor">Annual Mode Factor
                                                                </option>
                                                                <option value="semi_annual_mode_factor">Semi Annual Mode
                                                                    Factor</option>
                                                                <option value="quarterly_mode_factor">Quarerly Mode
                                                                    Factor</option>
                                                                <option value="monthly_mode_factor">Monthly Mode Factor
                                                                </option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="operator">Operator
                                                            </label>
                                                            <select
                                                                class="select form-select operator_one_select_quarterly"
                                                                name="Operator"
                                                                 aria-describedby="operand1" required>
                                                                <option value="" disabled>Please select a Operator
                                                                </option>
                                                                <option value="+" selected>+</option>
                                                                <option value="-">-</option>
                                                                <option value="*">*</option>
                                                                <option value="/">/</option>
                                                                <option value="%">%</option>
                                                                <option value="round">Round by </option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="Operamd ">Opernad 2
                                                            </label>
                                                            <select
                                                                class="select2 form-select operand operand_two_select_quarterly"
                                                                name="operand2"
                                                                 aria-describedby="operand2" required>
                                                                <option value="" disabled>Please select Operand</option>
                                                                <option value="rate_from_db" selected>Rate From DB
                                                                </option>
                                                                <option value="coverage">Coverage of the User</option>
                                                                <option value="age">Age of User</option>
                                                                <option value="annual_policy_fee">Annual Policy Fee
                                                                </option>
                                                                <option value="semi_annual_policy_fee">Semi Annual
                                                                    Policy Fee</option>
                                                                <option value="quarterly_policy_fee">Quarerly Policy Fee
                                                                </option>
                                                                <option value="monthly_policy_fee">Monthly Policy Fee
                                                                </option>
                                                                <option value="annual_mode_factor">Annual Mode Factor
                                                                </option>
                                                                <option value="semi_annual_mode_factor">Semi Annual Mode
                                                                    Factor</option>
                                                                <option value="quarterly_mode_factor">Quarerly Mode
                                                                    Factor</option>
                                                                <option value="monthly_mode_factor">Monthly Mode Factor
                                                                </option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-12 ">
                                                        <div class="mb-1">
                                                            <button data-repeater-delete type="button"
                                                                class="btn btn-flat-danger waves-effect">
                                                                <i data-feather="x" class="me-25"></i>
                                                                <span>Remove Step</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">

                                                <button data-repeater-create type="button"
                                                    class="btn btn-flat-success waves-effect add_step_button">
                                                    <i data-feather="plus" class="me-25"></i>
                                                    <span>Add Step </span>
                                                </button>

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

    </div>

    <div class="row">
        <div class="col-md-12 col-12">
            <div class="formula-repeater" id="formula_div">
                <div class="content-body">
                    <section class="form-control-repeater">
                        <div class="row">
                            <!-- Invoice repeater -->
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Isurance Company Formula For Monthly Rate
                                            Calculation</h4>
                                    </div>
                                    <div class="card-body">
                                        <div data-repeater-list="Company_Formula_For_Monthly">
                                            <div data-repeater-item>
                                                <div class="row d-flex align-items-end">
                                                    <div class="col-md-2 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="feature">Result Variable
                                                            </label>
                                                            <input type="text"
                                                                class="form-control result_variable_monthly"
                                                                name="result_variable"
                                                                 id="result_variable"
                                                                aria-describedby="result_variable" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="feature">Operand1
                                                            </label>
                                                            <select
                                                                class="select2 form-control operand operand_one_select_monthly"
                                                                name="operand1"
                                                                 aria-describedby="operand1" required>
                                                                <option value="" disabled>Please select Operand</option>
                                                                <option value="rate_from_db" selected>Rate From DB
                                                                </option>
                                                                <option value="coverage">Coverage of the User</option>
                                                                <option value="age">Age of User</option>
                                                                <option value="annual_policy_fee">Annual Policy Fee
                                                                </option>
                                                                <option value="semi_annual_policy_fee">Semi Annual
                                                                    Policy Fee</option>
                                                                <option value="quarterly_policy_fee">Quarerly Policy Fee
                                                                </option>
                                                                <option value="monthly_policy_fee">Monthly Policy Fee
                                                                </option>
                                                                <option value="annual_mode_factor">Annual Mode Factor
                                                                </option>
                                                                <option value="semi_annual_mode_factor">Semi Annual Mode
                                                                    Factor</option>
                                                                <option value="quarterly_mode_factor">Quarerly Mode
                                                                    Factor</option>
                                                                <option value="monthly_mode_factor">Monthly Mode Factor
                                                                </option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="operator">Operator
                                                            </label>
                                                            <select
                                                                class="select form-select operator_one_select_monthly"
                                                                name="Operator"
                                                                 aria-describedby="Operator" required>
                                                                <option value="" disabled>Please select a Operator
                                                                </option>
                                                                <option value="+" selected>+</option>
                                                                <option value="-">-</option>
                                                                <option value="*">*</option>
                                                                <option value="/">/</option>
                                                                <option value="%">%</option>
                                                                <option value="round">Round by </option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="Operamd ">Opernad 2
                                                            </label>
                                                            <select
                                                                class="select2 form-select operand operand_two_select_monthly"
                                                                name="operand2"
                                                                 aria-describedby="operand2" required>
                                                                <option value="" disabled>Please select Operand</option>
                                                                <option value="rate_from_db" selected>Rate From DB
                                                                </option>
                                                                <option value="coverage">Coverage of the User</option>
                                                                <option value="age">Age of User</option>
                                                                <option value="annual_policy_fee">Annual Policy Fee
                                                                </option>
                                                                <option value="semi_annual_policy_fee">Semi Annual
                                                                    Policy Fee</option>
                                                                <option value="quarterly_policy_fee">Quarerly Policy Fee
                                                                </option>
                                                                <option value="monthly_policy_fee">Monthly Policy Fee
                                                                </option>
                                                                <option value="annual_mode_factor">Annual Mode Factor
                                                                </option>
                                                                <option value="semi_annual_mode_factor">Semi Annual Mode
                                                                    Factor</option>
                                                                <option value="quarterly_mode_factor">Quarerly Mode
                                                                    Factor</option>
                                                                <option value="monthly_mode_factor">Monthly Mode Factor
                                                                </option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-12 ">
                                                        <div class="mb-1">
                                                            <button data-repeater-delete type="button"
                                                                class="btn btn-flat-danger waves-effect">
                                                                <i data-feather="x" class="me-25"></i>
                                                                <span>Remove Step</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">

                                                <button data-repeater-create type="button"
                                                    class="btn btn-flat-success waves-effect add_step_button">
                                                    <i data-feather="plus" class="me-25"></i>
                                                    <span>Add Step </span>
                                                </button>

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

    </div>
            </div>
        </div>
</div>





<div class="accordion-item card">
    <h2 class="accordion-header" id="headingMarginTwo">
        <button class="accordion-button collapsed " data-name="term" style="font-family: monospace;font-size:24px;background: black;color: aliceblue;" type="button" data-bs-toggle="collapse" data-bs-target="#accordionMarginTwo" aria-expanded="false" aria-controls="accordionMarginTwo">
            <marquee width="100%" direction="right" >
                Click me to add  Forumula for Term Type 🙋
                 </marquee> 
        </button>
    </h2>
    <div id="accordionMarginTwo"  class="accordion-collapse collapse term-accordian" aria-labelledby="headingMarginTwo" data-bs-parent="#accordionMargin">
        <div class="accordion-body">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="formula-repeater" id="formula_div">
                        <div class="content-body">
                            <section class="form-control-repeater">
                                <div class="row">
                                    <!-- Invoice repeater -->
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Isurance Company Formula For Annual Rate Calculation
                                                </h4>
                                            </div>
                                            <div class="card-body">
                                                <div data-repeater-list="Company_Formula_For_Annual_Term">
                                                    <div data-repeater-item>
                                                        <div class="row d-flex align-items-end">
                                                            <div class="col-md-2 col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="feature">Result Variable
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control result_variable_annual_term"
                                                                        name="result_variable"
                                                                         id="result_variable"
                                                                        aria-describedby="result_variable" required>
        
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="feature">Operand1
                                                                    </label>
                                                                    <select
                                                                        class="select2 form-control operand operand_one_select_annual_term"
                                                                        name="operand1"
                                                                         aria-describedby="operand1" required>
                                                                        <option value="" disabled>Please select Operand</option>
                                                                        <option value="rate_from_db" selected>Rate From DB
                                                                        </option>
                                                                        <option value="coverage">Coverage of the User</option>
                                                                        <option value="age">Age of User</option>
                                                                        <option value="annual_policy_fee">Annual Policy Fee
                                                                        </option>
                                                                        <option value="semi_annual_policy_fee">Semi Annual
                                                                            Policy Fee</option>
                                                                        <option value="quarterly_policy_fee">Quarerly Policy Fee
                                                                        </option>
                                                                        <option value="monthly_policy_fee">Monthly Policy Fee
                                                                        </option>
                                                                        <option value="annual_mode_factor">Annual Mode Factor
                                                                        </option>
                                                                        <option value="semi_annual_mode_factor">Semi Annual Mode
                                                                            Factor</option>
                                                                        <option value="quarterly_mode_factor">Quarerly Mode
                                                                            Factor</option>
                                                                        <option value="monthly_mode_factor">Monthly Mode Factor
                                                                        </option>
                                                                    </select>
        
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="operator">Operator
                                                                    </label>
                                                                    <select
                                                                        class="select form-select operator_one_select_annual_term"
                                                                        name="operand1"
                                                                         aria-describedby="operand1" required>
                                                                        <option value="" disabled>Please select a Operator
                                                                        </option>
                                                                        <option value="+" selected>+</option>
                                                                        <option value="-">-</option>
                                                                        <option value="*">*</option>
                                                                        <option value="/">/</option>
                                                                        <option value="%">%</option>
                                                                        <option value="round">Round by </option>
                                                                    </select>
        
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="Operand ">Opernad 2
                                                                    </label>
                                                                    <select
                                                                        class="select2 form-select operand operand_two_select_annual_term"
                                                                        name="operand2"
                                                                         aria-describedby="operand2" required>
                                                                        <option value="" disabled>Please select Operand</option>
                                                                        <option value="rate_from_db" selected>Rate From DB
                                                                        </option>
                                                                        <option value="coverage">Coverage of the User</option>
                                                                        <option value="age">Age of User</option>
                                                                        <option value="annual_policy_fee">Annual Policy Fee
                                                                        </option>
                                                                        <option value="semi_annual_policy_fee">Semi Annual
                                                                            Policy Fee</option>
                                                                        <option value="quarterly_policy_fee">Quarerly Policy Fee
                                                                        </option>
                                                                        <option value="monthly_policy_fee">Monthly Policy Fee
                                                                        </option>
                                                                        <option value="annual_mode_factor">Annual Mode Factor
                                                                        </option>
                                                                        <option value="semi_annual_mode_factor">Semi Annual Mode
                                                                            Factor</option>
                                                                        <option value="quarterly_mode_factor">Quarerly Mode
                                                                            Factor</option>
                                                                        <option value="monthly_mode_factor">Monthly Mode Factor
                                                                        </option>
                                                                    </select>
        
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-12 ">
                                                                <div class="mb-1">
                                                                    <button data-repeater-delete type="button"
                                                                        class="btn btn-flat-danger waves-effect">
                                                                        <i data-feather="x" class="me-25"></i>
                                                                        <span>Remove Step</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                    </div>
                                                </div>
        
                                                <div class="row">
                                                    <div class="col-12">
        
                                                        <button data-repeater-create type="button"
                                                            class="btn btn-flat-success waves-effect add_step_button">
                                                            <i data-feather="plus" class="me-25"></i>
                                                            <span>Add Step </span>
                                                        </button>
        
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
        
            </div>
        
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="formula-repeater" id="formula_div">
                        <div class="content-body">
                            <section class="form-control-repeater">
                                <div class="row">
                                    <!-- Invoice repeater -->
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Isurance Company Formula For Semi Annual Rate
                                                    Calculation</h4>
                                            </div>
                                            <div class="card-body">
                                                <div data-repeater-list="Company_Formula_For_Semi_Annual_Term">
                                                    <div data-repeater-item>
                                                        <div class="row d-flex align-items-end">
                                                            <div class="col-md-2 col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="feature">Result Variable
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control result_variable_semi_annual_term"
                                                                        name="result_variable"
                                                                         id="result_variable"
                                                                        aria-describedby="result_variable" required>
        
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="feature">Operand1
                                                                    </label>
                                                                    <select
                                                                        class="select2 form-control operand operand_one_select_semi_annual_term"
                                                                        name="operand1"
                                                                         aria-describedby="operand1" required>
                                                                        <option value="" disabled>Please select Operand</option>
                                                                        <option value="rate_from_db" selected>Rate From DB
                                                                        </option>
                                                                        <option value="coverage">Coverage of the User</option>
                                                                        <option value="age">Age of User</option>
                                                                        <option value="annual_policy_fee">Annual Policy Fee
                                                                        </option>
                                                                        <option value="semi_annual_policy_fee">Semi Annual
                                                                            Policy Fee</option>
                                                                        <option value="quarterly_policy_fee">Quarerly Policy Fee
                                                                        </option>
                                                                        <option value="monthly_policy_fee">Monthly Policy Fee
                                                                        </option>
                                                                        <option value="annual_mode_factor">Annual Mode Factor
                                                                        </option>
                                                                        <option value="semi_annual_mode_factor">Semi Annual Mode
                                                                            Factor</option>
                                                                        <option value="quarterly_mode_factor">Quarerly Mode
                                                                            Factor</option>
                                                                        <option value="monthly_mode_factor">Monthly Mode Factor
                                                                        </option>
                                                                    </select>
        
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="operator">Operator
                                                                    </label>
                                                                    <select
                                                                        class="select form-select operator_one_select_semi_annual_term"
                                                                        name="Operator"
                                                                         aria-describedby="Operator" required>
                                                                        <option value="" disabled>Please select a Operator
                                                                        </option>
                                                                        <option value="+" selected>+</option>
                                                                        <option value="-">-</option>
                                                                        <option value="*">*</option>
                                                                        <option value="/">/</option>
                                                                        <option value="%">%</option>
                                                                        <option value="round">Round by </option>
                                                                    </select>
        
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="Operamd ">Opernad 2
                                                                    </label>
                                                                    <select
                                                                        class="select2 form-select operand operand_two_select_semi_annual_term"
                                                                        name="operand2"
                                                                         aria-describedby="operand2" required>
                                                                        <option value="" disabled>Please select Operand</option>
                                                                        <option value="rate_from_db" selected>Rate From DB
                                                                        </option>
                                                                        <option value="coverage">Coverage of the User</option>
                                                                        <option value="age">Age of User</option>
                                                                        <option value="annual_policy_fee">Annual Policy Fee
                                                                        </option>
                                                                        <option value="semi_annual_policy_fee">Semi Annual
                                                                            Policy Fee</option>
                                                                        <option value="quarterly_policy_fee">Quarerly Policy Fee
                                                                        </option>
                                                                        <option value="monthly_policy_fee">Monthly Policy Fee
                                                                        </option>
                                                                        <option value="annual_mode_factor">Annual Mode Factor
                                                                        </option>
                                                                        <option value="semi_annual_mode_factor">Semi Annual Mode
                                                                            Factor</option>
                                                                        <option value="quarterly_mode_factor">Quarerly Mode
                                                                            Factor</option>
                                                                        <option value="monthly_mode_factor">Monthly Mode Factor
                                                                        </option>
                                                                    </select>
        
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-12 ">
                                                                <div class="mb-1">
                                                                    <button data-repeater-delete type="button"
                                                                        class="btn btn-flat-danger waves-effect">
                                                                        <i data-feather="x" class="me-25"></i>
                                                                        <span>Remove Step</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                    </div>
                                                </div>
        
                                                <div class="row">
                                                    <div class="col-12">
        
                                                        <button data-repeater-create type="button"
                                                            class="btn btn-flat-success waves-effect add_step_button">
                                                            <i data-feather="plus" class="me-25"></i>
                                                            <span>Add Step </span>
                                                        </button>
        
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
        
            </div>
        
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="formula-repeater" id="formula_div">
                        <div class="content-body">
                            <section class="form-control-repeater">
                                <div class="row">
                                    <!-- Invoice repeater -->
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Isurance Company Formula For Quarterly Rate
                                                    Calculation</h4>
                                            </div>
                                            <div class="card-body">
                                                <div data-repeater-list="Company_Formula_For_Quarterly_Term">
                                                    <div data-repeater-item>
                                                        <div class="row d-flex align-items-end">
                                                            <div class="col-md-2 col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="feature">Result Variable
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control result_variable_quarterly_term"
                                                                        name="result_variable"
                                                                         id="result_variable"
                                                                        aria-describedby="result_variable" required>
        
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="feature">Operand1
                                                                    </label>
                                                                    <select
                                                                        class="select2 form-control operand operand_one_select_quarterly_term"
                                                                        name="operand1"
                                                                         aria-describedby="operand1" required>
                                                                        <option value="" disabled>Please select Operand</option>
                                                                        <option value="rate_from_db" selected>Rate From DB
                                                                        </option>
                                                                        <option value="coverage">Coverage of the User</option>
                                                                        <option value="age">Age of User</option>
                                                                        <option value="annual_policy_fee">Annual Policy Fee
                                                                        </option>
                                                                        <option value="semi_annual_policy_fee">Semi Annual
                                                                            Policy Fee</option>
                                                                        <option value="quarterly_policy_fee">Quarerly Policy Fee
                                                                        </option>
                                                                        <option value="monthly_policy_fee">Monthly Policy Fee
                                                                        </option>
                                                                        <option value="annual_mode_factor">Annual Mode Factor
                                                                        </option>
                                                                        <option value="semi_annual_mode_factor">Semi Annual Mode
                                                                            Factor</option>
                                                                        <option value="quarterly_mode_factor">Quarerly Mode
                                                                            Factor</option>
                                                                        <option value="monthly_mode_factor">Monthly Mode Factor
                                                                        </option>
                                                                    </select>
        
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="operator">Operator
                                                                    </label>
                                                                    <select
                                                                        class="select form-select operator_one_select_quarterly_term"
                                                                        name="operand1"
                                                                         aria-describedby="operand1" required>
                                                                        <option value="" disabled>Please select a Operator
                                                                        </option>
                                                                        <option value="+" selected>+</option>
                                                                        <option value="-">-</option>
                                                                        <option value="*">*</option>
                                                                        <option value="/">/</option>
                                                                        <option value="%">%</option>
                                                                        <option value="round">Round by </option>
                                                                    </select>
        
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="Operamd ">Opernad 2
                                                                    </label>
                                                                    <select
                                                                        class="select2 form-select operand operand_two_select_quarterly_term"
                                                                        name="operand2"
                                                                         aria-describedby="operand2" required>
                                                                        <option value="" disabled>Please select Operand</option>
                                                                        <option value="rate_from_db" selected>Rate From DB
                                                                        </option>
                                                                        <option value="coverage">Coverage of the User</option>
                                                                        <option value="age">Age of User</option>
                                                                        <option value="annual_policy_fee">Annual Policy Fee
                                                                        </option>
                                                                        <option value="semi_annual_policy_fee">Semi Annual
                                                                            Policy Fee</option>
                                                                        <option value="quarterly_policy_fee">Quarerly Policy Fee
                                                                        </option>
                                                                        <option value="monthly_policy_fee">Monthly Policy Fee
                                                                        </option>
                                                                        <option value="annual_mode_factor">Annual Mode Factor
                                                                        </option>
                                                                        <option value="semi_annual_mode_factor">Semi Annual Mode
                                                                            Factor</option>
                                                                        <option value="quarterly_mode_factor">Quarerly Mode
                                                                            Factor</option>
                                                                        <option value="monthly_mode_factor">Monthly Mode Factor
                                                                        </option>
                                                                    </select>
        
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-12 ">
                                                                <div class="mb-1">
                                                                    <button data-repeater-delete type="button"
                                                                        class="btn btn-flat-danger waves-effect">
                                                                        <i data-feather="x" class="me-25"></i>
                                                                        <span>Remove Step</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                    </div>
                                                </div>
        
                                                <div class="row">
                                                    <div class="col-12">
        
                                                        <button data-repeater-create type="button"
                                                            class="btn btn-flat-success waves-effect add_step_button">
                                                            <i data-feather="plus" class="me-25"></i>
                                                            <span>Add Step </span>
                                                        </button>
        
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
        
            </div>
        
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="formula-repeater" id="formula_div">
                        <div class="content-body">
                            <section class="form-control-repeater">
                                <div class="row">
                                    <!-- Invoice repeater -->
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Isurance Company Formula For Monthly Rate
                                                    Calculation</h4>
                                            </div>
                                            <div class="card-body">
                                                <div data-repeater-list="Company_Formula_For_Monthly_Term">
                                                    <div data-repeater-item>
                                                        <div class="row d-flex align-items-end">
                                                            <div class="col-md-2 col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="feature">Result Variable
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control result_variable_monthly_term"
                                                                        name="result_variable"
                                                                         id="result_variable"
                                                                        aria-describedby="result_variable" required>
        
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="feature">Operand1
                                                                    </label>
                                                                    <select
                                                                        class="select2 form-control operand operand_one_select_monthly_term"
                                                                        name="operand1"
                                                                         aria-describedby="operand1" required>
                                                                        <option value="" disabled>Please select Operand</option>
                                                                        <option value="rate_from_db" selected>Rate From DB
                                                                        </option>
                                                                        <option value="coverage">Coverage of the User</option>
                                                                        <option value="age">Age of User</option>
                                                                        <option value="annual_policy_fee">Annual Policy Fee
                                                                        </option>
                                                                        <option value="semi_annual_policy_fee">Semi Annual
                                                                            Policy Fee</option>
                                                                        <option value="quarterly_policy_fee">Quarerly Policy Fee
                                                                        </option>
                                                                        <option value="monthly_policy_fee">Monthly Policy Fee
                                                                        </option>
                                                                        <option value="annual_mode_factor">Annual Mode Factor
                                                                        </option>
                                                                        <option value="semi_annual_mode_factor">Semi Annual Mode
                                                                            Factor</option>
                                                                        <option value="quarterly_mode_factor">Quarerly Mode
                                                                            Factor</option>
                                                                        <option value="monthly_mode_factor">Monthly Mode Factor
                                                                        </option>
                                                                    </select>
        
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="operator">Operator
                                                                    </label>
                                                                    <select
                                                                        class="select form-select operator_one_select_monthly_term"
                                                                        name="Operator"
                                                                         aria-describedby="Operator" required>
                                                                        <option value="" disabled>Please select a Operator
                                                                        </option>
                                                                        <option value="+" selected>+</option>
                                                                        <option value="-">-</option>
                                                                        <option value="*">*</option>
                                                                        <option value="/">/</option>
                                                                        <option value="%">%</option>
                                                                        <option value="round">Round by </option>
                                                                    </select>
        
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="Operamd ">Opernad 2
                                                                    </label>
                                                                    <select
                                                                        class="select2 form-select operand operand_two_select_monthly_term"
                                                                        name="operand2"
                                                                         aria-describedby="operand2" required>
                                                                        <option value="" disabled>Please select Operand</option>
                                                                        <option value="rate_from_db" selected>Rate From DB
                                                                        </option>
                                                                        <option value="coverage">Coverage of the User</option>
                                                                        <option value="age">Age of User</option>
                                                                        <option value="annual_policy_fee">Annual Policy Fee
                                                                        </option>
                                                                        <option value="semi_annual_policy_fee">Semi Annual
                                                                            Policy Fee</option>
                                                                        <option value="quarterly_policy_fee">Quarerly Policy Fee
                                                                        </option>
                                                                        <option value="monthly_policy_fee">Monthly Policy Fee
                                                                        </option>
                                                                        <option value="annual_mode_factor">Annual Mode Factor
                                                                        </option>
                                                                        <option value="semi_annual_mode_factor">Semi Annual Mode
                                                                            Factor</option>
                                                                        <option value="quarterly_mode_factor">Quarerly Mode
                                                                            Factor</option>
                                                                        <option value="monthly_mode_factor">Monthly Mode Factor
                                                                        </option>
                                                                    </select>
        
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-12 ">
                                                                <div class="mb-1">
                                                                    <button data-repeater-delete type="button"
                                                                        class="btn btn-flat-danger waves-effect">
                                                                        <i data-feather="x" class="me-25"></i>
                                                                        <span>Remove Step</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                    </div>
                                                </div>
        
                                                <div class="row">
                                                    <div class="col-12">
        
                                                        <button data-repeater-create type="button"
                                                            class="btn btn-flat-success waves-effect add_step_button">
                                                            <i data-feather="plus" class="me-25"></i>
                                                            <span>Add Step </span>
                                                        </button>
        
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
        
            </div>
</div>
</div>
</div>




</form>


