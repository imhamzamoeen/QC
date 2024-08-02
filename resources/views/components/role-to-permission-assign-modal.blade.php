  <!-- Add Role Modal -->
  <div class="modal fade" id="addRoleToPermissionModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-add-new-role">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-5 pb-5">
                <div class="text-center mb-4">
                    <h1 class="role-title">Give Permission to you Roles</h1>
                    <p>Make Your Roles PowerFul</p>
                </div>
                <!-- Add role form -->
                <form method="POST" action="{{route('store_role_to_permission')}}"  id="rolePermissionForm">
                    @csrf
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Assign Permission to Role</h3>
                            <div class="block-options">
                                <button type="submit"  class="btn btn-sm btn-primary">Assign</button>
                                <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-primary">Cancel</button>
    
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row justify-content-center py-sm-3 py-md-5">
    
                                <div class="form-group col-md-6">
                                    <label for="Certificate">Role</label>
                                    <select class="select2 form-select " id="select2-roleper" name="role" >
                               
    
    
                                        @foreach ($roles as $role_each)
                                            <option value="{{ $role_each->id }}">{{ $role_each->name }}:{{ $role_each->guard }}</option>
                                        @endforeach
                                    </select>
    
    
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Certificate">Permissions</label>
                                    <select class="select2 form-select" id="select2-perrole" name="permissions[]" multiple="multiple">
                                        @foreach ($permissions as $permissions_each)
                                            <option value="{{ $permissions_each->name }}">{{ $permissions_each->name }}</option>
                                        @endforeach
                                    </select>
    
    
    
                                </div>
                            </div>
                </form>
                <!--/ Add role form -->
            </div>
        </div>
    </div>
</div>
<!--/ Add Role Modal -->