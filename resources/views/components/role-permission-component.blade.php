<!--/ Role cards -->

<h3 class="mt-50">Roles With Permissions</h3>
<p class="mb-2">Know which permission are assigned to roles </p>
<!-- table -->
<!-- Basic table -->
<section id="basic-datatable">
<div class="row">
    <div class="col-12">
        <div class="card">
            <button href="javascript:void(0)" data-bs-target="#addRoleToPermissionModal" data-bs-toggle="modal"  class="btn btn-primary ">
              Assign Permission to Role
            </button>
                           
            <table class="datatables-basic1 table" id="role_per_table" style="padding:2%">
                <thead>
                    <tr>
                        <th></th>
                        <th>Role</th>
                        <th>Permission</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  
                    @foreach ($roles as $access_role_each)
                    @foreach ($access_role_each->permissions as $per)
                        <tr>
                            <td></td>
                            <td>{{ $access_role_each->name }}</td>
                            <td>{{ $per->name }}</td>
                            <td>
                                <button type="button" class="btn btn-relief-danger"  onclick="DelRolToPer('{{ $access_role_each->id }}','{{ $per->name }}')">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</section>
<!--/ Basic table -->

<!-- table -->