<div class="card">
    <div class="container">
        <div class="alert alert-info mt-1 mb-1" role="alert">
            <h4 class="alert-heading">Info</h4>
            <div class="alert-body">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-info me-50 bx-flashing">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" y1="16" x2="12" y2="12"></line>
                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                </svg>
                <span>
                    Uploading a new file will update/replace the existing records of same company-state.
                </span>
            </div>
        </div>
    </div>
    <div class="card-header">
        <h4>Company-State Exists File Import</h4>
    </div>
    <div class="card-body">
        <form id="company-state-exists-form" action="{{ route('CompanyManagment.Company-State.store') }}"
            method="POST" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="container">
                <div class="row mb-1">
                    <div class="card">
                        <div class="col-md-4">
                            <label for="">Select a file</label>
                            <input class="form-control" type="file" name="file" required />
                        </div>
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-md-4">
                        <button class="btn btn-success" type="submit">Upload File</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>



<div class="card">
    <div class="container">
        <div class="alert alert-warning mt-1 mb-1" role="alert">
            <h4 class="alert-heading">Info</h4>
            <div class="alert-body">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-info me-50 bx-flashing">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" y1="16" x2="12" y2="12"></line>
                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                </svg>
                <span>
                    Select all the states from the drop down, where this company is active
                </span>
            </div>
        </div>
    </div>
    <div class="card-header">
        <h4>Company-State Addition thorugh Drop Down</h4>
    </div>
    <div class="card-body">
        <form id="company-state-addition-form" action="{{ route('CompanyManagment.add_company_state') }}"
            method="POST" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="container">
                <div class="row mb-1">
               
                    <div class="col-md-6">
                        <label for="">Comapny Name</label>
                        <input class="form-control" type="text" name="company_name" maxlength="15" required placeholder="Company Abbr"/>
                    </div>
                    <div class="col-md-6">
                        <label for="">Select States</label>
                        <select class="select2 form-select state-select" name="states[]"
                        id="select2-states" multiple="multiple" required
                        aria-placeholder="Choose states">
                        <option value="" disabled >Choose states</option>
                            @forelse ($states as $each_state)
                                <option value="{{ $each_state }}">
                                    {{ $each_state }}</option>
                            @empty
                                <option value="" disabled> No state found, ask admin to upload file</option>
                            @endforelse
                        </select>
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-md-4">
                        <button class="btn btn-success" type="submit">Activate Company</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
