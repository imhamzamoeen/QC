<?php
$adb_whole_counter = -1;
$child_whole_counter = -1;
$adb_term_counter = -1;
$child_term_counter = -1;
?>
<form id="company_rider_form" novalidate>
  
    <div class="row mb-2">
        <div class="col-md-5 card ml-2">

            <div class="row custom-options-checkable g-1 mb-3 ">

                <div class="col-md-12 card-body">
                    <input class="custom-option-item-check rider_checkbox" type="checkbox" name="whole_rider_checkbox"
                        id="customOptionsCheckableCheckbox1" value="whole_rider" />
                    <label class="custom-option-item p-1" for="customOptionsCheckableCheckbox1">
                        <span class="d-flex justify-content-between flex-wrap mb-50">
                            <span class="fw-bolder">Whole</span>
                        </span>
                        <i class='fa fa-sticky-note bx-flashing'> <small style="color:red">Check me if company provides
                                riders for Whole</small></i>

                    </label>
                </div>

            </div>

            <!-- Legacy Rider Rate rate for whole start -->
            <div class="row" id="whole_rider_legacy_repeater_for_whole">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Legacy Rider</h4>

                        </div>
                        <div class="card-body">
                            <div class="row d-flex align-items-end">
                                <div class="col-md-12 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="itemname">Legacy Rider rate </label>
                                        <input type="number" class="form-control" name="legacy_rider_rate_whole"
                                            aria-describedby="leacy rider rate" placeholder="0"
                                            value="{{ $company_with_factor->LEGACY->legacy_rider_rate_whole ?? 0 }}" />
                                        <i class='fa fa-sticky-note '> <small style="color:red">Leave it blank
                                                or give 0 if not supported.</small></i>
                                    </div>
                                </div>
                            </div>
                            <hr />
                        </div>
                    </div>
                </div>
            </div>
            <!-- Legacy Rider Rate for whole end -->
            <!--First repeater for whole -->
            <div class="invoice-repeater" id="whole_rider_adb_repeater_for_whole">
                <div class="content-body">
                    <section class="form-control-repeater">
                        <div class="row">
                            <!-- Invoice repeater -->
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">ADB Rider</h4>
                                    </div>
                                    <div class="card-body Whole_ADB_div">
                                        @foreach (json_decode($company_with_factor->ADB) as $key => $item)
                                            @if ($item->type == 'whole')
                                                {!! $adb_whole_counter = $adb_whole_counter + 1 !!}
                                                <div class="row d-flex align-items-end"
                                                    id="Whole_ADB_{{ $adb_whole_counter }}">
                                                    <div class="col-md-2 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="itemname">Lower Age
                                                            </label>
                                                            <input type="number"
                                                                class="form-control lower_age_whole_class"
                                                                name="adb_rider_div_whole[{{ $key }}][lower_age_whole]"
                                                                value="{{ $item->lower_limit }}"
                                                                aria-describedby="Starting Age" placeholder="0" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="itemcost">Upper
                                                                Age</label>
                                                            <input type="number"
                                                                class="form-control upper_age_whole_class"
                                                                name="adb_rider_div_whole[{{ $key }}][upper_age_whole]"
                                                                value="{{ $item->upper_limit }}"
                                                                aria-describedby="Ending Age" placeholder="55" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="itemquantity">Annual
                                                                Rate</label>
                                                            <input type="number"
                                                                class="form-control annual_rate_whole_class"
                                                                name="adb_rider_div_whole[{{ $key }}][annual_rate_whole]"
                                                                value="{{ $item->annual_rate }}"
                                                                aria-describedby="Price" placeholder="$" />
                                                        </div>
                                                    </div>


                                                    <div class="col-md-2 col-12 ">
                                                        <div class="mb-1">
                                                            <button class="btn btn-outline-danger text-nowrap px-1"
                                                                onclick="DeleteRiderHtml('Whole_ADB_',{{ $adb_whole_counter }})"
                                                                type="button">
                                                                <i data-feather="x" class="me-25"></i>
                                                                <span>Delete</span>
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
                                                onclick="AddADBHtml('Whole',{{ $adb_whole_counter }})"
                                                class="btn btn-flat-success waves-effect add_step_button">
                                                <i data-feather="plus" class="me-25"></i>
                                                <span>Add ADB Step </span>
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
            <!-- Second repeater for whole  -->
            <div class="invoice-repeater" id="whole_rider_child_repeater_for_whole">

                <div class="content-body">
                    <section class="form-control-repeater">
                        <div class="row">
                            <!-- Invoice repeater -->
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Child Rider</h4>
                                    </div>
                                    <div class="card-body Whole_CHILD_div">
                                        <div class="col-md-12 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="itemcost">Max Children
                                                    Supported</label>
                                                <input type="number" class="form-control"
                                                    name="max_child_supported_whole"
                                                    aria-describedby="Number of unit supported" placeholder="5"
                                                    value="{{ count($company_with_factor->CHILD) - 1 >= 0? ($company_with_factor->CHILD[count($company_with_factor->CHILD) - 1]->type == 'whole'? $company_with_factor->CHILD[count($company_with_factor->CHILD) - 1]->max_child_rider: 0): 0 }}" />
                                            </div>
                                        </div>
                                        @foreach (json_decode($company_with_factor->CHILD) as $key => $item)
                                            @if ($item->type == 'whole')
                                                {!! $child_whole_counter = $child_whole_counter + 1 !!}
                                                <div class="row d-flex align-items-end"
                                                    id="Whole_CHILD_{{ $child_whole_counter }}">
                                                    <div class="col-md-4 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="itemname">Type </label>
                                                            <select class="form-select type_whole_class"
                                                                name="child_rider_repeater_whole[{{ $key }}][type_whole]"
                                                                placeholder="Select Policy Type">
                                                                <option value="{{ $item->RiderFor }}" selected>
                                                                    {{ $item->RiderFor }} </option>
                                                                <option value="Monthly">Monthly</option>
                                                                <option value="Quarterly">Quarterly</option>
                                                                <option value="Semi-Annual">Semi-Annual</option>
                                                                <option value="Annual">Annual</option>
                                                            </select>
                                                            {{-- <input type="number" class="form-control" id="type" aria-describedby="Policy Type" placeholder="Select Policy Type" /> --}}
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="itemcost">Whole Term
                                                                Rate</label>
                                                            <input type="number"
                                                                class="form-control whole_term_rate_whole_class"
                                                                value="{{ $item->whole_term_life }}"
                                                                name="child_rider_repeater_whole[{{ $key }}][whole_term_rate_whole]"
                                                                aria-describedby="Rate for whole and Term"
                                                                placeholder="$" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="itemquantity">20 Pay
                                                                Rate</label>
                                                            <input type="number"
                                                                class="form-control 20pay_rate_whole_class"
                                                                value="{{ $item->pay20 }}"
                                                                name="child_rider_repeater_whole[{{ $key }}][20pay_rate_whole]"
                                                                aria-describedby="Rate for 20 pay policy"
                                                                placeholder="$" />
                                                        </div>
                                                    </div>


                                                    <div class="col-md-2 col-12 ">
                                                        <div class="mb-1">
                                                            <button class="btn btn-outline-danger text-nowrap px-1"
                                                                onclick="DeleteRiderHtml('Whole_CHILD_',{{ $child_whole_counter }})"
                                                                type="button">
                                                                <i data-feather="x" class="me-25"></i>
                                                                <span>Delete</span>
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
                                                onclick="AddCHILDHtml('Whole',{{ $child_whole_counter }})"
                                                class="btn btn-flat-success waves-effect add_step_button">
                                                <i data-feather="plus" class="me-25"></i>
                                                <span>Add ADB Step </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Invoice repeater -->
                        </div>
                    </section>

                </div>
                <!-- second repeater end -->
            </div>
            <!-- Second repeater for whole End  -->

        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5 card ">

            <div class="row custom-options-checkable g-1 mb-3">
                <div class="col-md-12  card-body">
                    <input class="custom-option-item-check rider_checkbox" type="checkbox" name="term_rider_checkbox"
                        id="customOptionsCheckableCheckbox2" value="term_rider" />
                    <label class="custom-option-item p-1" for="customOptionsCheckableCheckbox2">
                        <span class="d-flex justify-content-between flex-wrap mb-50">
                            <span class="fw-bolder">Term</span>

                        </span>
                        <i class='fa fa-sticky-note bx-flashing'> <small style="color:red">Check me if the comapny
                                support riders for Term.</small></i>

                    </label>
                </div>
            </div>


            <!-- Legacy Rider Rate rate for Term start -->
            <div class="row" id="term_rider_legacy_repeater_for_whole">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Legacy Rider</h4>

                        </div>
                        <div class="card-body">
                            <div class="row d-flex align-items-end">
                                <div class="col-md-12 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="itemname">Legacy Rider rate </label>
                                        <input type="number" class="form-control" name="legacy_rider_rate_term"
                                            value="{{ $company_with_factor->LEGACY->legacy_rider_rate_term ?? 0 }}"
                                            aria-describedby="leacy rider rate" placeholder="0" />
                                        <i class='fa fa-sticky-note '> <small style="color:red">Leave it blank
                                                or give 0 if not supported.</small></i>
                                    </div>
                                </div>
                            </div>
                            <hr />
                        </div>
                    </div>
                </div>
            </div>
            <!-- Legacy Rider Rate for Term end -->
            <!--First repeater for Term -->
            <div class="invoice-repeater" id="term_rider_adb_repeater_for_whole">
                <div class="content-body">
                    <section class="form-control-repeater">
                        <div class="row">
                            <!-- Invoice repeater -->
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">ADB Rider</h4>
                                    </div>
                                    <div class="card-body Term_ADB_div">
                                        @foreach (json_decode($company_with_factor->ADB) as $key => $item)
                                            @if ($item->type == 'term')
                                                {!! $adb_term_counter = $adb_term_counter + 1 !!}
                                                <div class="row d-flex align-items-end"
                                                    id="Term_ADB_{{ $adb_term_counter }}">
                                                    <div class="col-md-2 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="itemname">Lower Age
                                                            </label>
                                                            <input type="number"
                                                                class="form-control lower_age_term_class"
                                                                name="adb_rider_div_term[{{ $key }}][lower_age_whole]"
                                                                value="{{ $item->lower_limit }}"
                                                                aria-describedby="Starting Age" placeholder="0" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="itemcost">Upper
                                                                Age</label>
                                                            <input type="number"
                                                                class="form-control upper_age_term_class"
                                                                name="adb_rider_div_term[{{ $key }}][upper_age_whole]"
                                                                value="{{ $item->upper_limit }}"
                                                                aria-describedby="Ending Age" placeholder="55" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="itemquantity">Annual
                                                                Rate</label>
                                                            <input type="number"
                                                                class="form-control annual_rate_term_class"
                                                                name="adb_rider_div_term[{{ $key }}][annual_rate_whole]"
                                                                value="{{ $item->annual_rate }}"
                                                                aria-describedby="Price" placeholder="$" />
                                                        </div>
                                                    </div>


                                                    <div class="col-md-2 col-12 ">
                                                        <div class="mb-1">
                                                            <button class="btn btn-outline-danger text-nowrap px-1"
                                                                onclick="DeleteRiderHtml('Term_ADB_',{{ $adb_term_counter }})"
                                                                type="button">
                                                                <i data-feather="x" class="me-25"></i>
                                                                <span>Delete</span>
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
                                            <div class="col-12">
                                                <button type="button"
                                                    onclick="AddADBHtml('Term',{{ $adb_term_counter }})"
                                                    class="btn btn-flat-success waves-effect add_step_button">
                                                    <i data-feather="plus" class="me-25"></i>
                                                    <span>Add ADB Step </span>
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
            <!--First repeater for Term End -->
            <!-- Second repeater for Term  -->
            <div class="invoice-repeater" id="term_rider_child_repeater_for_whole">

                <div class="content-body">
                    <section class="form-control-repeater">
                        <div class="row">
                            <!-- Invoice repeater -->
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Child Rider</h4>
                                    </div>
                                    <div class="card-body Term_CHILD_div">
                                        <div class="col-md-12 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="itemcost">Max Children
                                                    Supported</label>
                                                <input type="number" class="form-control"
                                                    value="{{ count($company_with_factor->CHILD) - 1 >= 0? ($company_with_factor->CHILD[count($company_with_factor->CHILD) - 1]->type == 'term'? $company_with_factor->CHILD[count($company_with_factor->CHILD) - 1]->max_child_rider: 0): 0 }}"
                                                    name="max_child_supported_term"
                                                    aria-describedby="Number of unit supported" placeholder="5" />
                                            </div>
                                        </div>
                                        @foreach (json_decode($company_with_factor->CHILD) as $key => $item)
                                            @if ($item->type == 'term')
                                                {!! $child_term_counter = $child_term_counter + 1 !!}
                                                <div class="row d-flex align-items-end"
                                                    id="Term_CHILD_{{ $child_term_counter }}">
                                                    <div class="col-md-4 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="itemname">Type </label>
                                                            <select class="form-select type_term_class"
                                                                name="child_rider_repeater_term[{{ $key }}][type_term]"
                                                                placeholder="Select Policy Type">
                                                                <option value="{{ $item->RiderFor }}" selected>
                                                                    {{ $item->RiderFor }} </option>
                                                                <option value="Monthly">Monthly</option>
                                                                <option value="Quarterly">Quarterly</option>
                                                                <option value="Semi-Annual">Semi-Annual</option>
                                                                <option value="Annual">Annual</option>
                                                            </select>
                                                            {{-- <input type="number" class="form-control" id="type" aria-describedby="Policy Type" placeholder="Select Policy Type" /> --}}
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="itemcost">Whole Term
                                                                Rate</label>
                                                            <input type="number"
                                                                class="form-control whole_term_rate_term_class"
                                                                value="{{ $item->whole_term_life }}"
                                                                name="child_rider_repeater_term[{{ $key }}][whole_term_rate_term]"
                                                                aria-describedby="Rate for whole and Term"
                                                                placeholder="$" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="itemquantity">20 Pay
                                                                Rate</label>
                                                            <input type="number"
                                                                class="form-control 20pay_rate_term_class"
                                                                value="{{ $item->pay20 }}"
                                                                name="child_rider_repeater_term[{{ $key }}][20pay_rate_term]"
                                                                aria-describedby="Rate for 20 pay policy"
                                                                placeholder="$" />
                                                        </div>
                                                    </div>


                                                    <div class="col-md-2 col-12 ">
                                                        <div class="mb-1">
                                                            <button class="btn btn-outline-danger text-nowrap px-1"
                                                                onclick="DeleteRiderHtml('Term_CHILD_',{{ $child_term_counter }})"
                                                                type="button">
                                                                <i data-feather="x" class="me-25"></i>
                                                                <span>Delete</span>
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
                                                onclick="AddCHILDHtml('Term',{{ $child_term_counter }})"
                                                class="btn btn-flat-success waves-effect add_step_button">
                                                <i data-feather="plus" class="me-25"></i>
                                                <span>Add ADB Step </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Invoice repeater -->
                        </div>
                    </section>

                </div>
                <!-- second repeater end -->
            </div>
            <!-- Second repeater for Term End  -->
        </div>

    </div>
