<?php
$annual_counter = -1;
$monthly_counter = -1;
$quarterly_counter = -1;
$semi_annual_counter = -1;

$annual_term_counter = -1;
$monthly_term_counter = -1;
$quarterly_term_counter = -1;
$semi_annual_term_counter = -1;
?>
<form id="company_formula_form" novalidate="novalidate">
    <div class="container">



        <h2 class="accordion-header" id="headingMarginOne">
            <marquee width="100%" direction="right" style="background: black; font-family:cursive;
        color: cornsilk;">
                Fill Me For Policy Type => Whole 🙋
            </marquee>

        </h2>
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="formula-repeater" id="">
                    <div class="content-body">
                        <section class="form-control-repeater">
                            <div class="row">
                                <!-- Invoice repeater -->
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title"><strong style="color:black">Annual Rate</strong>
                                                For Policy Type : Whole
                                            </h4>

                                        </div>
                                        <div class="card-body Annual_div">
                                            @foreach (json_decode($company_with_factor->FORMULA) as $key => $item)
                                                @if ($item->type == 'annual' && $item->policy_type == 'whole')
                                                    {!! $annual_counter = $annual_counter + 1 !!}
                                                    <div class="row d-flex align-items-end"
                                                        id="Annual_row_{{ $annual_counter }}">

                                                        <div class="col-md-2 col-12">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="feature">Result
                                                                    Variable
                                                                </label>
                                                                <input type="text"
                                                                    class="form-control result_variable_annual"
                                                                    name="Company_Formula_For_Annual[{{ $annual_counter }}][result_variable]"
                                                                    aria-describedby="result_variable"
                                                                    value="{{ $item->result_variable }}" required>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-12">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="feature">Operand1
                                                                </label>
                                                                <select
                                                                    class="select2 form-control operand operand_one_select_annual"
                                                                    name="Company_Formula_For_Annual[{{ $annual_counter }}][operand1]"
                                                                    aria-describedby="operand1" required>
                                                                    <option value="{{ $item->operand1 }}" selected>
                                                                        {{ $item->operand1 }}</option>
                                                                    <option value="rate_from_db">Rate From DB
                                                                    </option>
                                                                    <option value="coverage">Coverage of the User
                                                                    </option>
                                                                    <option value="age">Age of User</option>
                                                                    <option value="annual_policy_fee">Annual Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="semi_annual_policy_fee">Semi
                                                                        Annual
                                                                        Policy Fee</option>
                                                                    <option value="quarterly_policy_fee">Quarterly
                                                                        Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="monthly_policy_fee">Monthly
                                                                        Policy Fee
                                                                    </option>
                                                                    <option value="annual_mode_factor">Annual Mode
                                                                        Factor
                                                                    </option>
                                                                    <option value="semi_annual_mode_factor">Semi
                                                                        Annual Mode
                                                                        Factor</option>
                                                                    <option value="quarterly_mode_factor">Quarterly
                                                                        Mode
                                                                        Factor</option>
                                                                    <option value="monthly_mode_factor">Monthly Mode
                                                                        Factor
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
                                                                    name="Company_Formula_For_Annual[{{ $annual_counter }}][Operator]"
                                                                    aria-describedby="Operator" required>
                                                                    <option value="{{ $item->Operator }}" selected>
                                                                        {{ $item->Operator }}
                                                                    </option>
                                                                    <option value="+">+</option>
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
                                                                <label class="form-label" for="Operand ">Opernad
                                                                    2
                                                                </label>
                                                                <select
                                                                    class="select2 form-select operand operand_two_select_annual"
                                                                    name="Company_Formula_For_Annual[{{ $annual_counter }}][operand2]"
                                                                    aria-describedby="operand2" required>
                                                                    <option value="{{ $item->operand2 }}" selected>
                                                                        {{ $item->operand2 }}</option>
                                                                    <option value="rate_from_db">Rate From DB
                                                                    </option>
                                                                    <option value="coverage">Coverage of the User
                                                                    </option>
                                                                    <option value="age">Age of User</option>
                                                                    <option value="annual_policy_fee">Annual Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="semi_annual_policy_fee">Semi
                                                                        Annual
                                                                        Policy Fee</option>
                                                                    <option value="quarterly_policy_fee">Quarterly
                                                                        Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="monthly_policy_fee">Monthly
                                                                        Policy Fee
                                                                    </option>
                                                                    <option value="annual_mode_factor">Annual Mode
                                                                        Factor
                                                                    </option>
                                                                    <option value="semi_annual_mode_factor">Semi
                                                                        Annual Mode
                                                                        Factor</option>
                                                                    <option value="quarterly_mode_factor">Quarterly
                                                                        Mode
                                                                        Factor</option>
                                                                    <option value="monthly_mode_factor">Monthly Mode
                                                                        Factor
                                                                    </option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-12 ">
                                                            <div class="mb-1">

                                                                <button type="button"
                                                                    onclick="DeleteHtml('Annual',{{ $annual_counter }})"
                                                                    class="btn btn-flat-danger waves-effect">
                                                                    <i data-feather="x" class="me-25"></i>
                                                                    <span>Remove Step</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                @endif
                                            @endforeach

                                        </div>
                                        <div class="row ">
                                            <div class="col-12">

                                                <button type="button"
                                                    onclick="AddHtml('Annual',{{ $annual_counter }})"
                                                    class="btn btn-flat-success waves-effect add_step_button">
                                                    <i data-feather="plus" class="me-25"></i>
                                                    <span>Add Step </span>
                                                </button>

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
                <div class="formula-repeater" id="">
                    <div class="content-body">
                        <section class="form-control-repeater">
                            <div class="row">
                                <!-- Invoice repeater -->
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title"><strong style="color:black">Semi Annual Rate
                                                </strong>For Policy Type : Whole</h4>
                                        </div>
                                        <div class="card-body Semi_Annual_div">
                                            @foreach (json_decode($company_with_factor->FORMULA) as $key => $item)
                                                @if ($item->type == 'semi_annual' && $item->policy_type == 'whole')
                                                    {!! $semi_annual_counter = $semi_annual_counter + 1 !!}
                                                    <div class="row d-flex align-items-end"
                                                        id="Semi_Annual_row_{{ $semi_annual_counter }}">
                                                        <div class="col-md-2 col-12">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="feature">Result
                                                                    Variable
                                                                </label>
                                                                <input type="text"
                                                                    class="form-control result_variable_semi_annual"
                                                                    name="Company_Formula_For_Semi_Annual[{{ $semi_annual_counter }}][result_variable]"
                                                                    aria-describedby="result_variable"
                                                                    value="{{ $item->result_variable }}" required>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-12">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="feature">Operand1
                                                                </label>
                                                                <select
                                                                    class="select2 form-control operand operand_one_select_semi_annual"
                                                                    name="Company_Formula_For_Semi_Annual[{{ $semi_annual_counter }}][operand1]"
                                                                    aria-describedby="operand1" required>
                                                                    <option value="{{ $item->operand1 }}" selected>
                                                                        {{ $item->operand1 }}</option>
                                                                    <option value="rate_from_db">Rate From DB
                                                                    </option>
                                                                    <option value="coverage">Coverage of the User
                                                                    </option>
                                                                    <option value="age">Age of User</option>
                                                                    <option value="annual_policy_fee">Annual Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="semi_annual_policy_fee">Semi
                                                                        Annual
                                                                        Policy Fee</option>
                                                                    <option value="quarterly_policy_fee">Quarterly
                                                                        Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="monthly_policy_fee">Monthly
                                                                        Policy Fee
                                                                    </option>
                                                                    <option value="annual_mode_factor">Annual Mode
                                                                        Factor
                                                                    </option>
                                                                    <option value="semi_annual_mode_factor">Semi
                                                                        Annual Mode
                                                                        Factor</option>
                                                                    <option value="quarterly_mode_factor">Quarterly
                                                                        Mode
                                                                        Factor</option>
                                                                    <option value="monthly_mode_factor">Monthly Mode
                                                                        Factor
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
                                                                    name="Company_Formula_For_Semi_Annual[{{ $semi_annual_counter }}][Operator]"
                                                                    aria-describedby="Operator" required>
                                                                    <option value="{{ $item->Operator }}" selected>
                                                                        {{ $item->Operator }}
                                                                    </option>
                                                                    <option value="+">+</option>
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
                                                                <label class="form-label" for="Operand ">Opernad
                                                                    2
                                                                </label>
                                                                <select
                                                                    class="select2 form-select operand operand_two_select_semi_annual"
                                                                    name="Company_Formula_For_Semi_Annual[{{ $semi_annual_counter }}][operand2]"
                                                                    aria-describedby="operand2" required>
                                                                    <option value="{{ $item->operand2 }}" selected>
                                                                        {{ $item->operand2 }}</option>
                                                                    <option value="rate_from_db">Rate From DB
                                                                    </option>
                                                                    <option value="coverage">Coverage of the User
                                                                    </option>
                                                                    <option value="age">Age of User</option>
                                                                    <option value="annual_policy_fee">Annual Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="semi_annual_policy_fee">Semi
                                                                        Annual
                                                                        Policy Fee</option>
                                                                    <option value="quarterly_policy_fee">Quarterly
                                                                        Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="monthly_policy_fee">Monthly
                                                                        Policy Fee
                                                                    </option>
                                                                    <option value="annual_mode_factor">Annual Mode
                                                                        Factor
                                                                    </option>
                                                                    <option value="semi_annual_mode_factor">Semi
                                                                        Annual Mode
                                                                        Factor</option>
                                                                    <option value="quarterly_mode_factor">Quarterly
                                                                        Mode
                                                                        Factor</option>
                                                                    <option value="monthly_mode_factor">Monthly Mode
                                                                        Factor
                                                                    </option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-12 ">
                                                            <div class="mb-1">

                                                                <button type="button"
                                                                    onclick="DeleteHtml('Semi_Annual',{{ $semi_annual_counter }})"
                                                                    class="btn btn-flat-danger waves-effect">
                                                                    <i data-feather="x" class="me-25"></i>
                                                                    <span>Remove Step</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                @endif
                                            @endforeach

                                        </div>
                                        <div class="row">
                                            <div class="col-12">

                                                <button type="button"
                                                    onclick="AddHtml('Semi_Annual',{{ $semi_annual_counter }})"
                                                    class="btn btn-flat-success waves-effect add_step_button">
                                                    <i data-feather="plus" class="me-25"></i>
                                                    <span>Add Step </span>
                                                </button>

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
                <div class="formula-repeater" id="">
                    <div class="content-body">
                        <section class="form-control-repeater">
                            <div class="row">
                                <!-- Invoice repeater -->
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title"><strong style="color:black">Quarterly Rate
                                                </strong>For Policy Type : Whole</h4>
                                        </div>
                                        <div class="card-body Quarterly_div">
                                            @foreach (json_decode($company_with_factor->FORMULA) as $key => $item)
                                                @if ($item->type == 'quarterly' && $item->policy_type == 'whole')
                                                    {!! $quarterly_counter = $quarterly_counter + 1 !!}
                                                    <div class="row d-flex align-items-end"
                                                        id="Quarterly_row_{{ $quarterly_counter }}">
                                                        <div class="col-md-2 col-12">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="feature">Result
                                                                    Variable
                                                                </label>
                                                                <input type="text"
                                                                    class="form-control result_variable_quarterly"
                                                                    name="Company_Formula_For_Quarterly[{{ $quarterly_counter }}][result_variable]"
                                                                    aria-describedby="result_variable"
                                                                    value="{{ $item->result_variable }}" required>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-12">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="feature">Operand1
                                                                </label>
                                                                <select
                                                                    class="select2 form-control operand operand_one_select_quarterly"
                                                                    name="Company_Formula_For_Quarterly[{{ $quarterly_counter }}][operand1]"
                                                                    aria-describedby="operand1" required>
                                                                    <option value="{{ $item->operand1 }}" selected>
                                                                        {{ $item->operand1 }}</option>
                                                                    <option value="rate_from_db">Rate From DB
                                                                    </option>
                                                                    <option value="coverage">Coverage of the User
                                                                    </option>
                                                                    <option value="age">Age of User</option>
                                                                    <option value="annual_policy_fee">Annual Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="semi_annual_policy_fee">Semi
                                                                        Annual
                                                                        Policy Fee</option>
                                                                    <option value="quarterly_policy_fee">Quarterly
                                                                        Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="monthly_policy_fee">Monthly
                                                                        Policy Fee
                                                                    </option>
                                                                    <option value="annual_mode_factor">Annual Mode
                                                                        Factor
                                                                    </option>
                                                                    <option value="semi_annual_mode_factor">Semi
                                                                        Annual Mode
                                                                        Factor</option>
                                                                    <option value="quarterly_mode_factor">Quarterly
                                                                        Mode
                                                                        Factor</option>
                                                                    <option value="monthly_mode_factor">Monthly Mode
                                                                        Factor
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
                                                                    name="Company_Formula_For_Quarterly[{{ $quarterly_counter }}][Operator]"
                                                                    aria-describedby="Operator" required>
                                                                    <option value="{{ $item->Operator }}" selected>
                                                                        {{ $item->Operator }}
                                                                    </option>
                                                                    <option value="+">+</option>
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
                                                                    class="select2 form-select operand operand_two_select_quarterly"
                                                                    name="Company_Formula_For_Quarterly[{{ $quarterly_counter }}][operand2]"
                                                                    aria-describedby="operand2" required>
                                                                    <option value="{{ $item->operand2 }}" selected>
                                                                        {{ $item->operand2 }}</option>
                                                                    <option value="rate_from_db">Rate From DB
                                                                    </option>
                                                                    <option value="coverage">Coverage of the User
                                                                    </option>
                                                                    <option value="age">Age of User</option>
                                                                    <option value="annual_policy_fee">Annual Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="semi_annual_policy_fee">Semi
                                                                        Annual
                                                                        Policy Fee</option>
                                                                    <option value="quarterly_policy_fee">Quarterly
                                                                        Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="monthly_policy_fee">Monthly
                                                                        Policy Fee
                                                                    </option>
                                                                    <option value="annual_mode_factor">Annual Mode
                                                                        Factor
                                                                    </option>
                                                                    <option value="semi_annual_mode_factor">Semi
                                                                        Annual Mode
                                                                        Factor</option>
                                                                    <option value="quarterly_mode_factor">Quarterly
                                                                        Mode
                                                                        Factor</option>
                                                                    <option value="monthly_mode_factor">Monthly Mode
                                                                        Factor
                                                                    </option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-12 ">
                                                            <div class="mb-1">

                                                                <button type="button"
                                                                    onclick="DeleteHtml('Quarterly',{{ $quarterly_counter }})"
                                                                    class="btn btn-flat-danger waves-effect">
                                                                    <i data-feather="x" class="me-25"></i>
                                                                    <span>Remove Step</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="row">
                                            <div class="col-12">

                                                <button type="button"
                                                    onclick="AddHtml('Quarterly',{{ $quarterly_counter }})"
                                                    class="btn btn-flat-success waves-effect add_step_button">
                                                    <i data-feather="plus" class="me-25"></i>
                                                    <span>Add Step </span>
                                                </button>

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
                <div class="formula-repeater" id="">
                    <div class="content-body">
                        <section class="form-control-repeater">
                            <div class="row">
                                <!-- Invoice repeater -->
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title"><strong style="color:black">Monthly Rate
                                                </strong>For Policy Type : Whole</h4>
                                        </div>
                                        <div class="card-body Monthly_div">
                                            @foreach (json_decode($company_with_factor->FORMULA) as $key => $item)
                                                @if ($item->type == 'monthly' && $item->policy_type == 'whole')
                                                    {!! $monthly_counter = $monthly_counter + 1 !!}
                                                    <div class="row d-flex align-items-end"
                                                        id="Monthly_row_{{ $monthly_counter }}">
                                                        <div class="col-md-2 col-12">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="feature">Result
                                                                    Variable
                                                                </label>
                                                                <input type="text"
                                                                    class="form-control result_variable_monthly"
                                                                    name="Company_Formula_For_Monthly[{{ $monthly_counter }}][result_variable]"
                                                                    aria-describedby="result_variable"
                                                                    value="{{ $item->result_variable }}" required>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-12">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="feature">Operand1
                                                                </label>
                                                                <select
                                                                    class="select2 form-control operand operand_one_select_monthly"
                                                                    name="Company_Formula_For_Monthly[{{ $monthly_counter }}][operand1]"
                                                                    aria-describedby="operand1" required>
                                                                    <option value="{{ $item->operand1 }}" selected>
                                                                        {{ $item->operand1 }}</option>
                                                                    <option value="rate_from_db">Rate From DB
                                                                    </option>
                                                                    <option value="coverage">Coverage of the User
                                                                    </option>
                                                                    <option value="age">Age of User</option>
                                                                    <option value="annual_policy_fee">Annual Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="semi_annual_policy_fee">Semi
                                                                        Annual
                                                                        Policy Fee</option>
                                                                    <option value="quarterly_policy_fee">Quarterly
                                                                        Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="monthly_policy_fee">Monthly
                                                                        Policy Fee
                                                                    </option>
                                                                    <option value="annual_mode_factor">Annual Mode
                                                                        Factor
                                                                    </option>
                                                                    <option value="semi_annual_mode_factor">Semi
                                                                        Annual Mode
                                                                        Factor</option>
                                                                    <option value="quarterly_mode_factor">Quarterly
                                                                        Mode
                                                                        Factor</option>
                                                                    <option value="monthly_mode_factor">Monthly Mode
                                                                        Factor
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
                                                                    name="Company_Formula_For_Monthly[{{ $monthly_counter }}][Operator]"
                                                                    aria-describedby="Operator" required>
                                                                    <option value="{{ $item->Operator }}" selected>
                                                                        {{ $item->Operator }}
                                                                    </option>
                                                                    <option value="+">+</option>
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
                                                                    class="select2 form-select operand operand_two_select_monthly"
                                                                    name="Company_Formula_For_Monthly[{{ $monthly_counter }}][operand2]"
                                                                    aria-describedby="operand2" required>
                                                                    <option value="{{ $item->operand2 }}" selected>
                                                                        {{ $item->operand2 }}</option>
                                                                    <option value="rate_from_db">Rate From DB
                                                                    </option>
                                                                    <option value="coverage">Coverage of the User
                                                                    </option>
                                                                    <option value="age">Age of User</option>
                                                                    <option value="annual_policy_fee">Annual Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="semi_annual_policy_fee">Semi
                                                                        Annual
                                                                        Policy Fee</option>
                                                                    <option value="quarterly_policy_fee">Quarterly
                                                                        Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="monthly_policy_fee">Monthly
                                                                        Policy Fee
                                                                    </option>
                                                                    <option value="annual_mode_factor">Annual Mode
                                                                        Factor
                                                                    </option>
                                                                    <option value="semi_annual_mode_factor">Semi
                                                                        Annual Mode
                                                                        Factor</option>
                                                                    <option value="quarterly_mode_factor">Quarterly
                                                                        Mode
                                                                        Factor</option>
                                                                    <option value="monthly_mode_factor">Monthly Mode
                                                                        Factor
                                                                    </option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-12 ">

                                                            <div class="mb-1">
                                                                <button type="button"
                                                                    onclick="DeleteHtml('Monthly',{{ $monthly_counter }})"
                                                                    class="btn btn-flat-danger waves-effect">
                                                                    <i data-feather="x" class="me-25"></i>
                                                                    <span>Remove Step</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                @endif
                                            @endforeach

                                        </div>
                                        <div class="row">
                                            <div class="col-12">

                                                <button type="button"
                                                    onclick="AddHtml('Monthly',{{ $monthly_counter }})"
                                                    class="btn btn-flat-success waves-effect add_step_button">
                                                    <i data-feather="plus" class="me-25"></i>
                                                    <span>Add Step </span>
                                                </button>

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
        <hr>
        <h2 class="accordion-header" id="headingMarginOne">
            <marquee width="100%" direction="left" style="background: black;font-family:cursive;
        color: cornsilk;">
                Fill Me For Policy Type => Term 🙋
            </marquee>

        </h2>

        <div class="row">
            <div class="col-md-12 col-12">
                <div class="formula-repeater" id="">
                    <div class="content-body">
                        <section class="form-control-repeater">
                            <div class="row">
                                <!-- Invoice repeater -->
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title"><strong style="color:black"> Annual Rate
                                                </strong>For Policy Type : Term</h4>

                                        </div>
                                        <div class="card-body Annual_Term_div">
                                            @foreach (json_decode($company_with_factor->FORMULA) as $key => $item)
                                                @if ($item->type == 'annual' && $item->policy_type == 'term')
                                                    {!! $annual_term_counter = $annual_term_counter + 1 !!}
                                                    <div class="row d-flex align-items-end"
                                                        id="Annual_Term_row_{{ $annual_term_counter }}">

                                                        <div class="col-md-2 col-12">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="feature">Result
                                                                    Variable
                                                                </label>
                                                                <input type="text"
                                                                    class="form-control result_variable_annual_term"
                                                                    name="Company_Formula_For_Annual_Term[{{ $annual_term_counter }}][result_variable]"
                                                                    aria-describedby="result_variable"
                                                                    value="{{ $item->result_variable }}" required>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-12">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="feature">Operand1
                                                                </label>
                                                                <select
                                                                    class="select2 form-control operand operand_one_select_annual_term"
                                                                    name="Company_Formula_For_Annual_Term[{{ $annual_term_counter }}][operand1]"
                                                                    aria-describedby="operand1" required>
                                                                    <option value="{{ $item->operand1 }}" selected>
                                                                        {{ $item->operand1 }}</option>
                                                                    <option value="rate_from_db">Rate From DB
                                                                    </option>
                                                                    <option value="coverage">Coverage of the User
                                                                    </option>
                                                                    <option value="age">Age of User</option>
                                                                    <option value="annual_policy_fee">Annual Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="semi_annual_policy_fee">Semi
                                                                        Annual
                                                                        Policy Fee</option>
                                                                    <option value="quarterly_policy_fee">Quarterly
                                                                        Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="monthly_policy_fee">Monthly
                                                                        Policy Fee
                                                                    </option>
                                                                    <option value="annual_mode_factor">Annual Mode
                                                                        Factor
                                                                    </option>
                                                                    <option value="semi_annual_mode_factor">Semi
                                                                        Annual Mode
                                                                        Factor</option>
                                                                    <option value="quarterly_mode_factor">Quarterly
                                                                        Mode
                                                                        Factor</option>
                                                                    <option value="monthly_mode_factor">Monthly Mode
                                                                        Factor
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
                                                                    name="Company_Formula_For_Annual_Term[{{ $annual_term_counter }}][Operator]"
                                                                    aria-describedby="Operator" required>
                                                                    <option value="{{ $item->Operator }}" selected>
                                                                        {{ $item->Operator }}
                                                                    </option>
                                                                    <option value="+">+</option>
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
                                                                <label class="form-label" for="Operand ">Opernad
                                                                    2
                                                                </label>
                                                                <select
                                                                    class="select2 form-select operand operand_two_select_annual_term"
                                                                    name="Company_Formula_For_Annual_Term[{{ $annual_term_counter }}][operand2]"
                                                                    aria-describedby="operand2" required>
                                                                    <option value="{{ $item->operand2 }}" selected>
                                                                        {{ $item->operand2 }}</option>
                                                                    <option value="rate_from_db">Rate From DB
                                                                    </option>
                                                                    <option value="coverage">Coverage of the User
                                                                    </option>
                                                                    <option value="age">Age of User</option>
                                                                    <option value="annual_policy_fee">Annual Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="semi_annual_policy_fee">Semi
                                                                        Annual
                                                                        Policy Fee</option>
                                                                    <option value="quarterly_policy_fee">Quarterly
                                                                        Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="monthly_policy_fee">Monthly
                                                                        Policy Fee
                                                                    </option>
                                                                    <option value="annual_mode_factor">Annual Mode
                                                                        Factor
                                                                    </option>
                                                                    <option value="semi_annual_mode_factor">Semi
                                                                        Annual Mode
                                                                        Factor</option>
                                                                    <option value="quarterly_mode_factor">Quarterly
                                                                        Mode
                                                                        Factor</option>
                                                                    <option value="monthly_mode_factor">Monthly Mode
                                                                        Factor
                                                                    </option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-12 ">
                                                            <div class="mb-1">

                                                                <button type="button"
                                                                    onclick="DeleteHtml('Annual_Term',{{ $annual_term_counter }})"
                                                                    class="btn btn-flat-danger waves-effect">
                                                                    <i data-feather="x" class="me-25"></i>
                                                                    <span>Remove Step</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                @endif
                                            @endforeach

                                        </div>
                                        <div class="row ">
                                            <div class="col-12">

                                                <button type="button"
                                                    onclick="AddHtml('Annual_Term',{{ $annual_term_counter }})"
                                                    class="btn btn-flat-success waves-effect add_step_button">
                                                    <i data-feather="plus" class="me-25"></i>
                                                    <span>Add Step </span>
                                                </button>

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
                <div class="formula-repeater" id="">
                    <div class="content-body">
                        <section class="form-control-repeater">
                            <div class="row">
                                <!-- Invoice repeater -->
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title"><strong style="color:black">Semi Annual Rate
                                                </strong>For Policy Type : Term</h4>
                                        </div>
                                        <div class="card-body Semi_Annual_Term_div">
                                            @foreach (json_decode($company_with_factor->FORMULA) as $key => $item)
                                                @if ($item->type == 'semi_annual' && $item->policy_type == 'term')
                                                    {!! $semi_annual_term_counter = $semi_annual_term_counter + 1 !!}
                                                    <div class="row d-flex align-items-end"
                                                        id="Semi_Annual_Term_row_{{ $semi_annual_term_counter }}">
                                                        <div class="col-md-2 col-12">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="feature">Result
                                                                    Variable
                                                                </label>
                                                                <input type="text"
                                                                    class="form-control result_variable_semi_annual_term"
                                                                    name="Company_Formula_For_Semi_Annual_Term[{{ $semi_annual_term_counter }}][result_variable]"
                                                                    aria-describedby="result_variable"
                                                                    value="{{ $item->result_variable }}" required>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-12">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="feature">Operand1
                                                                </label>
                                                                <select
                                                                    class="select2 form-control operand operand_one_select_semi_annual_term"
                                                                    name="Company_Formula_For_Semi_Annual_Term[{{ $semi_annual_term_counter }}][operand1]"
                                                                    aria-describedby="operand1" required>
                                                                    <option value="{{ $item->operand1 }}" selected>
                                                                        {{ $item->operand1 }}</option>
                                                                    <option value="rate_from_db">Rate From DB
                                                                    </option>
                                                                    <option value="coverage">Coverage of the User
                                                                    </option>
                                                                    <option value="age">Age of User</option>
                                                                    <option value="annual_policy_fee">Annual Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="semi_annual_policy_fee">Semi
                                                                        Annual
                                                                        Policy Fee</option>
                                                                    <option value="quarterly_policy_fee">Quarterly
                                                                        Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="monthly_policy_fee">Monthly
                                                                        Policy Fee
                                                                    </option>
                                                                    <option value="annual_mode_factor">Annual Mode
                                                                        Factor
                                                                    </option>
                                                                    <option value="semi_annual_mode_factor">Semi
                                                                        Annual Mode
                                                                        Factor</option>
                                                                    <option value="quarterly_mode_factor">Quarterly
                                                                        Mode
                                                                        Factor</option>
                                                                    <option value="monthly_mode_factor">Monthly Mode
                                                                        Factor
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
                                                                    name="Company_Formula_For_Semi_Annual_Term[{{ $semi_annual_term_counter }}][Operator]"
                                                                    aria-describedby="Operator" required>
                                                                    <option value="{{ $item->Operator }}" selected>
                                                                        {{ $item->Operator }}
                                                                    </option>
                                                                    <option value="+">+</option>
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
                                                                <label class="form-label" for="Operand ">Opernad
                                                                    2
                                                                </label>
                                                                <select
                                                                    class="select2 form-select operand operand_two_select_semi_annual_term"
                                                                    name="Company_Formula_For_Semi_Annual_Term[{{ $semi_annual_term_counter }}][operand2]"
                                                                    aria-describedby="operand2" required>
                                                                    <option value="{{ $item->operand2 }}" selected>
                                                                        {{ $item->operand2 }}</option>
                                                                    <option value="rate_from_db">Rate From DB
                                                                    </option>
                                                                    <option value="coverage">Coverage of the User
                                                                    </option>
                                                                    <option value="age">Age of User</option>
                                                                    <option value="annual_policy_fee">Annual Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="semi_annual_policy_fee">Semi
                                                                        Annual
                                                                        Policy Fee</option>
                                                                    <option value="quarterly_policy_fee">Quarterly
                                                                        Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="monthly_policy_fee">Monthly
                                                                        Policy Fee
                                                                    </option>
                                                                    <option value="annual_mode_factor">Annual Mode
                                                                        Factor
                                                                    </option>
                                                                    <option value="semi_annual_mode_factor">Semi
                                                                        Annual Mode
                                                                        Factor</option>
                                                                    <option value="quarterly_mode_factor">Quarterly
                                                                        Mode
                                                                        Factor</option>
                                                                    <option value="monthly_mode_factor">Monthly Mode
                                                                        Factor
                                                                    </option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-12 ">
                                                            <div class="mb-1">

                                                                <button type="button"
                                                                    onclick="DeleteHtml('Semi_Annual_Term',{{ $semi_annual_term_counter }})"
                                                                    class="btn btn-flat-danger waves-effect">
                                                                    <i data-feather="x" class="me-25"></i>
                                                                    <span>Remove Step</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                @endif
                                            @endforeach

                                        </div>
                                        <div class="row">
                                            <div class="col-12">

                                                <button type="button"
                                                    onclick="AddHtml('Semi_Annual_Term',{{ $semi_annual_term_counter }})"
                                                    class="btn btn-flat-success waves-effect add_step_button">
                                                    <i data-feather="plus" class="me-25"></i>
                                                    <span>Add Step </span>
                                                </button>

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
                <div class="formula-repeater" id="">
                    <div class="content-body">
                        <section class="form-control-repeater">
                            <div class="row">
                                <!-- Invoice repeater -->
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title"><strong style="color:black">Quarterly Rate
                                                </strong>For Policy Type : Term</h4>
                                        </div>
                                        <div class="card-body Quarterly_Term_div">
                                            @foreach (json_decode($company_with_factor->FORMULA) as $key => $item)
                                                @if ($item->type == 'quarterly' && $item->policy_type == 'term')
                                                    {!! $quarterly_term_counter = $quarterly_term_counter + 1 !!}
                                                    <div class="row d-flex align-items-end"
                                                        id="Quarterly_Term_row_{{ $quarterly_term_counter }}">
                                                        <div class="col-md-2 col-12">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="feature">Result
                                                                    Variable
                                                                </label>
                                                                <input type="text"
                                                                    class="form-control result_variable_quarterly_term"
                                                                    name="Company_Formula_For_Quarterly_Term[{{ $quarterly_term_counter }}][result_variable]"
                                                                    aria-describedby="result_variable"
                                                                    value="{{ $item->result_variable }}" required>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-12">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="feature">Operand1
                                                                </label>
                                                                <select
                                                                    class="select2 form-control operand operand_one_select_quarterly_term"
                                                                    name="Company_Formula_For_Quarterly_Term[{{ $quarterly_term_counter }}][operand1]"
                                                                    aria-describedby="operand1" required>
                                                                    <option value="{{ $item->operand1 }}" selected>
                                                                        {{ $item->operand1 }}</option>
                                                                    <option value="rate_from_db">Rate From DB
                                                                    </option>
                                                                    <option value="coverage">Coverage of the User
                                                                    </option>
                                                                    <option value="age">Age of User</option>
                                                                    <option value="annual_policy_fee">Annual Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="semi_annual_policy_fee">Semi
                                                                        Annual
                                                                        Policy Fee</option>
                                                                    <option value="quarterly_policy_fee">Quarterly
                                                                        Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="monthly_policy_fee">Monthly
                                                                        Policy Fee
                                                                    </option>
                                                                    <option value="annual_mode_factor">Annual Mode
                                                                        Factor
                                                                    </option>
                                                                    <option value="semi_annual_mode_factor">Semi
                                                                        Annual Mode
                                                                        Factor</option>
                                                                    <option value="quarterly_mode_factor">Quarterly
                                                                        Mode
                                                                        Factor</option>
                                                                    <option value="monthly_mode_factor">Monthly Mode
                                                                        Factor
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
                                                                    name="Company_Formula_For_Quarterly_Term[{{ $quarterly_term_counter }}][Operator]"
                                                                    aria-describedby="Operator" required>
                                                                    <option value="{{ $item->Operator }}" selected>
                                                                        {{ $item->Operator }}
                                                                    </option>
                                                                    <option value="+">+</option>
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
                                                                    class="select2 form-select operand operand_two_select_quarterly_term"
                                                                    name="Company_Formula_For_Quarterly_Term[{{ $quarterly_term_counter }}][operand2]"
                                                                    aria-describedby="operand2" required>
                                                                    <option value="{{ $item->operand2 }}" selected>
                                                                        {{ $item->operand2 }}</option>
                                                                    <option value="rate_from_db">Rate From DB
                                                                    </option>
                                                                    <option value="coverage">Coverage of the User
                                                                    </option>
                                                                    <option value="age">Age of User</option>
                                                                    <option value="annual_policy_fee">Annual Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="semi_annual_policy_fee">Semi
                                                                        Annual
                                                                        Policy Fee</option>
                                                                    <option value="quarterly_policy_fee">Quarterly
                                                                        Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="monthly_policy_fee">Monthly
                                                                        Policy Fee
                                                                    </option>
                                                                    <option value="annual_mode_factor">Annual Mode
                                                                        Factor
                                                                    </option>
                                                                    <option value="semi_annual_mode_factor">Semi
                                                                        Annual Mode
                                                                        Factor</option>
                                                                    <option value="quarterly_mode_factor">Quarterly
                                                                        Mode
                                                                        Factor</option>
                                                                    <option value="monthly_mode_factor">Monthly Mode
                                                                        Factor
                                                                    </option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-12 ">
                                                            <div class="mb-1">

                                                                <button type="button"
                                                                    onclick="DeleteHtml('Quarterly_Term',{{ $quarterly_term_counter }})"
                                                                    class="btn btn-flat-danger waves-effect">
                                                                    <i data-feather="x" class="me-25"></i>
                                                                    <span>Remove Step</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="row">
                                            <div class="col-12">

                                                <button type="button"
                                                    onclick="AddHtml('Quarterly_Term',{{ $quarterly_term_counter }})"
                                                    class="btn btn-flat-success waves-effect add_step_button">
                                                    <i data-feather="plus" class="me-25"></i>
                                                    <span>Add Step </span>
                                                </button>

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
                <div class="formula-repeater" id="">
                    <div class="content-body">
                        <section class="form-control-repeater">
                            <div class="row">
                                <!-- Invoice repeater -->
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title"><strong style="color:black">Monthly Rate
                                                </strong>For Policy Type : Term</h4>
                                        </div>
                                        <div class="card-body Monthly_Term_div">
                                            @foreach (json_decode($company_with_factor->FORMULA) as $key => $item)
                                                @if ($item->type == 'monthly' && $item->policy_type == 'term')
                                                    {!! $monthly_term_counter = $monthly_term_counter + 1 !!}
                                                    <div class="row d-flex align-items-end"
                                                        id="Monthly_Term_row_{{ $monthly_term_counter }}">
                                                        <div class="col-md-2 col-12">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="feature">Result
                                                                    Variable
                                                                </label>
                                                                <input type="text"
                                                                    class="form-control result_variable_monthly_term"
                                                                    name="Company_Formula_For_Monthly_Term[{{ $monthly_term_counter }}][result_variable]"
                                                                    aria-describedby="result_variable"
                                                                    value="{{ $item->result_variable }}" required>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-12">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="feature">Operand1
                                                                </label>
                                                                <select
                                                                    class="select2 form-control operand operand_one_select_monthly_term"
                                                                    name="Company_Formula_For_Monthly_Term[{{ $monthly_term_counter }}][operand1]"
                                                                    aria-describedby="operand1" required>
                                                                    <option value="{{ $item->operand1 }}" selected>
                                                                        {{ $item->operand1 }}</option>
                                                                    <option value="rate_from_db">Rate From DB
                                                                    </option>
                                                                    <option value="coverage">Coverage of the User
                                                                    </option>
                                                                    <option value="age">Age of User</option>
                                                                    <option value="annual_policy_fee">Annual Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="semi_annual_policy_fee">Semi
                                                                        Annual
                                                                        Policy Fee</option>
                                                                    <option value="quarterly_policy_fee">Quarterly
                                                                        Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="monthly_policy_fee">Monthly
                                                                        Policy Fee
                                                                    </option>
                                                                    <option value="annual_mode_factor">Annual Mode
                                                                        Factor
                                                                    </option>
                                                                    <option value="semi_annual_mode_factor">Semi
                                                                        Annual Mode
                                                                        Factor</option>
                                                                    <option value="quarterly_mode_factor">Quarterly
                                                                        Mode
                                                                        Factor</option>
                                                                    <option value="monthly_mode_factor">Monthly Mode
                                                                        Factor
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
                                                                    name="Company_Formula_For_Monthly_Term[{{ $monthly_term_counter }}][Operator]"
                                                                    aria-describedby="Operator" required>
                                                                    <option value="{{ $item->Operator }}" selected>
                                                                        {{ $item->Operator }}
                                                                    </option>
                                                                    <option value="+">+</option>
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
                                                                    class="select2 form-select operand operand_two_select_monthly_term"
                                                                    name="Company_Formula_For_Monthly_Term[{{ $monthly_term_counter }}][operand2]"
                                                                    aria-describedby="operand2" required>
                                                                    <option value="{{ $item->operand2 }}" selected>
                                                                        {{ $item->operand2 }}</option>
                                                                    <option value="rate_from_db">Rate From DB
                                                                    </option>
                                                                    <option value="coverage">Coverage of the User
                                                                    </option>
                                                                    <option value="age">Age of User</option>
                                                                    <option value="annual_policy_fee">Annual Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="semi_annual_policy_fee">Semi
                                                                        Annual
                                                                        Policy Fee</option>
                                                                    <option value="quarterly_policy_fee">Quarterly
                                                                        Policy
                                                                        Fee
                                                                    </option>
                                                                    <option value="monthly_policy_fee">Monthly
                                                                        Policy Fee
                                                                    </option>
                                                                    <option value="annual_mode_factor">Annual Mode
                                                                        Factor
                                                                    </option>
                                                                    <option value="semi_annual_mode_factor">Semi
                                                                        Annual Mode
                                                                        Factor</option>
                                                                    <option value="quarterly_mode_factor">Quarterly
                                                                        Mode
                                                                        Factor</option>
                                                                    <option value="monthly_mode_factor">Monthly Mode
                                                                        Factor
                                                                    </option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-12 ">

                                                            <div class="mb-1">
                                                                <button type="button"
                                                                    onclick="DeleteHtml('Monthly_Term',{{ $monthly_term_counter }})"
                                                                    class="btn btn-flat-danger waves-effect">
                                                                    <i data-feather="x" class="me-25"></i>
                                                                    <span>Remove Step</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                @endif
                                            @endforeach

                                        </div>
                                        <div class="row">
                                            <div class="col-12">

                                                <button type="button"
                                                    onclick="AddHtml('Monthly_Term',{{ $monthly_term_counter }})"
                                                    class="btn btn-flat-success waves-effect add_step_button">
                                                    <i data-feather="plus" class="me-25"></i>
                                                    <span>Add Step </span>
                                                </button>

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
</form>

