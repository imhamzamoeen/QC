<div class="card">
    <div class="container">
        <div class="alert alert-danger mt-1 alert-validation-msg bx-flashing" role="alert">
            <div class="alert-body d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-info me-50">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" y1="16" x2="12" y2="12"></line>
                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                </svg>
                <span><strong>Note : </strong>New Vista file structure must be kept in view before
                    uploading.</span>
            </div>
        </div>
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
                    Uploading a new file will update/replace the existing records of same age - face amount - age.
                </span>
            </div>
        </div>
    </div>
    <div class="card-header">
        <h4>New Vista Insurance Import</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('dashboard.test.new-vista-insurance.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row mb-1">
                    <div class="col-md-6">
                        <label for="">Gender ( File uploading )</label>
                        <select class="form-select" name="gender" required>
                            <option value="">Select the gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="">Select a file</label>
                        <input class="form-control" type="file" name="file" required />
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
