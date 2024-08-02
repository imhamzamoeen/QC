@push('extended-css')
    @include('vendors.sweet-alerts')
@endpush
<form action="{{ route('dashboard.policy.submit_formula') }}" method="POST" class="invoice-repeater" id="repeaterForm" novalidate>
    @csrf
    <div class="row">
        <div class="mb-1 col-md-6">
            <button type="button" class="btn btn-icon btn-primary repeater-btn" data-repeater-create type="button">
                <i data-feather="plus" class="me-25"></i>
                <span>Add Step</span>
            </button>
        </div>
        {{-- <div class="mb-1 col-md-6">
            <button type="submit" class="btn btn-icon btn-success" style="float: right">
                <i class="fa fa-check" aria-hidden="true"></i>
                <span class="ml-1">Submit Formula</span>
            </button>
        </div> --}}
    </div>
    <div data-repeater-list="formula">
        <div data-repeater-item>
            <div class="row d-flex align-items-end">
                <div class="col-md-4 col-12">
                    <div class="mb-1">
                        <label class="form-label" for="itemname">Step Description</label>
                        <input type="text" class="form-control" name="step_detail" id="itemname"
                            aria-describedby="itemname" placeholder="Step Details" required />
                    </div>
                </div>
                <div class="col-md-2 col-12">
                    <div class="mb-1">
                        <label class="form-label" for="itemcost">Operator #1</label>
                        <select class="select2Tag w-100 form-control" name="operator_1" required>
                            <option value="">Select column or type value</option>
                            <optgroup label="Columns">
                                <option value="face_amount">Face Amount</option>
                                <option value="monthly_premium">Monthly Premium</option>
                                <option value="annual_premium">Annual Premium</option>
                                <option value="age">Age</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-12">
                    <div class="mb-1">
                        <label class="form-label" for="itemquantity">Operation</label>
                        <select class="select2 w-100 form-control" name="operation" required>
                            <option value="">Select operation</option>
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                            <option value="%">%</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-12">
                    <div class="mb-1">
                        <label class="form-label" for="staticprice">Opeartor #2</label>
                        <select class="select2Tag w-100 form-control" name="operator_2" required>
                            <option value="">Select column or type value</option>
                            <optgroup label="Columns">
                                <option value="face_amount">Face Amount</option>
                                <option value="monthly_premium">Monthly Premium</option>
                                <option value="annual_premium">Annual Premium</option>
                                <option value="age">Age</option>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <div class="col-md-2 col-12 mb-50">
                    <div class="mb-1">
                        <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete type="button">
                            <i data-feather="x" class="me-25"></i>
                            <span>Delete</span>
                        </button>
                    </div>
                </div>

            </div>
            <hr />
        </div>
    </div>
</form>

@push('extended-js')
    <script src="{{ asset('js/formula/form_repeater.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/forms/form-repeater.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>
@endpush
