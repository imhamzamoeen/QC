const policiesTabColumns = [{
        data: null,
        defaultContent: '',
    },
    {
        data: "id",
        title: 'Sr.No',
        render: (data, type, row, meta) => meta.row + 1
    },
    {
        title: 'Policy Number',
        data: "policy_number"
    },
    {
        title: 'Expiry Date',
        data: "expiry_date"
    },
    {
        title: 'Line of Business',
        data: "line_of_business"
    },
    {
        title: 'Fax No',
        data: "fax_no"
    },
    {
        title: 'Carrier Name',
        data: "ageny_carrier.name"
    },
    {
        title: 'Business Type',
        data: "business_type.name"
    },
    {
        title: 'Agency Name',
        data: "agency.name"
    },
    {
        title: 'MGA',
        data: "mga.name"
    },
    {
        title: 'IMO',
        data: 'imo.name'
    }
];
