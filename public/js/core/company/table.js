var quote="'";
const columns1 = [
    { data: null, defaultContent: '', },
    { data: "id", title: 'Sr.No', render: (data, type, row, meta) => meta.row + 1 },
    { data: "name", title: 'Name', },
    { data: "address", title: 'Address', },
    { data: "email", title: 'Email', },
    { data: "primary_contact", title: 'Primary Contact' },
    { data: "owner.name", title: 'Added By', },
    {
        title: "Edit",
        render: function (data, type, row, meta) {
        var html_to_add = '<button class="btn btn-primary" onclick="OpenModal('+quote+row.id+quote+')">Edit</button>' ;
          
            return html_to_add;
        },
        orderable: false,
        searchable: false,
    },
    

];

CreateTableCustomCompany("datatables-conf", columns1)



// Advanced Search Functions Ends
function CreateTableCustomCompany(classNme, columnDefs) {
    globalTableName = classNme;
    $("." + classNme).DataTable({
        processing: true,
        serverSide: true,
        ajax: window.location.href,
        columns: columnDefs,
        columnDefs: [
            {
                className: "control",
                orderable: false,
                targets: 0,
            },
            {
                targets: '_all',
                className: 'text-center',
                defaultContent: "No value"
            }
        ],
        dom: '<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-end"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        displayLength: 10,
        lengthMenu: [10, 25, 50, 75, 100],
        buttons: [
            {
                extend: "collection",
                className: "btn btn-outline-secondary dropdown-toggle me-2",
                text:
                    feather.icons["share"].toSvg({
                        class: "font-small-4 me-50",
                    }) + "Export",
                buttons: [
                    {
                        extend: "print",
                        text:
                            feather.icons["printer"].toSvg({
                                class: "font-small-4 me-50",
                            }) + "Print",
                        className: "dropdown-item",
                        exportOptions: {
                            columns: [ 0, 1, 2,3,4,5 ]
                        }
                    },
                    {
                        extend: "csv",
                        text:
                            feather.icons["file-text"].toSvg({
                                class: "font-small-4 me-50",
                            }) + "Csv",
                        className: "dropdown-item",
                        exportOptions: {
                            columns: [ 0, 1, 2,3,4,5 ]
                        }
                    },
                    {
                        extend: "excel",
                        text:
                            feather.icons["file"].toSvg({
                                class: "font-small-4 me-50",
                            }) + "Excel",
                        className: "dropdown-item",
                        exportOptions: {
                            columns: [ 0, 1, 2,3,4,5 ]
                        }
                    },
                    {
                        extend: "pdf",
                        text:
                            feather.icons["clipboard"].toSvg({
                                class: "font-small-4 me-50",
                            }) + "Pdf",
                        className: "dropdown-item",
                        exportOptions: {
                            columns: [ 0, 1, 2,3,4,5 ]
                        }
                    },
                    {
                        extend: "copy",
                        text:
                            feather.icons["copy"].toSvg({
                                class: "font-small-4 me-50",
                            }) + "Copy",
                        className: "dropdown-item",
                    },
                ],
            },
        ],
        orderCellsTop: true,
        responsive: {
            details: {
                type: "column",
                renderer: function (api, rowIdx, columns) {
                    var data = $.map(columns, function (col, i) {
                        return col.title !== "" // ? Do not show row in modal popup if title is blank (for check box)
                            ? '<tr data-dt-row="' +
                            col.rowIndex +
                            '" data-dt-column="' +
                            col.columnIndex +
                            '">' +
                            "<td>" +
                            col.title +
                            ":" +
                            "</td> " +
                            "<td>" +
                            col.data +
                            "</td>" +
                            "</tr>"
                            : "";
                    }).join("");

                    return data
                        ? $('<table class="table"/><tbody />').append(data)
                        : false;
                },
            },
        },
    });
}