</form>


@push('extended-js')
    <script>
        function IncrementRiderPhpVariable(variableName, FunctionName) {
            // console.log(variableName, FunctionName);    
            if (FunctionName == "ADB") {
                if (variableName == "Whole") {
                    adb_whole_counter =adb_whole_counter+ 1;
                    // console.log(adb_whole_counter);
                } else if (variableName == "Term") {
                    adb_term_counter =adb_term_counter+ 1;

                }
            } else if (FunctionName == "CHILD") {
                if (variableName == "Whole") {
                    child_whole_counter =child_whole_counter+ 1;

                } else if (variableName == "Term") {
                    child_term_counter =child_term_counter+ 1;

                }
            }

        }

        function DecrementRiderPhpVariable(variableName, FunctionName) {
            // console.log(variableName, FunctionName);
            if (FunctionName == "ADB") {
                if (variableName == "Whole") {
                    adb_whole_counter =adb_whole_counter- 1;

                } else if (variableName == "Term") {
                    adb_term_counter =adb_term_counter- 1;

                }
            } else if (FunctionName == "CHILD") {
                if (variableName == "Whole") {
                    child_whole_counter =child_whole_counter- 1;

                } else if (variableName == "Term") {
                    child_term_counter =child_term_counter- 1;

                }
            }
        }
    </script>
@endpush
