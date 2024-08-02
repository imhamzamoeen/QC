<div class="card">
    <div class="card-header">
        <h4>Digital Agent Insurance Import</h4>
    </div>
    <div class="container mb-2">
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
        <div class="container">
            <div class="row">
                <div class="card-header">
                    <strong class="text-danger">Note : File Header must match the image below otherwise it will be
                        failed/ignored.</strong>
                </div>
                <div class="col s10 text-center">
                    <img class="w-50 center" src="{{ asset('images/headers/golden-agent.PNG') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('dashboard.test.digital-agent-insurance.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row mb-1">
                    <div class="col-md-12">
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