@push('extended-js')
    <script>
        function IncrementPhpVariable(variableName) {
            if (variableName == "Annual") {
                annual_counter += 1;

            } else if (variableName == "Semi_Annual") {
                semi_annual_counter += 1;

            } else if (variableName == "Quarterly") {
                quarterly_counter += 1;

            } else if (variableName == "Monthly") {
                monthly_counter += 1;

            } else if (variableName == "Annual_Term") {
                annual_term_counter += 1;

            } else if (variableName == "Semi_Annual_Term") {
                semi_annual_term_counter += 1;

            } else if (variableName == "Quarterly_Term") {
                quarterly_term_counter += 1;

            } else if (variableName == "Monthly_Term") {
                monthly_term_counter += 1;

            }
        }

        function DecrementPhpVariable(variableName) {
            if (variableName == "Annual") {
                annual_counter -= 1;

            } else if (variableName == "Semi_Annual") {
                semi_annual_counter -= 1;

            } else if (variableName == "Quarterly") {
                quarterly_counter -= 1;

            } else if (variableName == "Monthly") {
                monthly_counter -= 1;

            } else if (variableName == "Annual_Term") {
                annual_term_counter -= 1;

            } else if (variableName == "Semi_Annual_Term") {
                semi_annual_term_counter -= 1;

            } else if (variableName == "Quarterly_Term") {
                quarterly_term_counter -= 1;

            } else if (variableName == "Monthly_Term") {
                monthly_term_counter -= 1;

            }
        }
    </script>
@endpush
