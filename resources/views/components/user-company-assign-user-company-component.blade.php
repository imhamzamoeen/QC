<section id="advanced-search-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">User Companies Table</h4>
                    <div class="pull-right">
                        <button class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#adduserrtocompanymodal">Assign
                            Companies to User
                        </button>
                    </div>
                </div>

                <hr class="my-0" />
                <div class="card-datatable">
                    <table class="datatables-conf table ic-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Picture</th>
                                <th>Name</th>
                                <th>Company</th>
                                <th>Operation</th>
                                <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody class="usercomapnytable">
                           
                            @foreach ($result as $eachperson)
                                <tr id="{{$eachperson->id}}">
                                    <td>
                                       
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        <img src="{{asset('images/users/'.$eachperson->user->UserAttributes->image)}}" style="height:75px;width:75px;border-radius:50%">
                                    </td>
                                    <td>
                                        {{ $eachperson->user->name }}:{{ $eachperson->user->email }}
                                    </td>
                                    <td>    
                                        @forelse (json_decode($eachperson->companies) as $company)
                                            <li>{{$company}}</li>
                                        @empty
                                                No company Assigned
                                        @endforelse
                                       </td>
                                    <td> <button onclick="EditModal({{$eachperson}})"
                                            class="btn btn-primary  text-nowrap add-new-role ">
                                            Edit
                                        </button></td>
                                        <td> <button onclick="Delete('{{$eachperson->id}}')"
                                            class="btn btn-primary  text-nowrap add-new-role ">
                                            Delete
                                        </button></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</section>
@push('extended-js')
    <script>
        $('.ic-table').DataTable({
            dom: '<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-end"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
            buttons: [{
                extend: "collection",
                className: "btn btn-outline-secondary dropdown-toggle me-2",
                text: feather.icons["share"].toSvg({
                    class: "font-small-4 me-50",
                }) + "Export",
                buttons: [{
                        extend: "print",
                        text: feather.icons["printer"].toSvg({
                            class: "font-small-4 me-50",
                        }) + "Print",
                        className: "dropdown-item",
                    },
                    {
                        extend: "csv",
                        text: feather.icons["file-text"].toSvg({
                            class: "font-small-4 me-50",
                        }) + "Csv",
                        className: "dropdown-item",
                    },
                    {
                        extend: "excel",
                        text: feather.icons["file"].toSvg({
                            class: "font-small-4 me-50",
                        }) + "Excel",
                        className: "dropdown-item",
                    },
                    {
                        extend: "pdf",
                        text: feather.icons["clipboard"].toSvg({
                            class: "font-small-4 me-50",
                        }) + "Pdf",
                        className: "dropdown-item",
                    },
                    {
                        extend: "copy",
                        text: feather.icons["copy"].toSvg({
                            class: "font-small-4 me-50",
                        }) + "Copy",
                        className: "dropdown-item",
                    },
                ],
            }, ],
        });
    </script>
@endpush
