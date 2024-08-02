const columns1 = [
    { data: null, defaultContent: '', },
    { data: "id", title: 'Sr.No', render: (data, type, row, meta) => meta.row + 1 },
    { data: "user_id", title: 'User', },
    { data: "address", title: 'Address',render(){} },
    { data: "email", title: 'Email', },
    { data: "primary_contact", title: 'Primary Contact' },
    { data: "owner.name", title: 'Added By', },
    {
        data: "id",
        title: "Action",
        render: function (data, type, row, meta) {
            return (
                '<a href="javascript:void(0)" class="delete btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Company" data-bs-original-title="Tooltip on top"  data-id="' +
                data +
                '" data-table="ic-table"><i class="fa fa-trash bx-tada" aria-hidden="true"></i></a>'
            );
        },
        orderable: false,
        searchable: false,
    },
];

makeAdvDT("datatables-conf")