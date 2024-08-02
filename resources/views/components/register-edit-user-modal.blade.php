    <!-- Edit User Modal -->
    <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-5 px-sm-5 pt-50">
                    <div class="text-center mb-2">
                        <h1 class="mb-1">Edit User Information</h1>
                        <p>Update User here</p>
                    </div>
                
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <div class="img-hover-zoom--colorize">
                                    <img class="edit-user-img" src="{{asset('images/users/AMS_Default.png')}}" alt="" style="width:300px;height:300px;border-radius:50px">
                                </div>
                            </div>
                            <div class="col-md-6 mb-1">
                                <form id="editUserForm" class="row gy-1 pt-75"  method="POST" Action="{{route('register.EditUser')}}" >
                                    <input type="hidden" name='id' class="edit-user-id" id="id">
                                <div class="row">
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="vertical-modern-username">Name</label>
                                        <input type="text" class="form-control edit-user-name" id="name" name="name" value="{{ old('name') }}"
                                            placeholder="Sir" aria-describedby="name" tabindex="1" required />
                                    </div>
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="vertical-modern-email">Email</label>
                                        <input type="email" class="form-control edit-user-email" id="login-email" name="email"
                                            value="{{ old('email') }}" placeholder="example@example.com"
                                            aria-describedby="login-email" tabindex="1" required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-2 col-md-12">
                                        <select class="select2 w-100 " name="user_type" id="user_type" required>
            
                                            <option label="" selected disabled>Select a user_type </option>
                                            <option value="agent">Agent</option>
                                            <option value="admin">Admin</option>
                                            <option value="super_admin">Super_Admin</option>
            
                                        </select>
                                    </div>
            
                                </div>
                                <div class="row">
                                    <div class="mb-2 col-md-12">
                                        <select class="select2 w-100 " name="status" id="user_status" required>
            
                                            <option label="" selected disabled>Select a User's Status </option>
                                            <option value="active">Active</option>
                                            <option value="inactive">InActive</option>
            
                                        </select>
                                    </div>
            
                                </div>
                              
                                <div class="row">
                                    <div class="col-12 text-center mt-2 pt-50">
                                        <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="modal" aria-label="Close">
                                            Discard
                                        </button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                  
                </div>
            </div>
        </div>
    </div>
    <!--/ Edit User Modal -->