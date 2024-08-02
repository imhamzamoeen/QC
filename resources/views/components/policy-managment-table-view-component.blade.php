<section id="advanced-search-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">Insruance Policies</h4>
                    <div class="pull-right">
                        {{-- <button class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#adduserrtocompanymodal">Assign
                            Companies to User
                        </button> --}}
                    </div>
                </div>

                <hr class="my-0" />
                <div class="card-datatable">
                    <table class="datatables-conf table ic-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Company Name</th>
                                <th>Policy Title</th>
                                <th>Level</th>
                                <th>Type</th>
                                <th>Edit</th>
                                <th>Check</th>
                            </tr>
                        </thead>
                        <tbody class="insurance_policies_table">

                            @foreach ($all_policies as $each_policy)
                                <tr id="{{ $each_policy->id }}">
                                    <td>

                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $each_policy->company->name }}
                                    </td>
                                    <td>
                                        {{ $each_policy->policy_name }}
                                    </td>
                                    <td>
                                        {{ $each_policy->level }}
                                    </td>
                                    <td>
                                        {{ $each_policy->policy_type }}
                                    </td>
                                    <td> <button onclick="EditModal({{ $each_policy }})"
                                            class="btn btn-primary  text-nowrap add-new-role ">
                                            Edit
                                        </button></td>
                                    <td> <a target="_blank" rel="noopener noreferrer"
                                            href='{{ route('PolicyManagement.checkrate', ['name' => $each_policy->policy_name]) }}'
                                            class="btn btn-primary  text-nowrap  ">
                                            Check Rates
                                        </a></td>
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
                        exportOptions: {
                            columns: [0,1, 2, 3, 4]
                        }
                    },
                    {
                        extend: "excel",
                        text: feather.icons["file"].toSvg({
                            class: "font-small-4 me-50",
                        }) + "Excel",
                        className: "dropdown-item",
                        exportOptions: {
                            columns: [0,1, 2, 3, 4]
                        }
                    },
                    {
                        extend: "pdf",
                        text: feather.icons["clipboard"].toSvg({
                            class: "font-small-4 me-50",
                        }) + "Pdf",
                        className: "dropdown-item",
                        exportOptions: {
                            columns: [0,1, 2, 3, 4]
                        }
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
