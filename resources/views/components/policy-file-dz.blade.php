@push('extended-css')
    @include('vendors.dz')
@endpush

<div class="row mb-2 dz-upload d-none">
    <div class="col-12">
        <div class="row">
            <div class="col-md-6">
                <h4 class="card-title">Select the file to upload.</h4>
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-success dz-btn d-none" style="float: right;">
                    <span class="spinner-border spinner-border-sm dz-spinner" role="status" aria-hidden="true"
                        style="display: none"></span>
                    <span class="ms-25 align-middle dz-btn-inner">Upload Policy Now</span>
                </button>
            </div>
        </div>
        <div class="container mt-2 mb-2 progress-bar-dz d-none">
            <p>Uploading...</p>
            <div class="progress progress-bar-info">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-valuenow="100" aria-valuemin="100" aria-valuemax="100" style="width: 100%"></div>
            </div>
        </div>
        <div class="card-body">
            <p class="card-text">
                Please select the file relevant to <code id="placeSelectedValHere"></code> Other wise the file will be
                rejected by the system.
                <code>maxFiles at a time : 1</code>
            </p>
            <small>General file has coloumn in sequence: <code  style="color:red">age,monthly_premium,face_amount,gender,smoker_status
            </code>, else for specific contact admin </small>
            <div class="errors-print text-danger font-medium text-danger mb-1 mt-1" style="display: none;"></div>

            <form action="{{ route('dashboard.company-policies.store') }}" class="dropzone dropzone-area"
                id="dpz-single-file">
                <div class="dz-message">Drop files here or click to upload.</div>
            </form>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center my-1 d-none loader-spin2 mt-4 mb-4">
    <div class="spinner-border" role="status" aria-hidden="true"></div>
</div>
<form id="stepper3" novalidate>
    <div class="container row mb-4">
        {{-- <div class="col-md-4">
            <label for="">Select a file to upload</label>
            <select class="form-select select2 select3" name="upload_type" required>
                <option value="">Select the file uploading type.</option>
                @foreach ($routes as $route)
                    <option value="{{ $route->name }}">{{ $route->name }}</option>
                @endforeach
            </select>
        </div> --}}
        <div class="col-md-6">
            <label for="">Gender ( File uploading )</label>
            <select class="form-select select2 select3" name="gender" required>
                <option value="">Select the gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="">Smoker Status <small class="text-muted bx-flashing">&nbsp;*If not known, leave it
                    blank.</small></label>
            <select class="form-select select2 select3" name="smoker_status">
                <option value="">Select the status</option>
                <option value="smoker">Smoker</option>
                <option value="non-smoker">Non-Smoker</option>
            </select>
        </div>
    </div>
</form>
