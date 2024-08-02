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
                    Uploading a new file will update/replace the existing records of Height-Weight.so be careful.
                </span>
            </div>
        </div>
    </div>
    <div class="card-header">
        <h4>Senior Life Height weight File import</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('dashboard.test.hieght-weights.seniorlife.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row mb-1">

                    <div class="col-md-4">
                        <label for="">Select a file</label>
                        <input class="form-control" type="file" name="file" required />
                        <small class="text-muted bx-flashing">&nbsp;Policy number will come from faisal's side.</small>
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
