@push('extended-css')
    @include('vendors.country-details-DD')
    @include('vendors.select2')
@endpush

<div class="col-md-6 col-12">
    <div class="mb-1">
        <label class="form-label" for="country">Country</label>
        <select class="select2 form-select country-dropdown" name="country" placeholder="Some Country" >
            <option selected="" value="">Select Country</option>
            @foreach ($countries as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="col-md-6 col-12">
    <div class="mb-1">
        <label class="form-label" for="state">State</label>
        <select class="select2 form-select state-dropdown" name="state" placeholder="Some State">
            <option selected="" value="">Select State</option>
        </select>
    </div>
</div>

<div class="col-md-6 col-12">
    <div class="mb-1">
        <label class="form-label" for="city">City</label>
        <select class="select2 form-select city-dropdown" name="city" placeholder="Some City" >
            <option selected="" value="">Select City</option>
        </select>
    </div>
</div>


<div class="col-md-6 col-12">
    <div class="mb-1">
        <label class="form-label" for="zip">Zip Codes</label>
        <select class="select2 form-select zip-dropdown" name="zip" placeholder="Some Zip Code" >
            <option selected="" value="">Select Zip Code</option>
        </select>
    </div>
</div>
