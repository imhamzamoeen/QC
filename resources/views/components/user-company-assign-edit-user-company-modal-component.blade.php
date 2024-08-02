<!-- Add Role Modal -->
<div class="modal fade text-start" id="edituserrtocompanymodal" tabindex="-1" aria-labelledby="Edit companies to user"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-add-new-role">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-5 pb-5">
                <div class="text-center mb-4">
                    <h1 class="role-title">Edit Companies to Users</h1>
                    <p>Let user explore more policies by assigning more companies to them</p>
                </div>
                <!-- Add role form -->
                <form method="POST" action="{{ route('Company-User.store') }}" id="usercompanyeditform">
                    @csrf
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">User To Companies Assignment</h3>
                            <div class="block-options">
                                <button type="submit" class="btn btn-sm btn-primary">Assign</button>
                                <button type="button" data-bs-dismiss="modal"
                                    class="btn btn-sm btn-primary">Cancel</button>

                                <button type="button"
                                    class="btn btn-icon btn-icon rounded-circle btn-outline-danger unassign_all_edit"
                                    style="float: right">
                                    <i data-feather="circle"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-icon btn-icon rounded-circle btn-outline-primary assign_all_edit"
                                    style="float: right">
                                    <i data-feather="check-circle"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row justify-content-center py-sm-3 py-md-5">

                                <div class="form-group col-md-6">
                                    <label for="Certificate">User</label>
                                    <select class="select2 form-select" id="select2-edit-user" name="user_id">
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Certificate">Companies</label>
                                    <select class="select2 form-select company-select" name="companies[]"
                                        id="select2-edit-companies" multiple="multiple"
                                        aria-placeholder="Choose companies">
                                    </select>
                                </div>
                            </div>

                        </div>
                           <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="mb-2 col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Search Filter</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row custom-options-checkable g-1">
                                                        <div class="col-md-6">
                                                            <input class="custom-option-item-check" type="radio" name="filter_check" id="customOptionsCheckableRadios1" value="annual"  />
                                                            <label class="custom-option-item p-1" for="customOptionsCheckableRadios1">
                                                                <span class="d-flex justify-content-between flex-wrap mb-50">
                                                                    <span class="fw-bolder">Rate</span>
                                                                    <span class="fw-bolder">    <i data-feather="dollar-sign" class="font-large-1 mb-75  bx-spin" ></i></span>
                                                                   
                                                                </span>
                                                                <i class=' bxs-like  bx-flashing'> <small style="color:red">the one with lower rate would come first</small></i> 
                                               
                                                            </label>
                                                        </div>
                    
                                                        <div class="col-md-6">
                                                            <input class="custom-option-item-check" type="radio" name="filter_check" id="customOptionsCheckableRadios2" value="rating" />
                                                            <label class="custom-option-item p-1" for="customOptionsCheckableRadios2">
                                                                <span class="d-flex justify-content-between flex-wrap mb-50">
                                                                    <span class="fw-bolder">Rating</span>
                                                                    <span class="fw-bolder">    <i data-feather="star" class="font-large-1 mb-75  bx-spin" ></i></span>
                                                                </span>
                                                                <i class=' bxs-like  bx-flashing'> <small style="color:red">The one with high rating would come first</small></i> 
                                                               
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
