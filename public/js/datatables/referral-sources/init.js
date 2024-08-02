const referralSourceColumns = [{
        data: null,
        defaultContent: '',
    },
    {
        title: 'Sr.No',
        render: (data, type, row, meta) => meta.row + 1
    },
    {
        title: 'Form Insured',
        data: "form_insured"
    },
    {
        title: 'Company Name',
        data: "company_name"
    },
    {
        title: 'Email',
        data: "email"
    },
    {
        title: 'Cell',
        data: "cell"
    },
    {
        title: 'Action',
        data: "id",
        render: function (data, type, row) {
            return '<button class="btn btn-danger delete" title="Delete Referral Source" style="margin-right:2%" data-id="' + data + '"><i class="fa fa-trash "></i></button>' +
                '<button class="btn btn-info edit" title="Edit Referral Source" data-id="' + data + '"><i class="fa fa-edit "></i></button>';
        }
    },
];
